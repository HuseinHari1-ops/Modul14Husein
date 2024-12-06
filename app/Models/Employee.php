<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Mockery\Matcher\HasKey;

class Employee extends Model
{
    use HasFactory;
    public function employees () : HasMany
    {
        return $this->hasMany(related:Employee::class);
    }
}
