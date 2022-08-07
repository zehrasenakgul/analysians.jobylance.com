<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ["name", "desc", "category_id", "price", "url", "upload"];
    public function courseCategory()
    {
        return $this->hasOne(CourseCategory::class, 'id', 'category_id');
    }
    public function sections()
    {
        return $this->hasMany(Section::class, 'course_id', 'id');
    }
}
