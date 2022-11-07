<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'description'
    ];
    
    protected static function booted()
    {
        static::creating(function ($task) {
            $task->user_id = Auth::id();
        });
    }
}


