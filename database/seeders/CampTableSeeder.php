<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $camps = [
           [
               'title' => 'VIP ROOM',
               'slug' => 'vip-room',
               'price' => 1000,
               'created_at' => date('Y-m-d H:i:s', time()),
               'updated_at' => date('Y-m-d H:i:s', time()),
           ],
            [
                'title' => 'Regular Room',
                'slug' => 'regular-room',
                'price' => 750,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            ];

            // 1st method
           // foreach ($camps as $key => $camps) {
           //    Camps::create($camps);
           //}

           // 2nd method
           Camp::insert($camps);

    }
}
