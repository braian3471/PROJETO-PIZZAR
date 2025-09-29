document.addEventListener('DOMContentLoaded', function() {
    const btnCadastro = document.getElementById('cadastro');

    btnCadastro.addEventListener('click', function(e) {
        e.preventDefault(); // impede o envio do formulário
        window.location.href = 'login.php'; // redireciona para login
    });
});
