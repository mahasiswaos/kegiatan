<?php

namespace App\Controllers;

use App\Controllers\AdminController;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
/**
 * Description of TestController
 *
 * @author nunenuh
 */
class TestController extends AdminController {
    public function index() {
        
        $user = Auth::user();
        
//        $decrypted = Crypt::decrypt($user->password);
//        
//        \Printpre::aut($decrypted);
    }
}
