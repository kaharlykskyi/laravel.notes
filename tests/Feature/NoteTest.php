<?php

namespace Tests\Feature;

use App\Models\Note;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NoteTest extends TestCase
{
    use RefreshDatabase;

    public function test_notes_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/note');

        $response->assertOk();
    }

    public function test_notes_create_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/note/create');

        $response->assertOk();
    }

    public function test_note_is_created(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post('/note', [
                'title' => 'Title',
                'note' => 'My note',
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/note');

        $this->assertDatabaseHas(Note::class, [
            'title' => 'Title',
            'note' => 'My note',
            'user_id' => $user->id
        ]);
    }

    public function test_notes_edit_page_is_displayed(): void
    {
        $user = User::factory()->create();
        $note = Note::factory()->create([
            'user_id' => $user->id
        ]);

        $response = $this
            ->actingAs($user)
            ->get("/note/{$note->id}/edit");

        $response->assertOk();
    }

    public function test_note_updated(): void
    {
        $user = User::factory()->create();
        $note = Note::factory()->create([
            'user_id' => $user->id
        ]);

        $response = $this
            ->actingAs($user)
            ->put("/note/{$note->id}", [
                'title' => 'Title updated',
                'note' => 'My note updated',
            ]);

        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas(Note::class, [
            'id' => $note->id,
            'title' => 'Title updated',
            'note' => 'My note updated',
            'user_id' => $user->id
        ]);
    }

    public function test_note_deleted(): void
    {
        $user = User::factory()->create();
        $note = Note::factory()->create([
            'user_id' => $user->id
        ]);

        $response = $this
            ->actingAs($user)
            ->delete("/note/{$note->id}");

        $response->assertSessionHasNoErrors();

        $this->assertDatabaseMissing(Note::class, [
            'id' => $note->id
        ]);
    }
}
