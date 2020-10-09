<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Info extends Model
{
    use Translatable;
    protected $translatable=['title', 'description', 'body'];
}
