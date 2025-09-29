<?php
// Simulação de produtos (substituir por banco depois)
$produtos = [
    ["id"=>1, "nome"=>"Pizza Calabresa", "preco"=>35.00, "descricao"=>"Deliciosa pizza de calabresa"],
    ["id"=>2, "nome"=>"Pizza Margherita", "preco"=>30.00, "descricao"=>"Clássica com mussarela e tomate"],
    ["id"=>3, "nome"=>"Pizza Quatro Queijos", "preco"=>40.00, "descricao"=>"Mussarela, parmesão, gorgonzola e provolone"]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Braian F Luiz">
    <meta name="description" content="Sistema de login e cadastro de usuarios">
    <meta name="keywords" content="login, cadastro, usuarios">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="indexAdm.css?v=2">
    <title>Área Administrativa - Pizzar</title>
</head>
<body>
    <div class="container">
        <h1>Área Administrativa</h1>

        <!-- Listagem de Produtos -->
        <h2>Produtos Cadastrados</h2>
        <table class="tabela-produtos">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
            <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?= $produto["id"] ?></td>
                <td><?= $produto["nome"] ?></td>
                <td>R$ <?= number_format($produto["preco"],2,",",".") ?></td>
                <td><?= $produto["descricao"] ?></td>
                <td>
                    <button onclick="editarProduto(<?= $produto['id'] ?>)">Editar</button>
                    <button onclick="deletarProduto(<?= $produto['id'] ?>)">Deletar</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <!-- Formulário Adição / Edição -->
        <h2>Adicionar / Editar Produto</h2>
        <form id="formProduto">
            <input type="hidden" id="produtoId">
            <label>Nome:</label><br>
            <input type="text" id="nome" required><br>
            <label>Preço:</label><br>
            <input type="number" id="preco" step="0.01" required><br>
            <label>Descrição:</label><br>
            <textarea id="descricao" required></textarea><br><br>
            <button type="submit">Salvar Produto</button>
            <button type="button" onclick="document.getElementById('formProduto').reset();">Limpar</button>
            <button type="button" onclick="window.location.href='homepage.html';">Pagina inicial</button>
        </form>
    </div>

    <script>
        // Produtos simulados em JS
        let produtos = <?= json_encode($produtos) ?>;

        const form = document.getElementById('formProduto');
        form.addEventListener('submit', function(e){
            e.preventDefault();
            const id = document.getElementById('produtoId').value;
            const nome = document.getElementById('nome').value;
            const preco = parseFloat(document.getElementById('preco').value);
            const descricao = document.getElementById('descricao').value;

            if(id){
                // Editar produto
                const prod = produtos.find(p => p.id == id);
                prod.nome = nome;
                prod.preco = preco;
                prod.descricao = descricao;
            } else {
                // Adicionar produto
                const novoId = produtos.length ? produtos[produtos.length-1].id + 1 : 1;
                produtos.push({id:novoId, nome, preco, descricao});
            }

            alert('Produto salvo! Atualize a página para ver a lista atualizada.');
            form.reset();
        });

        function editarProduto(id){
            const prod = produtos.find(p => p.id == id);
            document.getElementById('produtoId').value = prod.id;
            document.getElementById('nome').value = prod.nome;
            document.getElementById('preco').value = prod.preco;
            document.getElementById('descricao').value = prod.descricao;
        }

        function deletarProduto(id){
            if(confirm('Deseja realmente deletar esse produto?')){
                produtos = produtos.filter(p => p.id != id);
                alert('Produto deletado! Atualize a página para ver a lista atualizada.');
            }
        }
    </script>
</body>
</html>
