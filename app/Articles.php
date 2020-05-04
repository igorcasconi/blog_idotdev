<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'article_id';
    protected $fillable = [
        'article_title',
        'article_subtitle',
        'article_date',
        'article_hour',
        'article_menu_id',
        'article_url',
        'article_owner',
        'article_active',
        'article_body',
        'article_read'
    ];
}
