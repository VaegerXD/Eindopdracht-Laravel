<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $products = [
            [
                'name' => 'Camera',
                'description' => 'type 1',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Camera1',
                'serienummer' => '001',
                'aantal' => 1
            ],
            [
                'name' => 'Camera',
                'description' => 'type 1',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Camera1',
                'serienummer' => '002',
                'aantal' => 1
            ],
            [
                'name' => 'Camera',
                'description' => 'type 1',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Camera1',
                'serienummer' => '003',
                'aantal' => 1
            ],
            [
                'name' => 'Camera',
                'description' => 'type 1',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Camera1',
                'serienummer' => '004',
                'aantal' => 1
            ],
            [
                'name' => 'Camera',
                'description' => 'type 1',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Camera1',
                'serienummer' => '005',
                'aantal' => 1
            ],         
            [
                'name' => 'Camera',
                'description' => 'type 1',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Camera1',
                'serienummer' => '006',
                'aantal' => 1
            ],           
            [
                'name' => 'Camera',
                'description' => 'type 1',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Camera1',
                'serienummer' => '007',
                'aantal' => 1
            ],            
            [
                'name' => 'Camera',
                'description' => 'type 1',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Camera1',
                'serienummer' => '008',
                'aantal' => 1
            ],
            [
                'name' => 'Camera',
                'description' => 'type 1',
                'image' => 'https://dummyimage.com/200x200/000/fff&text=Camera1',
                'serienummer' => '009',
                'aantal' => 1
            ]


        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }

    
}
