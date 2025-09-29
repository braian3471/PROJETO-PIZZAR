<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Braian F Luiz">
    <meta name="description" content="Sistema de login e cadastro de usuarios">
    <meta name="keywords" content="login, cadastro, usuarios">
    <link rel="stylesheet" href="login.css?v=2">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <title>Login Pizzar</title>
</head>

<body>
            <!-- Página Admin

            Criar página de login do admin.

            Implementar listagem de produtos na área de administrador.

            Criar formulário de adição e edição de produtos.

            Implementar botão de deletar produto com confirmação.

            Garantir validação e responsividade da página completa. -->

        <div class="img">
            <img src="img/pizza-de-calabresa.jpg" alt="Logo Pizzar">
        </div>    
        <div class="container">
            <h1>Login Admin</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="email">Usuário:</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu User" required maxlength="50">
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required maxlength="8" minlength="4">
                </div>
                <button type="submit"><a href="indexAdm.php">Entrar</a></button>
                <p><a href="#">Esqueci minha senha</a></p>
                <p><a href="cadastro.php">Ainda não é cadastrado? Cadastre-se</a></p>
            </form>
        </div> 
</body>
</html>