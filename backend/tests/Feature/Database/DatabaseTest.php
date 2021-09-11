<?php

namespace Tests\Feature\Database;

use App\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function テーブルにあるカラムが正しいか()
    {
        $this->assertTrue(
            Schema::hasColumns('books', [
                'title', 'body'
            ]),
            1
        );
    }

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function データを保存できる()
    {
        $book = new Book();
        $book->title = 'title_hoge';
        $book->body = 'body_hoge';
        $savebook = $book->save();

        $this->assertTrue($savebook);

        $book = [
            'title' => 'title_hoge',
        ];

        $this->assertDatabaseHas('books', $book);
    }

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function dbに件数が正しく格納されているか()
    {
        $books = factory(Book::class, 3)->create();
        $bookCount = count($books) == 3;
        $this->assertTrue($bookCount);
    }
}
