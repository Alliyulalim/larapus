<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample penulis 
        $author1 = Author::create(['name'=>'Alliyul alim']);
        $author2 = Author::create(['name'=>'Daka rimba']);
        $author3 = Author::create(['name'=>'Trian darderdor']);
        $author4 = Author::create(['name'=>'Ucup sihombing']);

        // membuat sample Book
        $book1 = Book::create(['title'=>'seminggu belajar laravel',
        'amount'=>353, 'author_id'=> $author1->id,
        ]);
        $book2 = Book::create(['title'=>'Rintik hujan',
        'amount'=>157, 'author_id'=> $author2->id,
        ]);
        $book3 = Book::create(['title'=>'Sobat Tobat',
        'amount'=>251, 'author_id'=> $author3->id,
        ]);
        $book4 = Book::create(['title'=>'Jalaludin rumi',
        'amount'=>178, 'author_id'=> $author4->id,
        ]);
    }
}
