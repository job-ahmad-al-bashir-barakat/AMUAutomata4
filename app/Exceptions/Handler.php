<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        // get exeption class name
        $exceptionClassName = class_basename($exception);
        // get reflection for this class
        $ref = new \ReflectionClass($this);
        // get all methods protcted for this class
        $methods = $ref->getMethods(\ReflectionMethod::IS_PROTECTED);
        // loop on this methods
        foreach ($methods as $method) {
            // get method param
            $parameters = $method->getParameters();
            // check if param 2 is exists on this class and check if this param 2 is equal to exceptionClassName then call this protected method
            if (isset($parameters[1]) && studly_case($method->getParameters()[1]->getName()) == $exceptionClassName) {
                return call_user_func_array([$this, $method->getName()], [$request, $exception]);
            }
        }

        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $authenticationException
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $authenticationException)
    {
        if ($request->expectsJson()) {
            return response()->json(
                [
                    'error_message' => 'Unauthenticated.',
                    'redirect_url' => \RouteUrls::login(),
                    'show_notify' => true
                ], 401);
        }

        return redirect()->guest(route('login'));
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param TokenMismatchException $tokenMismatchException
     * @return \Illuminate\Http\Response
     */
    protected function tokenMismatched($request, TokenMismatchException $tokenMismatchException)
    {
        if($request->ajax()) {
            return response()->json(
                [
                    'error_message' => 'Token Mismatched.',
                    'redirect_url' => redirect()->back()->getTargetUrl(),
                    'show_notify' => true
                ], 500);
        }
        return redirect()->back();
    }
}
