<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Progress extends Model
{
    use Translatable;
    protected $translatable=['title', 'description'];
}
