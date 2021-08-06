<!DOCTYPE html>

<html lang="PT-BR">
    <head><title>Aula 4 de php</title>

        <link href="css/Bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="estiloaula4.css" rel="stylesheet" type="text/css"/>
        <script src="Bootstrap/js/jquery-1.10.2.js" type="text/javascript"></script>
        <meta charset="utf-8">

    </head>

    <body>

        <div class="well">

            <p>
            <h2>
                LOGIN
            </h2>
        </p>

    </div>

    <div class="container ">

        <div class="row coluna ">
            <form  class="">

                Nome:
                <input type="text" name="nome" class="form-control" /> <br /><br />

                Sobrenome:
                <input type="text" name="sobrenome" class="form-control" /> <br />

                <input type="submit" name="botao" value="Entrar" class="btn-info bt form-group"></input>

        </div>

    </div>
</form>

<?php
require_once 'AulaDePhp4.php';

$Aluno = new Aluno();

$Aluno->pegarDadosDoBanco();


if ($_GET) {


    #$Aluno->nome = "klaus";

    $Aluno->setnome($_GET['nome']);

    echo $Aluno->getnome();

    $Aluno->setSobrenome($_GET['sobrenome']);

    echo $Aluno->getSobrenome();
}
?>



</body>
</html>