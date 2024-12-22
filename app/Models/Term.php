<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Term extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'class_id',
    ];
    public function class()
    {
        return $this->belongsTo(StudentClass::class);
    }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }
}