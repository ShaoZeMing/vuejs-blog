<?php

use Illuminate\Database\Seeder;

class UsersProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = factory(App\User::class, 'admin')->create(['email' => 'szm19920426@gmail.com','password'=>bcrypt(123123)]);
        $this->command->info("New Admin created. Username: $admin->email,  Password: 123123");
    }
}
