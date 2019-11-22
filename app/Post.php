<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
	use Sluggable;

	protected $fillable = ['title','content','isi_content','thumbnail','slug','user_id'];
	protected $dates = ['created_at'];

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function user(){
    	return $this->belongsTo(User::class);
    }

     public function thumbnail(){
     return !$this->thumbnail ? asset('thumbnail.jpg') : $this->thumbnail;
    }
  }
