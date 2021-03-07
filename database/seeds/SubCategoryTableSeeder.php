<?php

use App\SubCategory;
use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();
        foreach (range(1, 40) as $row) {
            SubCategory::create([
            'cat_id'=>rand(1,9),
            'subcat'=>$faker->name,
            'status'=>'1',
            ]);
        }
    }
}
