<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function topic(){
    	return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }
}
