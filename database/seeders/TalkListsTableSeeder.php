<?php

namespace Database\Seeders;

use App\Models\TalkList;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TalkListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
          TalkList::create([
                'content' => 'content' . $i,
            ]);
        }
    }
}
