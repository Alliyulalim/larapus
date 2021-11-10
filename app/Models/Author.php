<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // memberikan akses field apasaja yang boleh di isi
    protected $fillable =['name'];

    // memberikan akses field apa saja yang boleh dilihat
    protected $visible =['name'];

    // mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    // membuata relasi one to many dengan model "Book"
    public function books()
    {
        // model 'Author' bisa memiliki banyak data dari
        // model 'book' melalui fk 'author_id'
        return $this->hasMany('App\Models\Book','author_id');
    }
}
