<?php

/**
 * namespace digunakan untuk menyatakan 
 * lokasi directory / folder 
 * tempat file ini berada.
 * 
 * Cara penulisan namespace adalah 
 * dengan menuliskan nama directory / folder
 * diawali dengan huruf besar
 * seperti pada sintak dibawah ini.
 */

namespace App\Controllers;

/**
 * "use" merupakan sebuah sintak
 * yang digunakan untuk memanggil
 * sebuah class yang digunakan dalam
 * file class ini (BaseController)
 */
use App\Controllers\BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

/**
 * AdminController adalah sebuah Controller
 * yang digunakan melakukan filter terhadap
 * autentikasi user.
 * 
 * Jika user belum melakukan login maka
 * AdminController akan mengarahkan ke halaman
 * login.
 *
 * @author aljufry
 */
class AdminController extends BaseController {

    function __construct() {
        
        /**
         * Sintaks ini untuk memblock semua halaman k
         */
        $this->beforeFilter('auth', array('except' => '/login'));
    }

}
