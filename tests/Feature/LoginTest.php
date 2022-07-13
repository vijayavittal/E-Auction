<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    public function login_displays_validation_errors()
    {
        $response = $this->post('/login', []);
     
        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    } 

    public function login_authenticates_and_redirects_user()
{
    $user = factory(User::class)->create();
 
    $response = $this->post(route('login'), [
        'email' => $user->email,
        'password' => 'password'
    ]);
 
    $response->assertRedirect(route('dashboard'));
    $this->assertAuthenticatedAs($user);

}


}
