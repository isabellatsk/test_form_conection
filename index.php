<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de conexão</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section id="form-sec">
        <button onclick="abrirForm()" id="btn-abrir">Cadastrar novo produto</button>
        <form method="post" action="index.php" id="form-produto">
        <button class="btn-fechar" onclick="fecharForm()">&times;</button>
            <h2>Cadastrar produto</h2>
            <label for="nome">Nome *</label>
            <input type="text" name="nome" placeholder="Digite o nome do produto" required>

            <label for="codigo">Código *</label>
            <input type="text" name="codigo" placeholder="Digite o código do produto" required>

            <label for="preco">Preço *</label>
            <input type="text" name="preco" placeholder="Digite o preço do produto" required>

            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" placeholder="Escreva a descrição do produto">

            <label for="categoria">Categoria *</label>
            <input type="text" name="categoria" placeholder="Digite a categoria do produto" required>

            <button class="enviar" type="submit">Registrar</button>
        </form>
    </section>
    <script>
        function abrirForm(){
            document.getElementById("form-produto").style.display = "flex"
            document.getElementById("btn-abrir").style.display = "none"
        }
        function fecharForm(){
            document.getElementById("form-produto").style.display = "none"
            document.getElementById("btn-abrir").style.display = "flex"
        }
    </script>
</body>
</html>
<!--http://localhost/teste_form_conexao/index.php-->
<!--http://localhost/atividades_testes_2025/form-livro/cadastro.php-->