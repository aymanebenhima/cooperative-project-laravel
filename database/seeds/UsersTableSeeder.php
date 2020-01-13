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
        $user = App\User::create([
                'name'      => 'AYMANE BENHIMA',
                'email'     => 'aymanebenhima@gmail.com',
                'password'  => bcrypt('password'),
                'admin'     => 1
        ]);

        App\Profile::create([
            'user_id'   => $user->id,
            'avatar'    => 'uploads/avatars/default.jpg',
            'about'     => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. A beatae est inventore repudiandae, laboriosam modi minima cum exercitationem ea dolore minus, esse sapiente, sint accusamus sunt iste at ut temporibus.',
            'facebook'  => 'facebook.com/aymanebenhima1',
            'whatsapp'  => '0674854165'
            
        ]);
    }
}
