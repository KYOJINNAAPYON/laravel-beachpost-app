<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
            'Beach', 'Cafe', 'Restaurant'
        ];

        $beach_categories = [
            '百道浜海浜公園', '糸島'
        ];

        $cafe_categories = [
            'Bistro&Cafe TIME', 'Beach Cafe SUNSET'
        ];

        $restaurant_categories = [
            'Mamma-mia', 'NATTY DREAD'
        ];

        foreach ($major_category_names as $major_category_name) {
            if ($major_category_name == 'Beach') {
                foreach ($beach_categories as $beach_category) {
                    Category::create([
                        'name' => $beach_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'Cafe') {
                foreach ($cafe_categories as $cafe_category) {
                    Category::create([
                        'name' => $cafe_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'Restaurant') {
                foreach ($restaurant_categories as $restaurant_category) {
                    Category::create([
                        'name' => $restaurant_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
        }
    }
}
