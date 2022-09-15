<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="shortcut icon" href="https://www.araraquara.sp.gov.br/paginas/anteriores/wp-content/uploads/2017/04/cadastro-png/@@images/image.png" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
            </ul>
        </nav>

        <section>
            <h1>Cadastro de usuários</h1>
            <hr> <br> <br>

            <form method="post" action="process.php">

                Nome <br>
                <input type="text" name="nome" class="campo" maxlength="40" required autofocus> <br>
                
                Profissao <br>
                <input type="text" name="profissao" class="campo" maxlength="40" required autofocus> <br>

                E-mail <br>
                <input type="email" name="email" class="campo" maxlength="50" required> <br>

                <input type="submit" value="Salvar" class="salvar">
                <input type="reset" value="Limpar" class="limpar"> 

            </form>
        </section>
    </div>
</body>
</html>