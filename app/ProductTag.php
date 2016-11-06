<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTag extends Model
{
    public $fillable = [
            "Name",
	];    

    public function products() {
        return $this->hasMany("App\Product");
    }

}
