<?php

namespace Database\Seeders;

use App\Models\TalkList;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DateTime;

class TalkListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 1; $i <= 10; $i++) {
        //   TalkList::create([
        //         'content' => 'content' . $i,
        //     ]);
        // }
      if (($handle = fopen(__DIR__  . '/talk-list.csv', 'r')) !== false) {
        while (($data = fgetcsv($handle))) {
          TalkList::insert([
            'content' => $data[1],
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
          ]);
        }
        fclose($handle);
      }
    }
}
