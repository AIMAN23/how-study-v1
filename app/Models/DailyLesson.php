<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyLesson extends Model
{
    protected $table = "daily_lessons";
    protected $fillable =[
            'title',
            'homework',
            'lesson_id',
            'subjcte_id',
            'classroom_id',
        ];
    protected $hidden =[
            'created_at',
            'updated_at'
        ];
    public $timestamps = true;
    ###################################
    
}
