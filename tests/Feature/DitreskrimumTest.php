<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class DitreskrimumTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_admin_can_create_ditreskrimum()
    {
//        $this->actingAs($this->getAdmin());

        $response = $this->actingAs($this->getAdmin())->post(route('ditreskrimum.store'), $this->getDitreskrimumData());

        $response->assertStatus(302);
        $this->assertDatabaseHas('ditreskrimums', $this->getDitreskrimumData());
        $response->assertRedirectToRoute('ditreskrimum.index');
    }

    /**
     * @return void
     */
    public function getAdmin(): User
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

    /**
     * @return string[]
     */
    public function getDitreskrimumData(): array
    {
        return [
            '_token' => csrf_token(),
            'unit' => 'DITRESKRIMUM',
            'daftar_barang_bukti' => 'Vario 150',
            'jumlah' => '100',
            'no_laporan_polisi' => '1234/Polisi/2023',
            'penetapan_pengadilan' => 'IYA',
            'tempat_penyimpanan' => 'POLDA NTB',
            'penyidik' => 'Penyidik 1',
            'kondisi' => 'Baik',
            'nama_pemilik' => 'Pemilik 1',
            'keterangan' => 'Keterangan 1',
            'gambar1' => 'ditreskrimum/contoh-gambar1.jpg',
            'gambar2' => 'ditreskrimum/contoh-gambar1.jpg',
            'gambar3' => 'ditreskrimum/contoh-gambar1.jpg',
            'no_sp_sita' => '1234/SITA/2023'
        ];
    }
}
