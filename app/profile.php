<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsto('App\User');
    }
    public function getImage()
    {
        $imagePath = $this->image ;
       //?? 'avatars/default.png'

        return "/storage/" . $imagePath;
    } 
    
}
