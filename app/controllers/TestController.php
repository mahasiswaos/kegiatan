<?php

namespace App\Controllers;

use App\Controllers\AdminController;
use App\Controllers\BaseController;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

/**
 * Description of TestController
 *
 * @author nunenuh
 */
class TestController extends BaseController {

    public function index() {
		$inp = Input::all();
		
        $a = Users::find(1);
        echo "<pre>";
        print_r($a);
        echo "</pre>";
    }

}
