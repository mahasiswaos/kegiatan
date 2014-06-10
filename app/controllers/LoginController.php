<?php
namespace App\Controllers;

use App\Controllers\BandController;
use Input;
use Validator;
use Auth;
use Redirect;
use Session;
use App\Models\Users;
use View;

class LoginController extends BaseController {
   

    public function index() {
        return View::make('login.index');
    }
    
    public function prosesLogin() {
        $inp = Input::all();
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $valid = Validator::make($inp, $rules);
        if($valid->fails()){
            return Redirect::to('/login')->withErrors($valid);
        }else{
            $data = [
              'email' => $inp['email'],
              'password' => $inp['password']
            ];
            if(Auth::attempt($data)){
                Session::flash('message', 'Successfully Login!');
                return Redirect::intended('/users');
            }else{
                Session::flash('message', 'Email dan Password no valid!');
                return Redirect::to('/login');
            }
        }
    }
    
    public function doLogout(){
        Auth::Logout();
        return Redirect::to('login');
    }

}
