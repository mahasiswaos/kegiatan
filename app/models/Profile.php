<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * File ini adalah file class
 * yang digunakan untuk memodelkan / merepresentasikan
 * tabel profile yang ada pada database.
 * 
 * File class ini mewariskan sifat Class Eloquent
 * yang merupakan sebuah ORM (Object Relational Model)
 * untuk keperluan memanipulasi data (CRUD)
 * pada database.
 */
class Profile extends Eloquent {

    /**
     * Atribute ini harus di isi sesuai
     * dengan nama tabel yang ada pada
     * database yang anda gunakan.
     * 
     * Pada variable di bawah ini,
     * $table di isi dengan profile
     * agar sesuai dengan tabel profile
     * yang tersedia pada database.
     * @var string
     */
    protected $table = 'profile';

    /**
     * attribute ini digunakan untuk mengatur
     * pengisian nilai pada 
     * field created_at dan updated_at
     * 
     * jika di isi false,
     * maka field created_at dan updated_at 
     * tidak akan di isi pada tabel
     * 
     * jika di isi true,
     * maka field created_at dan updated_at
     * tidak akan di isi pada tabel.
     * 
     * secara default (jika tidak ditulis)
     * $timestamps akan bernilai true.
     * 
     * @var boolean
     */
    public $timestamps = true;

    /**
     * Method ini digunakan untuk menyatakan
     * relasi antara tabel profile dengan tabel users.
     * 
     * @return Users
     */
    public function users() {
        /**
         * bagian sintaks dibawah ini untuk menyatakan
         * bahwa tabel kegiatan ada pada sisi "one"
         * dan dimiliki oleh tabel user yang ada pada sisi "one"
         * 
         * one profile belongs to one users
         * satu profile dimiliki oleh satu user
         * 
         * Sedangkan sintaks "App\\Models\\Users"
         * digunakan untuk mengacu pada models
         * tabel Users yang telah buat pada 
         * folder App\Models dengan nama file
         * Users
         */
        return $this->belongsTo("App\\Models\\Users");
    }

}
