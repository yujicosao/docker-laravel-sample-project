<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class AdminBookControllerTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function ログインしていれば投稿できる()
    {
        $response = $this->actingAs($this->user)->get(route('admin-book.create'));
        // 正常を示すhttpステータス200が返ってくる
        $response->assertStatus(200);
        // 使われているviewファイルの一致をもって遷移の正しさを担保
        $response->assertViewIs('admin.book-create');

        // テスト用データ作成
        $book_data = [
            'title' => 'hoge',
            'body' => 'hogehoge',
        ];
        $url = route('admin-book.store');
        $response = $this->post($url, $book_data);
        // エラーが発生していないことを確認
        $response->assertSessionHasNoErrors();
        // リダイレクトが行われていることを確認
        $response->assertStatus(302);
        // 意図したurlにリダイレクトが行われていることを確認
        $response->assertRedirect('admin-book');
        // 保存したデータがdbに保存されているか確認
        $this->assertDatabaseHas('books', ['title' => 'hoge']);

        // 一覧ページへ移動
        $response = $this->actingAs($this->user)->get(route('admin-book.index'));
        $response->assertStatus(200);
        $response->assertSee('<h4>ユニットテスト用一覧</h4>');
        // 作成したデータが表示されていることを確認
        $response->assertSeeText($book_data['title']);
        
    }
}
