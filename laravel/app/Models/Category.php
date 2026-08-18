<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    //Para decir que una categoria puede tener varias tareas.       
    public function task(){
        return $this->hasMany(Task::class, 'category_id');
    }
    
}
