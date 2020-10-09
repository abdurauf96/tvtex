<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Towel extends Model
{
    use Translatable;
    protected $translatable=['title', 'tarkibi', 'description'];

    public function size()
    {
    	return $this->belongsTo('App\Size');
    }

    public function type()
    {
    	return $this->belongsTo('App\Type');
    }

    public function tkan()
    {
    	return $this->belongsTo('App\Tkan');
    }

    public function plotnost()
    {
    	return $this->belongsTo('App\Plotnost');
    }
}
