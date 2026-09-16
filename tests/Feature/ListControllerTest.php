<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_create_a_list_with_their_user_id_as_owner(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('lists.store'), [
            'name' => 'Sprint minggu ini',
        ]);

        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('lists', [
            'nama_list' => 'Sprint minggu ini',
            'owner_id' => $user->id,
        ]);
    }

    public function test_list_name_cannot_contain_only_whitespace(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('lists.store'), [
            'name' => '   ',
        ]);

        $response->assertSessionHasErrors('name');
        $this->assertDatabaseCount('lists', 0);
    }

    public function test_guest_cannot_create_a_list(): void
    {
        $response = $this->post(route('lists.store'), [
            'name' => 'Daftar tamu',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseCount('lists', 0);
    }
}
