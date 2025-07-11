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

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
    
}
