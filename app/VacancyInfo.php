<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class VacancyInfo extends Model
{
    use Translatable;
    protected $translatable=['obligations', 'requirements'];
}
