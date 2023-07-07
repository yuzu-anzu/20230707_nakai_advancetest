<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class FakerMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::factory()->count(35)->create();
    }
}
