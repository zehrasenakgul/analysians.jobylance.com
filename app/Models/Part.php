<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
    protected $fillable =  ["name", "upload", "section_id"];
    public function section()
    {
        return $this->hasOne(Section::class, 'id', 'section_id');
    }
}
