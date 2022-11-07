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
        'description'
    ];

}
