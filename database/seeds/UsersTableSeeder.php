<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Category;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categories = Category::pluck('id')->all();
        $roles = Role::pluck('id')->all();
        foreach (range(1,20) as $index) {
          DB::table('users')->insert([
              'name' => $faker->name,
              'email' => $faker->safeEmail,
              'image' => $faker->imageUrl($width = 640, $height = 480),
              'biography' => $faker->paragraph,
              'password' => $faker->password,
              'category_id' => $faker->randomElement($categories),
              'role_id' => $faker->randomElement($roles),
              'birth' => $faker->date,
              'created_at' => $faker->dateTime($max = 'now'),
              'updated_at' => $faker->dateTime($max = 'now'),
          ]);
        }
    }
}
