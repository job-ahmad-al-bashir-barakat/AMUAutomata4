<?php
namespace Aut\SourceGuardian\Controllers;

use App\Http\Controllers\Controller;
use Blade;
use Exception;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\View\Compilers\BladeCompiler;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class SourceGuardianController extends Controller
{
    function encrypt()
    {

        $finder = app('view')->getFinder();

        $paths = $finder->getHints();

        $paths['app'] = $finder->getPaths();

        $result = [];

        try {

            foreach ($paths as  $package => $packagePaths) {

                foreach ($packagePaths as $i => $path) {
                    $result[$package] = $this->compile($path, storage_path("framework/source_guardian/{$package}/{$i}"));
                }
            }

        } catch (Exception $e) {
            $result[$package] = $e->getMessage();
        }

        return $result;
    }

    function decrypt()
    {
        $finder = app('view')->getFinder();

        $paths = $finder->getHints();

        $paths['app'] = $finder->getPaths();

        $result = [];
        try {

            foreach ($paths as  $package => $packagePaths) {

                foreach ($packagePaths as $i => $path) {
                    $result[$package] = $this->deCompile(storage_path("framework/source_guardian/{$package}/{$i}"), $path, storage_path("framework/source_guardian/{$package}/{$i}"));
                }
            }

        } catch (Exception $e) {
            $result[$package] = $e->getMessage();
        }
        return $result;
    }

    private function compile($viewsPath, $viewsBackup)
    {
        $bladeCompiler = new BladeCompiler(new Filesystem(), $viewsPath);
        $directives = Blade::getCustomDirectives();
        foreach ($directives as $name => $handler) {
            $bladeCompiler->directive($name, $handler);
        }

        $objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($viewsPath), RecursiveIteratorIterator::SELF_FIRST);

        $total = $ok = 0;
        $result = [
            'Final' => '',
            'files' => [],
        ];

        foreach ($objects as $bladename => $object) {
            if (strstr($bladename, '.blade.php')) {
                $total++;
                $fileStatus = "$bladename - ";
                try {
                    $bladecontents = file_get_contents($bladename);
                    $phpcontents = $bladeCompiler->compileString($bladecontents);
                    $phpname = str_replace('.blade.php', '.php', $bladename);
                    file_put_contents($phpname, $phpcontents);
                    $bladebackup = str_replace($viewsPath, $viewsBackup, $bladename);
                    $filesystem = new Filesystem();
                    if (!$filesystem->isDirectory(dirname($bladebackup))){
                        $filesystem->makeDirectory(dirname($bladebackup), 0755, true);
                    }
                    rename($bladename, $bladebackup);
                    $fileStatus .= "OK";
                    $ok++;
                } catch (Exception $e) {
                    $fileStatus .= $e->getMessage();
                }
                $result['files'][] = $fileStatus;
            }
        }
        $result['Final'] = "Total:$total, compiled:$ok, errors:" . ($total - $ok);
        return $result;
    }

    private function deCompile($baseBackup, $viewsPath, $viewsBackup)
    {
        if (!is_dir($viewsBackup)) {
            return [
                'Final' => 'Resources backup not exists',
                'files' => [],
            ];
        }
        $objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($viewsBackup), RecursiveIteratorIterator::SELF_FIRST);
        $result = [
            'Final' => '',
            'files' => [],
        ];
        $total = $ok = 0;
        foreach ($objects as $bladeName => $object) {
            if (strstr($bladeName, '.blade.php')) {
                $total++;
                $fileStatus = "{$bladeName} - ";
                try {
                    $bladeNewName = str_replace($viewsBackup, $viewsPath, $bladeName);
                    $phpName = str_replace('.blade.php', '.php', $bladeNewName);
                    rename($bladeName, $bladeNewName);
                    if (file_exists($phpName)) {
                        unlink($phpName);
                    }
                    $fileStatus .= "OK";
                    $ok++;
                } catch (Exception $e) {
                    $fileStatus .= $e->getMessage();
                }
                $result['files'][] = $fileStatus;
            }
        }
        \File::deleteDirectory($baseBackup, true);
        $result['Final'] = "Total:$total, compiled:$ok, errors:" . ($total - $ok);
        return $result;
    }
}