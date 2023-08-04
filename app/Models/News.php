<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'create_by',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'catogry_id',
    ];

    public function catogry()
    {
        return $this->belongsTo(Catogry::class,'catogry_id');
    }
    public function saveImage($image)
    {
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);

        return $filename;
    }
}
