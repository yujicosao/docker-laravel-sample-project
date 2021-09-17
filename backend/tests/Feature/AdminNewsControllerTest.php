<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\News;
use Faker\Generator as Faker;


class AdminNewsControllerTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // テストユーザ作成
        $this->user = factory(User::class)->create();

        $notice = factory(News::class)->create();
        // logger($notice);
        logger('test');
    }


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ログイン済みユーザーが管理画面「お知らせ一覧」に入れる()
    {
        // ログインしていないので302が返される
        $response = $this->get(route('admin-news.index'));
        $response->assertStatus(302);

        // ログインユーザー　通常動作
        $response = $this->actingAs($this->user)->get(route('admin-news.index'));
        $response->assertStatus(200);
        $response->assertSee('<h4>お知らせ</h4>');
    }
}
