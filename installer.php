<?php

// Logic to determine the environment. This could be determined many ways, and depends on how your
// application's environment is determined. If you're making use of Laravel's environment
// capabilities, you could do the following:
$env = trim(exec('php artisan env'));

// Clean up response to get the value we actually want
$env = substr($env, strrpos($env, ' ') + 1);

$envFlag = ($env === 'production')
    ? '--production'
    : '';

// Install npm
passthru("npm install {$envFlag}");
// Install bower
passthru("npm run dev");