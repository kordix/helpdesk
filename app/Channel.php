<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Channel extends Model
{
    protected $fillable=['title'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
