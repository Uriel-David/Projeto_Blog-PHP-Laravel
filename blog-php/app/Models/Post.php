<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /* //table name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'item_id';
    //timestamps
    public $timestamps = false; */

    /* protected $fillable = [
        'id',
        'title',
        'description',
    ]; */

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
