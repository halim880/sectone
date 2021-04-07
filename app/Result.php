<?php

namespace App;

use App\Models\Academic\Course;
use App\Models\Academic\Department;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'results';
    protected $guarded = [];

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
