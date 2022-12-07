<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Routing\Controllers\HasMiddleware;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[];
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
