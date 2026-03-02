<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTracking extends Model
{
    use HasFactory;
    protected $table= 'article_tracking';
    protected $guarded = ['id'];
    // public $timestamps = false;
}
