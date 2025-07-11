<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use Notifiable;
    use HasRoles;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'type', // 'teacher' or 'student'
    ];
    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'teacher_id');
    }
    public function students()
    {
        return $this->belongsToMany(Lesson::class, 'lesson_student', 'student_id', 'lesson_id');
    }
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'student_id');
    }
    public function isTeacher()
    {
        return $this->type === 'teacher';
    }
    public function isStudent()
    {
        return $this->type === 'student';   
    }

    
}
