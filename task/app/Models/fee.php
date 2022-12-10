<?php

namespace App\Models;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fee extends Model
{
    use HasFactory;
    protected $fillable=['fee','fee_date','student_id'];

    public function students() {
        return $this->belongsTo(Student::class);
    }
}
