<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Fee extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'amount',
        'class_id',
        'term_id',
    ];

    public function term()
    {
        return $this->belongsTo(Term::class);
    }
    public function class()
    {
        return $this->belongsTo(StudentClass::class);
    }
}