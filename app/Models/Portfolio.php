<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id', 'job_id'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
