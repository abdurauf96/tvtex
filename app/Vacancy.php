<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Vacancy extends Model
{
   	use Translatable;
    protected $translatable=['title', 'salary'];
    public function vacancyinfos()
    {
    	return $this->hasMany('App\VacancyInfo');
    }
}
