<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absence extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "student_id",
        "absent_retard",
        "filiere",
        "groupe",
        "select_date",
        "from_hour",
        "to_hour",
        "justifier"
    ];
    public function student()
{
    return $this->belongsTo(student::class, 'student_id');
}
}
