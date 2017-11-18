<?php

$con = mysqli_connect("localhost","root","","tcc");
$sel = "SELECT * FROM votos";
$res = mysqli_query($con, $sel);

?>

<!DOCTYPE html>
<html class="pushmenu-push" lang="br">
<head>

    <title>TCC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- LINKS -->
    <link rel='shortcut icon' type='image/x-icon' href="img/src/favicon.ico" />
    <link rel="stylesheet" href="css/css.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/parallax.js" type="text/javascript"></script>
    <script src="js/nicescroll.js" type="text/javascript"></script>
    <script src="js/navbar.js" type="text/javascript"></script>
    <script src="js/ancoragem.js" type="text/javascript"></script>
    <script src="js/menu.js" type="text/javascript"></script>

    <script>$.ajaxSetup({cache: false});</script>

</head>
<body>

<div id="nav">
    <div id="nav_list">
        <header class="background-mobile">
            <div class="navbar-mobile">
                <div class="mob-menu" onclick="mobmenu(this)">
                    <div class="menu-mobile">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <a href="#votelink"><button id="btnvotar1">VOTAR</button></a>
</div>

<nav class="pushmenu pushmenu-left">
  <ul class="links">
    <li id="fechamob"> X </li>
    <li> <a href="#bg">INICÍO</a> </li>
    <li> <a href="#oqlink">A PROFISSÃO</a> </li>
    <li> <a href="#votelink">VOTE!</a> </li>
  </ul>
</nav>

<!-- BACKGROUND -->
<!-- TEXTO DO INICIO DO SITE -->
<div id="bg" style="background-position: center 0px;">
<div class="centralizar">
    <div class="bg-center" id="bg-text">
        <h1>PROGRAMAÇÃO WEB</h1>
        <h2>GABRIEL PEDREIRA GOMES</h2>
    </div>
</div>
</div>

<a id="oqlink"></a>
<section id="oqeh">

    <div id="text">

        <h1>O QUE FAZ UM PROGRAMADOR WEB?</h1>

        <p>
        "Desenvolvimento web é o termo utilizado para
        descrever o desenvolvimento de sites, na Internet
        ou numa intranet. Este é o profissional que trabalha
        desenvolvendo websites, podendo ser um Web Designer
        (Desenvolvedor do Layout), ou Web Developer
        (Desenvolvedor de sistemas). O desenvolvimento
        refere-se a um processo de construção e testes do
        software especifico para a web, com a finalidade de
        se obter um conjunto de programas, que satisfazem as
        funções pretendidas, quer em termos de usabilidade
        dos usuários ou compatibilidade com outros programas
        existentes. O desenvolvimento web pode variar desde
        simples páginas estáticas a aplicações ricas,
        comércios eletrônicos ou redes sociais".
        <br>
        <strong>
            Fonte:
            <a target="_blank"
            href="https://pt.wikipedia.org/wiki/Desenvolvimento_web">
            Wikipedia (Desenvolvimento web).</a>
        </strong>
        </p>

        <div id="img">
            <img src="img/src/cod.png" />
        </div>

        <a href="#votelink"><button>VOTE NA SUA PROFISSÃO FAVORITA</button></a>

    </div>

</section>

<section id="vote">

    <div id="titprof">
    <a id="votelink"></a>
        <h1>E VOCÊ? O QUE DESEJA SER?</h1>
        <p>ESCOLHA ALGO ENTRE AS PROFISSÕES DA FEIRA!</p>
    </div>

    <div class="centra">
    <form id="ck" method="post">

        <?php

        while ($row = mysqli_fetch_assoc($res)) {
        echo "
        <p>
            <input type='checkbox' name='profissoes[]'
            id='".$row['id']."' value='".$row['id']."'/>
            <label for='".$row['id']."'>".utf8_encode($row['profissao'])."</label>
        </p>";

        }

        if(isset($POST['submit'])){
            foreach($_POST['profissoes'] as $profissao){
                $upd = "UPDATE votos SET qtdvoto = qtdvoto + 1 WHERE id = ".$profissao."";
        }

        if (mysqli_affected_rows($con)){
            echo "<script> alert('MUITO OBRIGADO POR VOTAR c:'); </script>";
        }else {
            echo "<script> alert('ERRO :c'); </script>";
        }

        }

        ?>

        <div id="cen">
            <input type="submit" id="env" name="enviar" value="VOTAR"></input>
        </div>

    </form>
    </div>

</section>

<footer class="footer">
    <p> WEBSITE DESENVOLVIDOR POR GABRIEL
        PEDREIRA GOMES, PARA O TRABALHO DE CONCLUSÃO
        DE CURSO DA ESCOLA <strong>EMILIA DE PAIVA MEIRA</strong>.
   </p>
</footer>

</body>
</html>
