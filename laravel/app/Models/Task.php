<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'task';
    protected $primaryKey = 'id';
    protected $fillable = ['category_id', 'user_id', 'title', 'description', 'status'];

    //Se debe mencionar que tanto category_id y user_id son de tipo numéricos.
    protected $casts = [
        'category_id' =>'integer',
        'user_id' =>'integer',
    ];

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
