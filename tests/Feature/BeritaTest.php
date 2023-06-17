<?php

namespace Tests\Feature;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class BeritaTest extends TestCase
{
    use RefreshDatabase;

    private User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = $this->getAdmin();
    }

    /**
     * A basic feature test example.
     */
    public function test_admin_can_view_berita_index()
    {
        $berita = $this->getBerita();

        $response = $this->actingAs($this->user)->get(route('berita.index'));

        $response->assertStatus(200);
        $response->assertSee('BERITA');
        $response->assertViewHas('berita', function ($collection) use ($berita) {
            return $collection->contains($berita);
        });
    }

    public function test_admin_can_view_berita_create()
    {
        $response = $this->actingAs($this->user)->get(route('berita.create'));

        $response->assertSeeText('Tambah Berita Baru');
        $response->assertStatus(200);
    }

    public function test_admin_can_store_berita()
    {
        $this->withoutMiddleware();
        $response = $this->actingAs($this->user)->post(route('berita.store'), $this->beritaData());

        $response->assertStatus(302);
        $response->assertRedirectToRoute('berita.index');
        $this->assertDatabaseHas('beritas', $this->beritaData());
        Storage::disk('news')->assertExists('Screenshot (44).png');
    }

    protected function beritaData(): array
    {
        return [
            'title' => 'Berita 1',
            'content' => fake()->paragraph(),
            'image' => UploadedFile::fake()->image('Screenshot (44).png')
        ];
    }


    protected function getBerita(): Berita
    {
        return Berita::factory()->create();
    }

    protected function getAdmin(): User
    {
        Role::create([
            'guard_name' => 'web',
            'name' => 'Administrator'
        ]);

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin Dit Tahti',
            'email' => 'admin@email.test',
            'password' => bcrypt('admin1234')
        ]);

        $user->assignRole('Administrator');

        return $user;
    }
}
