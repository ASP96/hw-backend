<?php

namespace Database\Seeders;

use App\Models\HardwareGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HardwareGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // HardwareGroup::factory(5)->create()
        //     ->each(function($group) {
        //         $group->children()->saveMany(
        //             HardwareGroup::factory(5)->create()
        //         )
        //     });
        $groups = [
            [
                'name' => 'Сетевое оборудование',
                'children' => [
                    ['name' => 'Маршрутизаторы'],
                    ['name' => 'KVM-переключатель'],
                    ['name' => 'DSL-модемы'],
                    
                    ['name' => 'Шкаф телекоммуникационный',
                        'children' => [
                            ['name'=> 'Шкаф напольный'],
                            ['name'=> 'Шкаф настенный']
                        ]
                ],
                    ['name' => 'Firewall (МСЭ)'],
                    [
                        'name' => 'Коммутаторы сетевые',
                        'children' => [
                            [
                                'name' => 'Коммутаторы управляемые',
                                'children' => [
                                    [
                                        'name' => 'Коммутаторы 10/100 Мбит/с',
                                        'children' => []
                                    ],
                                    [
                                        'name' => 'Коммутаторы 1 Гбит/с',
                                        'children' => []
                                    ],
                                    [
                                        'name' => 'Коммутаторы 10/100 Мбит/с + Uplink 1 Гбит/с',
                                        'children' => []
                                    ],
                                    [
                                        'name' => 'Коммутаторы 10 Гбит/с',
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'name' => 'Коммутаторы НЕуправляемые',
                                'children' => [
                                    [
                                        'name' => 'Коммутаторы 10/100 Мбит/с',
                                        'children' => []
                                    ],
                                    [
                                        'name' => 'Коммутаторы 1 Гбит/с',
                                        'children' => []
                                    ],
                                    [
                                        'name' => 'Коммутаторы 10/100 Мбит/с + Uplink 1 Гбит/с',
                                        'children' => []
                                    ]
                                ]
                            ]
                        ]
                    ],

                    [
                        'name' => 'Оптические медиаконверторы',
                        'children' => [
                            [
                                'name' => 'Одноволоконные медиаконверторы 100 Мбит/с',
                                'children' => []
                            ],
                            [
                                'name' => 'Двухволоконные медиаконверторы 100 Мбит/с',
                                'children' => []
                            ],
                            [
                                'name' => 'Одноволоконные медиаконверторы 1 Гбит/с',
                                'children' => []
                            ],
                            [
                                'name' => 'Двухволоконные медиаконверторы 1 Гбит/с',
                                'children' => []
                            ],
                        ]
                    ],

                    [
                        'name' => 'Серверное оборудование',
                        'children' => [
                            [
                                'name' => 'Сервера 1',
                                'children' => []
                            ],
                            [
                                'name' => 'Сервера 2U',
                                'children' => []
                            ],
                            [
                                'name' => 'Сервера 4U',
                                'children' => []
                            ]
                        ]
                    ],
                    [
                        'name' => 'Беспроводная связь',
                        'children' => [
                            [
                                'name' => 'Точки беспроводного доступа',
                                'children' => [
                                    [
                                        'name' => '2,4 GHz',
                                    ],
                                    [
                                        'name' => '5 GHz'
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Беспроводные маршрутизаторы',
                                'children' => [
                                    [
                                        'name' => '2,4 GHz'
                                    ],
                                    [
                                        'name' => '5 GHz'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'name' => 'СКЗИ',
                'children' => [
                    [
                        'name' => 'ViPNet',
                        'children' => [
                            [
                                'name' => 'ViPNet Coordinator',
                                'children' => [
                                    [
                                        'name' => 'ViPNet Coordinator HW1000',
                                        'children' => [
                                            [
                                                'name' => 'ViPnet Coordinator HW1000 Q3',
                                                'children' => []
                                            ],
                                            [
                                                'name' => 'ViPnet Coordinator HW1000 Q4',
                                                'children' => []
                                            ],
                                            [
                                                'name' => 'ViPnet Coordinator HW1000 Q7',
                                                'children' => []
                                            ],
                                        ]
                                    ],
                                    [
                                        'name' => 'ViPNet Coordinator HW2000',
                                        'children' => [
                                            [
                                                'name' => 'ViPnet Coordinator HW2000 Q3',
                                                'children' => []
                                            ],
                                        ]
                                    ],
                                    [
                                        'name' => 'ViPNet Coordinator HW5000',
                                        'children' => [
                                            [
                                                'name' => 'ViPnet Coordinator HW5000 Qx',
                                                'children' => []
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ],
                    [
                        'name' => 'Rutoken',
                        'children' => []
                    ]
                ]
            ],
            [
                'name' => 'ЭВТ',
                'children' => [
                    [
                        'name' => 'Ноутбуки',
                        'children' => []
                    ],
                    [
                        'name' => 'Компьютеры',
                        'children' => []
                    ],
                    [
                        'name' => 'Моноблоки',
                        'children' => []
                    ],
                    [
                        'name' => 'Принтеры, сканеры, МФУ',
                        'children' => []
                    ],
                ]
                ],
                [
                    'name' => 'Комплектующие',
                    'children' => [
                        ['name' => 'Мышь'],
                        ['name' => 'Клавиатура'],
                        ['name' => 'Монитор'],
                        ['name' => 'Колонки'],
                        ['name' => 'Память'],
                        ['name' => 'Материнская плата'],
                        [
                            'name' => 'Накопителя',
                            'children' => [
                                [
                                    'name' => 'HDD',
                                ],
                                [
                                    'name' => 'SSD',
                                ],
                                [
                                    'name' => 'USB-Flash',
                                ],
                                [
                                    'name' => 'Внешний HDD',
                                ],
                            ]
                        ],
                        ['name' => 'USB-камеры'],
                    ]
                ]
        ];


        // dd($groups);
        self::fillDB($groups);
        /*
                foreach ($groups as $group) {
                    echo "\n" . $group['name'];
                    $new_group = HardwareGroup::factory()->create([
                        'name' => $group['name']
                    ]);
                    // dd($group);

                    if (isset($group['children']) && sizeof($group['children']))
                    {
                        // echo "\n::::: ";
                        // print_r($group['children']);

                        self::createHWGroup($new_group, $group['children']);
                        // ->each(function ($gr) {
                        //     if (isset($group['children']) && sizeof($group['children']))
                        //         self::createHWGroup($gr, $group['children']);
                        // });
                    }
                    else
                    {
                        echo "\n++++++". $group['name'] ." hasn't children";
                    }
                }
                */
    }

    public static function fillDB($groups)
    {
        if (sizeof($groups) == 0)
            return;
        $i = 0;
        foreach ($groups as $group) {
            echo "\n" . ($i++) . ". " . $group['name'] . "\n";
            $new_group = HardwareGroup::create([
                'name' => $group['name']
            ]);
            self::createHWGroup($new_group, $group['children'], 0);
        }

    }

    public static function createHWGroup($group, array $children, $level)
    {
        $level++;

        if (sizeof($children) == 0) {
            echo "\nCildren for group: " . $group->name . ": is empty\n";
            return;
        }
        // print_r($children);

        foreach ($children as $chld) {
            echo "\n ". str_repeat("\t", $level) . $chld['name'];


            $new_group = HardwareGroup::factory()->create([
                'name' => $chld['name'],
                'parent_id' => $group->id
            ]);

            if (isset($chld['children']) && sizeof($chld['children']))
                self::createHWGroup($new_group, $chld['children'], $level);
        }
    }
}
