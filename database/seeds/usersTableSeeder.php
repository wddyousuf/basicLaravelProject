<?php
use App\User;
use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertData();
        $faker= Faker\Factory::create();
        foreach(range(1,10) as $row){
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->unique()->email,
                'password'=>bcrypt($faker->password),
            ]);
        }
    }
    public function insertData(){
        User::create([
            'name'=>'Md. Yousuf Hossain',
            'email'=>'yousufice@gmail.com',
            'password'=>bcrypt('You309208'),
        ]);
    }
}
