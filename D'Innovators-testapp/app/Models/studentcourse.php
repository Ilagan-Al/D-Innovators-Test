<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentcourse extends Model
{
    public function students(){
        return $this->hasMany(Student::class);
    }

    public function courses(){
        return $this->belongsTo(Course::class);
    }
}
