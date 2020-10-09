<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Product extends Model
{
    use Translatable;
    protected $translatable=['title', 'body', 'color', 'region', 'pay'];
}
