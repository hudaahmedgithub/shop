<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Product extends Model implements TranslatableContract
{
    use Translatable;

    
    public $translatedAttributes = ['name','description'];

   
    public $translationModel = 'App\Translations\ProductTranslation';
    public function category()
	{
		return $this->belongsTo('App\Models\Category');
	}
}
