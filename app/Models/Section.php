<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ["course_id", "name"];
    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }
    public function parts()
    {
        return $this->hasMany(Part::class, 'section_id', 'id');
    }
}
