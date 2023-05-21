<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'post';
    // protected $fillable = ['title', 'content', 'posts_id', 'user_id'];
    protected $fillable = ['title', 'content', 'user_id', 'id','thumbnail'];

}

function FeaturedImages(){
    return $this->hasOne('App\Models\FeaturedImages');
}

//ONE TO MANY
function user(){
    return $this->belongsTo('App\Models\User');
}
