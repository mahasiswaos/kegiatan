<?php

namespace App\Controllers;

use App\Controllers\AdminController;
use App\Controllers\BaseController;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

/**
 * Description of TestController
 *
 * @author nunenuh
 */
class TestController extends BaseController {

    public function index() {
        $var = 'haidar';
        $secret = Crypt::encrypt($var);
        Printpre::out($secret);
    }

}
