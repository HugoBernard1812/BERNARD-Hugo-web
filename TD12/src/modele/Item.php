<?php

namespace mywishlist\modele;

class Item extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'item';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function liste() {
        return $this->belongsTo('\mywishlist\modele\Liste','no');
    }

}

?>
