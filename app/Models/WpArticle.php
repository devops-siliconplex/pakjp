<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WpArticle extends Model
{
    const CURRENT = 'current';
    const PREVIOUS = 'previous';
    const FUTURE = 'future';
    const SPECIAL = 'special';
    const SUPPLEMENTARY = 'supplementary';

    use HasFactory;
    protected $table= 'wp_article';
    public $timestamps = false;

    protected $guarded = ['id'];

    public function getIssueDateAttribute($value)
    {
        return date('Y-m-d',strtotime($value));   
    }
}
