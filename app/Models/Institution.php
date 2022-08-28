<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'region', 'country'];
    public function students() {
        return $this->hasMany(Student::class); // This is an example of a relationship - an institution can have many students
    }
}
