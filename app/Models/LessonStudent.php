<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LessonStudent extends Model
{
    use HasFactory;
    protected $table = 'lesson_student';
    protected $fillable = [
        'lesson_id',
        'student_id',
    ];
}
