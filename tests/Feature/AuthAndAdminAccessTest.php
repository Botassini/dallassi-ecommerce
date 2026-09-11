<?php

namespace Tests\Feature;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthAndAdminAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_always_creates_a_client_user(): void
    {
        $response = $this->post('/register', [
            'first_name' => 'Maria',
            'last_name' => 'Silva',
            'email' => 'maria@example.com',
            'phone' => '11999999999',
            'password' => 'SenhaForte123!',
            'password_confirmation' => 'SenhaForte123!',
            'role' => UserRole::ADMIN->value,
        ]);

        $response->assertRedirect(route('account.dashboard'));

        $this->assertDatabaseHas('users', [
            'email' => 'maria@example.com',
            'role' => UserRole::CLIENT->value,
        ]);
    }

    public function test_admin_route_is_forbidden_for_client_users(): void
    {
        $user = User::factory()->create([
            'role' => UserRole::CLIENT,
        ]);

        $response = $this->actingAs($user)->get('/admin');

        $response->assertForbidden();
    }

    public function test_admin_route_is_accessible_for_admin_users(): void
    {
        $user = User::factory()->create([
            'role' => UserRole::ADMIN,
        ]);

        $response = $this->actingAs($user)->get('/admin');

        $response->assertOk();
    }
}
