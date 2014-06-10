<?php

/**
 * Description of KegiatanController
 *
 * @author aljufry
 */

namespace App\Controllers;

use App\Controllers\AdminController;
use Input;
use View;
use App\Models\Kegiatan;
use App\Models\Users;
use Validator;
use Session;
use Redirect;

class KegiatanController extends AdminController {

    public function kegiatanView() {
        $input = Kegiatan::all();
        $data = [
            'isi' => $input,
        ];
        return View::make('kegiatan.view', $data);
    }

    public function kegiatanAdd() {
        $user = Users::all();
        $data = [
            'isi' => $user,
        ];
        return View::make('kegiatan.add', $data);
    }

    public function prosesAdd() {
        $rules = [
            'id' => 'required',
            'name' => 'required',
            'keterangan' => 'required',
            'mulai' => 'required',
            'berahir' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/kegiatan/add')->withErrors($validator);
        } else {
            /*
             * jika valid simpan ke database
             */
            $in = Input::all();
            $ket = new Kegiatan;
            $ket->users_id = $in['id'];
            $ket->name = $in['name'];
            $ket->keterangan = $in['keterangan'];
            $ket->waktu_mulai = $in['mulai'];
            $ket->waktu_berakhir = $in['berahir'];
            $ket->save();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully created band!');
            return Redirect::to('kegiatan/view');
        }
    }

    public function kegiatanEdit($id) {
        $ket = Kegiatan::find($id);
        $user = $ket->users;
        $data = [
            'user' => $user,
            'isi' => $ket,
        ];
        return View::make('kegiatan.edit', $data);
    }

    public function prosesUpdate($id) {
        // validation
        $rules = [
            'id' => 'required',
            'name' => 'required',
            'keterangan' => 'required',
            'mulai' => 'required',
            'berahir' => 'required',
        ];

        $validator = Validator::make(Input::all(), $rules);
        // jika tidak valid redirect ke halaman edit
        if ($validator->fails()) {
            return Redirect::to("/kegiatan/edit/" . $id)
                            ->withErrors($validator);
        } else {
            // jika valid disimpan
            $in = Input::all();
            $ket = Kegiatan::find($id);
            $ket->users_id = $in['id'];
            $ket->name = $in['name'];
            $ket->keterangan = $in['keterangan'];
            $ket->waktu_mulai = $in['mulai'];
            $ket->waktu_berakhir = $in['berahir'];
            $ket->save();
            // redirect ke halaman band index
            Session::flash('message', 'Successfully updated Users!');
            return Redirect::to('kegiatan/view');
        }
    }

    public function kegiatanDelete($id) {
        $user = Kegiatan::find($id);
        $user->delete();
        Session::flash('message', 'Successfully deleted the activity!');
        return Redirect::to('kegiatan/view');
    }

}
