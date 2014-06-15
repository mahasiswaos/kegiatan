<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * File ini adalah file class
 * yang digunakan untuk memodelkan / merepresentasikan
 * tabel kegiatan yang ada pada database.
 * 
 * File class ini mewariskan sifat Class Eloquent
 * yang merupakan sebuah ORM (Object Relational Model)
 * untuk keperluan memanipulasi data (CRUD)
 * pada database.
 */
class Kegiatan extends Eloquent {

    /**
     * Atribute ini harus di isi sesuai
     * dengan nama tabel yang ada pada
     * database yang anda gunakan.
     * 
     * Pada variable di bawah ini,
     * $table di isi dengan kegiatan
     * agar sesuai dengan tabel kegiatan
     * yang tersedia pada database.
     * @var string
     */
    protected $table = 'kegiatan';

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
    public $timestamps = false;

    /**
     * Method ini digunakan untuk menyatakan
     * relasi antara tabel kegiatan dengan tabel users.
     * 
     * @return Users
     */
    public function users() {
        /**
         * bagian sintaks dibawah ini untuk menyatakan
         * bahwa tabel kegiatan ada pada sisi "many"
         * dan dimiliki oleh tabel user yang ada pada sisi "one"
         * 
         * many kegiatan belongs to one users
         * banyak kegiatan dimiliki oleh satu user
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
