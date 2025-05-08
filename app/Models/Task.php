<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    //
    use SoftDeletes;
//    protected $fillable = ['title', 'content', 'image','category_id'];
    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
