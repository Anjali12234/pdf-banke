<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('office_settings')->insert([

            'office_name' => "office name",
            'office_english_name' => "adsfasfsasd",
            'office_address' => "zxcvsdfd",
            'office_english_address' => "asdfasf",
            'office_phone' => "asdfasfas",
            'office_email' => "asdfasasfs",
            'office_cover_photo' => "",
            'office_logo' => "",
            'flag' => "",
            'office_ad_photo' => "",
            'office_chief_id' => null,
            'information_officer_id' => null,
            'map_url' => "",
            'facebook_url' => "",
            'twiter_url' => "",
        ]);
    }
}
