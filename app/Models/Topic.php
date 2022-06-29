<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    public function questions(){
    	return $this->hasMany(Question::class, 'topic_id', 'id')->where('is_active', 1);
    }
}
