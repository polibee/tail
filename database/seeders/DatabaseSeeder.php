<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //Model::unguard();
        //$this->call(UsersTableSeeder::class);
        //Model::reguard();
        //User::factory()->count(50)->create();
        //$user=User::find(1);
       // $user->name='coinowo';
       // $user->email='coinowo@outlook.com';
       // $user->is_admin=true;
       // $user->password = Hash::make('qwert123');
        //$user->save();
        Model::unguard();
        $this->call(UsersTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        Model::reguard();
    }
}
