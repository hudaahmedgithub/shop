<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Category extends Model implements TranslatableContract
{
    use Translatable;

    
    public $translatedAttributes = ['name'];

   
    public $translationModel = 'App\Translations\CategoryTranslation';

    public function products()
	{
		return $this->hasMany('App\Models\Product');
	}
}
