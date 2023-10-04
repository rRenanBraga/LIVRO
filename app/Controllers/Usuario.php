<?php

class Usuarios extends Controller
{

    public function __construct()
    {
        $this->usuarioModel = $this->model('Usuario');
    }

    public function login()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
            ];

            if (in_array("", $formulario)) :

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;

            else :
                if (Checa::checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
                else :
                    $usuario = $this->usuarioModel->checarLogin($formulario['email'],$formulario['senha']);
                        if($usuario):
                           $this->criarSessaoUsuario($usuario);
                        else:
                            echo 'Usuário ou senha inválidos <hr>';
                        endif;

                endif;

            endif;

            var_dump($formulario);
        else :
            $dados = [
                'email' => '',
                'senha' => '',
                'email_erro' => '',
                'senha_erro' => ''
            ];

        endif;


        $this->view('usuarios/login', $dados);
    }

    private function criarSessaoUsuario($usuario){
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['usuario_nome'] = $usuario->nome;
        $_SESSION['usuario_email'] = $usuario->email;
    }

    public function sair(){
        unsert($_SESSION['usuario_id']);
        unsert($_SESSION['usuario_nome']);
        unsert($_SESSION['usuario_email']);

        session_destroy();
        header('Location:'.URL.'');
        
    }




}
