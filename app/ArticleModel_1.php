<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleModel1 extends Model
{
    protected $fillable = ['articles_title','articles_subtitle','articles_date_time', 'articles_body'];
    protected $guarded = ['article_id'];
    protected $table = ['articles'];

}
