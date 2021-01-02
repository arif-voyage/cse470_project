<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class LoginControllerTest extends TestCase
{
    /** @test */

    public function test_login_displays_the_login_form()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);

        $response->assertViewIs('auth.login');
    }
    
    /** @test */
    
    public function test_login_displays_validation_errors() 
    {
    $response = $this->post('login', []);

    $response->assertStatus(302);
    $response->assertSessionHasErrors('email');
    }
    
    /** @test */
    public function test_login_authenticates_and_redirects_user()
    {
    $user = factory(User::class)->create();

    $response = $this->post(route('login'), [
        'email' => $user->email,
        'password' => 'password'
    ]);

    $response->assertRedirect(route('home'));
    $this->assertAuthenticatedAs($user);
}

}
