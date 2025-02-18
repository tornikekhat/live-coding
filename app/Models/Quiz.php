<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    public function quiz_results(): HasMany
    {
        return $this->hasMany(QuizResult::class);
    }
}
