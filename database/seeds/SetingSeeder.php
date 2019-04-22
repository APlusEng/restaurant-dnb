<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'org_name' => 'स्पाइनल टेक',
            'address' => 'सुदूरपश्चिम प्रदेश, धनगढी',
            'latest_news' => 'डिजिटल सूचना पातीको नयाँ संस्करण'
        ]);
    }
}
