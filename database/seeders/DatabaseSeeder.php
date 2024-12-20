<?php

namespace Database\Seeders;

use App\Models\HardwareModel;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $vendors = [
            [
                'name' => 'Cisco',
                'country' => 'США',
                'models' => ['2811', '3845', '3945', 'WS-C2960G-24TC-L', 'WS-C2960G-48TC-L', 'WS-C3560G-24TS', 'WS-C3560-24TS', 'WS-C2960-24-S']
            ],
            ['name' => 'D-Link', 'country' => 'Тайвань'],
            [
                'name' => 'SNR',
                'country' => 'Россия',
                'models' => ['CVT-100A', 'CVT-100B', 'SNR-SFP-1000']
            ],
            [
                'name' => 'TP-Link',
                'country' => 'Китай',
                'models' => ['TP-SG1016']
            ],
            [
                'name' => 'Aquarius',
                'country' => 'Россия',
                'models' => ['AQS T50 D65', 'AQS T40 S23']
            ],
            ['name' => 'Planet', 'country' => 'Тайвань'],
            ['name' => 'HP', 'country' => 'США'],
            ['name' => 'HPE', 'country' => 'США'],
            ['name' => 'Eltex', 'country' => 'Россия'],
            [
                'name' => 'Xerox',
                'country' => 'США',
                'models' => ['WorkCentre 3210']
            ],
            ['name' => 'Asus', 'country' => 'Тайвань'],
            ['name' => 'IBM', 'country' => 'США'],
            [
                'name' => 'Mikrotik',
                'country' => 'Латвия',
                'models' => ['RB951ui-2hnd']
            ],
            ['name' => 'Lenovo', 'country' => 'Китай'],
            ['name' => 'Dell', 'country' => 'США'],
            ['name' => 'Logitech', 'country' => null],
            ['name' => 'Acer', 'country' => 'Корея'],
            ['name' => 'Genius', 'country' => null],
            ['name' => 'Samsung', 'country' => 'Корея'],
            [
                'name' => 'ViPNet',
                'country' => 'Россия',
                'models' => [
                    'ViPNet Coordinator HW1000 Q3',
                    'ViPNet Coordinator HW2000 Q3',
                    'ViPNet Coordinator HW1000 Q4',
                    'ViPNet Coordinator HW1000 Q7',
                    'ViPNet Coordinator HW5000 Q2'
                ]
            ],
            [
                'name' => 'Watchguard',
                'country' => 'США',
                'models' => ['Watchguard XTM 530']
            ]
        ];
        $i = 0;
        $j = 0;
        foreach ($vendors as $item) {
            echo $i++ . " " . $item['name'] . "\n";

            $vnd = Vendor::factory()->create([
                'name' => $item['name'],
                'country' => $item['country'],
            ]);

            if (!isset($item['models']) || !sizeof($item['models'])) {
                continue;
            }
            foreach ($item['models'] as $model) {
                echo "---" . $model . "\n";
                $vnd->models()->save(
                    HardwareModel::factory()->create([
                        'head' => $model
                    ])
                );
            }
        }



        // $this->call(PhoneSeeder::class);
        // $this->call(VendorSeeder::class);
        // $this->call(PersonSeeder::class);
        // $this->call(OrganizationSeeder::class);
        // $this->call(LocationSeeder::class);

    }
}
