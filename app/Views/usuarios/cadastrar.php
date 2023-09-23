<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/style.css">
</head>

<body>
    <div class="container">

        <div class="form-image">
            <img src="assets/img/cultura.jpg" alt="">
        </div>

        <div class="form">

            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>


                <form name="cadastrar" method="POST" action="<?= URL ?>/usuarios/cadastrar" class="mt-4">

                <div class="form-group">
                        <div class="input-box">

                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                    <input type='text' name='nome' id='nome' value='<?=$dados['nome']?>' class='form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>'>
                    <div class="invalid-feedback">
                        <?= $dados['nome_erro'] ?>
                    </div>
                </div>
                        
                <div class="form-group">
                        <div class="input-box">
                     <label for="sobrenome">Sobrenome: <sup class="text-danger">*</sup></label>
                    <input type='text' name='sobrenome' id='sobrenome' value='<?=$dados['sobrenome']?>' class='form-control <?= $dados['sobrenome_erro'] ? 'is-invalid' : '' ?>'>
                    </div>
                    <div class="invalid-feedback">
                        <?= $dados['Sobrenome_erro'] ?>
                    </div>
                </div>
                    

                <div class="form-group">
                     <div class="input-box email-box">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type='text' name='email' id='email' value='<?=$dados['email']?>' class='form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>'>
                    </div>
                    <div class="invalid-feedback">
                        <?= $dados['email_erro'] ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-box">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type='password' name='senha' id='senha' value='<?=$dados['senha']?>' class='form-control  <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>'>
                    </div>
                    <div class="invalid-feedback">
                        <?= $dados['senha_erro'] ?>
                    </div>
                </div>

                <div class="form-group">
                     <div class="input-box">
                    <label for="confirma_senha">Confirme a Senha: <sup class="text-danger">*</sup></label>
                    <input type='password' name='confirma_senha' id='confirma_senha' value='<?=$dados['confirma_senha']?>'class='form-control <?= $dados['confirma_senha_erro'] ? 'is-invalid' : '' ?>'>
                    </div>
                    <div class="invalid-feedback">
                        <?= $dados['confirma_senha_erro'] ?>
                    </div>
                </div>
              
                <div class="continue-button">
                    <button><a href="#">Continuar</a> </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>