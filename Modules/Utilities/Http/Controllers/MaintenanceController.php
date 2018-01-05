<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Artisan;

class MaintenanceController extends Controller
{
    public function up() {

        Artisan::call('up');
    }

    public function down() {

        Artisan::call('down');
    }

    public function md5($code) {

        return bcrypt($code);
    }
}
