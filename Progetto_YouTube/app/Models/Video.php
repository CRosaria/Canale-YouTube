<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';

    protected $fillable = [
         'title', 
         'poster', 
         'link', 
         'description',
         'app_id',
         'category_id',
         'playlist_id',
         'language',
         'year'
        ];

                      


    public function app()
    
    {
    return $this->belongsTo(App::class);
    }


    public function category()
    {
    return $this->belongsTo(Category::class);
    }

    public function playlist()
    {
    return $this->belongsTo(Playlist::class);
    }


    public function systems()
    {
        return $this->belongsToMany(System::class,'video_system');
    }

    public function consoles()
    {
        return $this->belongsToMany(Console::class,'console_video');
    }









}
