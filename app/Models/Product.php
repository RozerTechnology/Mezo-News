<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'name', 'description', 'image'];

    protected $appends = ['image_path'];


    //attr
    public function getImagePathAttribute()
    {
        if ($this->image) {
            return asset('assets/images/products/' . $this->image);
        }
        return asset('assets/images/products/default.png');
        
    }// end of getImagePathAttribute

    //scope
  
    //rel
   
    //fun

}//end of model
