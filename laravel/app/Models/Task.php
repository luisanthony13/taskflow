<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    protected $table = 'task';
    protected $primaryKey = 'id';
    protected $fillable = ['category_id', 'user_id', 'title', 'description', 'status'];

    public function category()
    {
        //LA TABLA TASK depende de categoria. POR ESO SE USA BELONGS TO
        return $this->belongsTo(Category::class, 'category_id');

    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); 

    }
}
