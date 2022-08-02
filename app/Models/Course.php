<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function courseCategory()
    {
        return $this->hasOne(CourseCategory::class, 'id', 'category_id');
    }
}
