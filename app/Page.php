<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [''];

    public function page_tags()
    {
    	return $this->hasMany(PageTag::class);
    }
}
