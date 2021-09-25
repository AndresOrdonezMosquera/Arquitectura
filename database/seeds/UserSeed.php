<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    
    public function run()
    {
        
        $users = array(
            [
                'name' => 'Andres Mosquera',
                'email' => 'andres1997@misena.edu.co',
                'password' => \Hash::make('123456'),
                
            ]
            
        );

    foreach ($users as $user){
        User::updateOrCreate($user);
    }
    }
}

