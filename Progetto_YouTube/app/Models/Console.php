<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $table = 'consoles';

    protected $fillable = ['name','producer','generation'];

    public function videos()
{
        return $this->belongsToMany(Video::class);
}


 



}
