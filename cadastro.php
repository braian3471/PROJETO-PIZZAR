<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Braian F Luiz">
    <meta name="description" content="Sistema de login e cadastro de usuarios">
    <meta name="keywords" content="login, cadastro, usuarios">
    <link rel="stylesheet" href="cadastro.css?v=2">
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
            <h1>cadastro</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="usuario">Nome de usuario:</label>
                    <input type="text" name="usuario" id="usuario" placeholder="EX: Joãozinho" required maxlength="50">
                </div>
                 <div class="form-group">
                    <label for="email">email:</label>
                    <input type="email" name="email" id="email" placeholder="EX: joão10@gmail.com" required maxlength="100">
                </div>
                 <div class="form-group">
                    <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" placeholder="EX: Rua Calabresa" required maxlength="50">
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" id="bairro" placeholder="EX: Bairro Rio Branco" required maxlength="50">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" id="cidade" placeholder="EX: Porto Alegre (RS)" required maxlength="50">
                </div>
                <div class="form-group">
                    <label for="cep">CEP:</label>
                    <input type="text" name="cep" id="cep" placeholder="EX: 00000-000" required maxlength="9">
                </div>

                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required maxlength="30" minlength="4">
                </div>
                <button type="submit" id="cadastro"> Finalizar Cadastrar</button>
                <p ><a href="#">ajuda?</a></p>
                
            </form>
            
        </div> 

       <script src="cadastro.js"></script> 
</body>
</html>