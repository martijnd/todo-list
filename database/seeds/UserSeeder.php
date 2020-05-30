<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Todo;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Martijn Dorsman',
            'email' => 'martijn.dorsman@gmail.com'
        ])->todos()->createMany(factory(Todo::class, 10)->make()->toArray());

        factory(User::class, 10)->create()->each(function ($user) {
            $user->todos()->createMany(factory(Todo::class, 10)->make()->toArray());
        });
    }
}
