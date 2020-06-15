<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dados = [
          'nome'=>"Teste",
          'sobrenome' => '',
          'email'=>"teste@gmail.com",
          'password'=>bcrypt("123456"),
          'img' => '',
          'bio' => ''
        ];

        if (User::where('email','=',$dados['email'])->count()) {
          $usuario = User::where('email','=',$dados['email'])->first();
          $usuario->update($dados);
          echo 'Usuario alterado';
        } else {
          User::create($dados);
          echo 'Usuario Criado';
        }

    }
}
