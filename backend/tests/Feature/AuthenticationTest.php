<?php

   namespace Tests\Feature;

   use App\User;

   use Tests\TestCase;
   use Illuminate\Foundation\Testing\WithFaker;
   use Illuminate\Foundation\Testing\RefreshDatabase;

   class AuthenticationTest extends TestCase
   {
    //    use RefreshDatabase;

       protected $user;
       protected $password = 'i-love-laravel';

       public function setUp(): void
       {
           parent::setUp();

           $this->user = factory(User::class)->create([
               'password' => bcrypt($this->password)
           ]);
       }

       public function testLogin(): void
       {
           $response = $this->post(route('login'),[
               'email' => $this->user->email,
               'password' => $this->password,
           ]);

           $response->assertRedirect('/home');

           $this->assertAuthenticatedAs($this->user);
       }

       public function testLogout(): void
       {
           $response = $this->actingAs($this->user);

           $response->post(route('logout'));

           $this->assertGuest();
       }
   }