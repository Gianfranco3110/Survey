<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $useradmin=User::create([
        'name'      => 'Admin_Gian',
        'email'     => 'Gianfrancor442@gmail.com',
        'password'  =>hash::make('admin'),
        'fullacceso'=>'yes',
        'codigo'    =>'adm1',
       ]);

       $user1=User::create([
        'name'      => 'user new',
        'email'     => 'user_new@gmail.com',
        'password'  =>hash::make('hola123..'),
        'fullacceso'=>'no',
        'codigo'    =>'user1',
       ]);
    }
}
