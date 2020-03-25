<?php

namespace mywishlist\modele;

class Liste extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'liste';
    protected $primaryKey = 'no';
    public $timestamps = false;

    public function item() {
        return $this->belongsTo('\mywishlist\modele\Item','id');
    }
}

?>
