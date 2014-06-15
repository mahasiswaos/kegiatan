<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Kegiatan extends Eloquent {

    protected $table = 'kegiatan';
    
    public $timestamps = false;

    /**
     * 
     * @return $this->belongTo
     */
    public function users() {
        return $this->belongsTo("App\\Models\\Users");
    }

}
