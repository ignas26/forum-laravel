<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
          'name' => 'admin',
          'password' => bcrypt('admin'),
          'email' => 'admin@admin.lt',
          'avatar' => asset('avatars/avatar.jpg')
      ]);
             
        
        DB::table('users')->insert([
          'name' => 'Vardenis',
          'password' => bcrypt('pavardenis'),
          'email' => 'vardenis@pavardenis.lt',
          'avatar' => asset('storage/avatar.jpg')
      ]);
    
                DB::table('users')->insert([
          'name' => 'Antanas',
          'password' => bcrypt('pavardeniss'),
          'email' => 'vardenis@pavardeniss.lt',
          'avatar' => asset('storage/avatar2.jpg')
      ]);
    
                DB::table('users')->insert([
          'name' => 'Alvydas',
          'password' => bcrypt('pavardenisss'),
          'email' => 'vardeniss@pavardenis.lt',
          'avatar' => asset('avatars/avatar.jpg')
      ]);
        
    }
}
