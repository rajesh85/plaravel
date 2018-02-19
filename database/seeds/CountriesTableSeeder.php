<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->truncate();
        $now = Carbon::now(new DateTimeZone('Europe/London'));

        DB::table('countries')->insert([
            [
                'country_name' => 'United Kingdom',
                'country_code' => 'GB',
                'dialing_code' => '0044',
                'created_at'   => $now,
                'updated_at'   => $now,
                'status'       => 1,
            ],
            [
                'country_name' => 'United States Of America',
                'country_code' => 'US',
                'dialing_code' => '001',
                'created_at'   => $now,
                'updated_at'   => $now,
                'status'       => 1,
            ],
        ]);


    }
}
