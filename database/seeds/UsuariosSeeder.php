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

		User::create( [
		'id'=>2,
		'name'=>'Ricardo Arredondo Ríos',
		'password' => bcrypt('123qwe'),
		'email'=>'ricardo@admin.com',
		'tipo'=>'administrador',
		'remember_token'=>NULL,
		'email_verified_at'=>NULL,
		'created_at'=>'2019-02-26 00:00:00',
		'updated_at'=>'2019-02-26 00:00:00'
		] );

		User::create( [
		'id'=>3,
		'name'=>'Juan Carlos Soto',
		'password' => bcrypt('123qwe'),
		'email'=>'carlos@admin.com',
		'tipo'=>'administrador',
		'remember_token'=>NULL,
		'email_verified_at'=>NULL,
		'created_at'=>'2019-02-26 00:00:00',
		'updated_at'=>'2019-02-26 00:00:00'
		] );

		User::create( [
		'id'=>4,
		'name'=>'Pako',
		'password' => bcrypt('123qwe'),
		'email'=>'pako@admin.com',
		'tipo'=>'administrador',
		'remember_token'=>NULL,
		'email_verified_at'=>NULL,
		'created_at'=>'2019-02-26 00:00:00',
		'updated_at'=>'2019-02-26 00:00:00'
		] );

		User::create( [
		'id'=>5,
		'name'=>'Genny',
		'password' => bcrypt('123qwe'),
		'email'=>'genny@admin.com',
		'tipo'=>'administrador',
		'remember_token'=>NULL,
		'email_verified_at'=>NULL,
		'created_at'=>'2019-02-26 00:00:00',
		'updated_at'=>'2019-02-26 00:00:00'
		] );

		User::create( [
		'id'=>6,
		'name'=>'Isbac',
		'password' => bcrypt('123qwe'),
		'email'=>'isbac@admin.com',
		'tipo'=>'administrador',
		'remember_token'=>NULL,
		'email_verified_at'=>NULL,
		'created_at'=>'2019-02-26 00:00:00',
		'updated_at'=>'2019-02-26 00:00:00'
		] );
    }
}
