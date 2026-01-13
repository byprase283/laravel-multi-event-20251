<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'nama' => 'Lomba Lari 5K',
            'deskripsi' => 'Lomba lari seru keliling sekolah.',
            'tanggal_event' => now()->addDays(7),
            'lokasi' => 'Lapangan Utama',
            'harga' => 50000,
            'kuota' => 100,
            'bank_name' => 'BCA',
            'bank_account' => '1234567890',
            'bank_holder' => 'Panitia OSIS'
        ]);
    }
}
