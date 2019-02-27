<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		User::create( [
		'id'=>1,
		'name'=>'admin',
		'password' => bcrypt('123qwe'),
		'email'=>'admin@admin.com',
		'tipo'=>'administrador',
		'remember_token'=>NULL,
		'email_verified_at'=>NULL,
		'created_at'=>'2019-02-26 00:00:00',
		'updated_at'=>'2019-02-26 00:00:00'
		] );
    }
}
