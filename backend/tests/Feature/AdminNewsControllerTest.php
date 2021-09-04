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
        $this->another_user = factory(User::class)->create();
        $notice = factory(News::class)->create();
        // logger($notice);
        logger('test');
    }


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);
    }
}
