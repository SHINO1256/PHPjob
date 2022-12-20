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
            'name' => 'かぐや',
            'email' => 'kaguya@test',
            'password' => bcrypt('kaguya'),
        ]);
        
        DB::table('users')->insert([
          'name' => 'おとひめ',
          'email' => 'otohime@test',
          'password' => bcrypt('otohime'),
      ]);

      DB::table('users')->insert([
        'name' => 'きたろう',
        'email' => 'kitarou@test',
        'password' => bcrypt('kitarou'),
    ]);

    }
}
