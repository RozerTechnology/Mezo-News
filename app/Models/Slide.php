<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
 
    protected $fillable = [ 'title', 'subtite', 'description', 'image'];

    protected $appends = ['image_path'];


    //attr
    public function getImagePathAttribute()
    {
        if ($this->image) {
            return asset('assets/img/slides/' . $this->image);
        }
        return asset('assets/img/slides/default.png');
        
    }// end of getImagePathAttribute

    //scope
  
    //rel
   
    //fun

}//end of model
