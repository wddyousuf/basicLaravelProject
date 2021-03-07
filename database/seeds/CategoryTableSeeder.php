<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();
        foreach (range(1, 20) as $row) {
            Category::create([
            'categoryname'=>$faker->name,
            'category_slug'=>$faker->name,
            'status'=>'1',
            ]);
        }
    }
}
