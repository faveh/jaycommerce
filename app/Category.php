<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
	protected $fillable= ['name', 'parent', 'description'];

	public $timestamps = false;

    public function products() {
        return $this->hasMany("Product");
    }
    
    public static $rules = [
	    "name" => "required",
	];
}
