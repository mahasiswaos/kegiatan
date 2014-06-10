<?php

/**
 * Description of ProfileController
 *
 * @author aljufry
 */

namespace App\Controllers;

use App\Controllers\AdminController;
use App\Models\Profile;
use App\Models\Users;
use View;
use Input;
use Validator;
use Redirect;
use Session;

class ProfileController extends AdminController {
    
    /**
     * 
     * @return View
     */
    public function profileView() {
        $input = Profile::all();
        $data = [
            'isi' => $input,
        ];
        return View::make('profile.view', $data);
    }

    /**
     * 
     * @return View
     */
    public function prifileAdd() {
        $user = Users::all();
        $data = [
            'isi' => $user,
        ];
        return View::make('profile.add', $data);
    }

    /**
     * 
     * @return Redirect
     */
    public function prosesAdd() {
        $rules = [
            'id' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'gambar' => 'required|max:2000|mimes:jpg,jpeg,png',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/profile/add')->withErrors($validator);
        } else {
            /*
             * jika valid simpan ke database
             */
            $file = Input::file('gambar');
            $prefixDest = 'public/';
            $destinationPath = 'images';
            $filename = $file->getClientOriginalName();
            $pathFile = $prefixDest . $destinationPath;
            $pathDb = $destinationPath . '/' . $filename;

            //eksekusi penyimpanan file yang di upload
            //menuju folder public
            Input::file('gambar')->move($pathFile, $filename);

            $prof = new Profile;
            $in = Input::all();
            $prof->users_id = $in['id'];
            $prof->nama = $in['nama'];
            $prof->gender = $in['gender'];
            $prof->tempat_lahir = $in['tmp_lahir'];
            $prof->tanggal_lahir = $in['tgl_lahir'];
            $prof->alamat = $in['alamat'];
            $prof->picture = $pathDb;
            $prof->save();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully created band!');
            return Redirect::to('profile/view');
        }
    }

    /**
     * 
     * @param type $id
     * @return View
     */
    public function profileEdit($id) {
        $profil = Profile::find($id);
        $user = $profil->users;
        $data = [
            'user' => $user,
            'isi' => $profil,
        ];
        return View::make('profile.edit', $data);
    }

    /**
     * 
     * @param type $id
     * @return Redirect
     */
    public function prosesUpdate($id) {
        $rules = [
            'id' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'gambar' => 'required|max:2000|mimes:jpg,jpeg,png',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/profile/edit/' . $id)->withErrors($validator);
        } else {
            /*
             * jika valid simpan ke database
             */
            $file = Input::file('gambar');
            $prefixDest = 'public/';
            $destinationPath = 'images';
            $filename = $file->getClientOriginalName();
            $pathFile = $prefixDest . $destinationPath;
            $pathDb = $destinationPath . '/' . $filename;

            //eksekusi penyimpanan file yang di upload
            //menuju folder public
            Input::file('gambar')->move($pathFile, $filename);

            $prof = Profile::find($id);
            $in = Input::all();
            $prof->users_id = $in['id'];
            $prof->nama = $in['nama'];
            $prof->gender = $in['gender'];
            $prof->tempat_lahir = $in['tmp_lahir'];
            $prof->tanggal_lahir = $in['tgl_lahir'];
            $prof->alamat = $in['alamat'];
            $prof->picture = $pathDb;
            $prof->save();

            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully created band!');
            return Redirect::to('profile/view');
        }
    }

    /**
     * 
     * @param type $id
     * @return Redirect
     */
    public function profileDelete($id) {
        $user = Profile::find($id);
        $user->delete();
        Session::flash('message', 'Successfully deleted the activity!');
        return Redirect::to('profile/view');
    }

}
