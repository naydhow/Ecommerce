<link rel="stylesheet" href="../css/style.css">   
<link rel="icon" href="../img/logopeq_caricacto.svg">

<?php
    include_once "../utils/header_3.php";

    session_start();
    $idusuario = $_SESSION['usuariologado']['id_usuario']; // Depois precisamos alterar para pegar da $_SESSION
    include "finalizacao_compra_back.php";


    echo "

    <div class='section' id='home'>

        <div class='fim-compra'>
            <h1>Compra Finalizada com Sucesso!!!</h1>
        </div>
        
    </div>";  

    include_once "../utils/footer_3.php";

?>

<a href="selecao_produtos_front.php">Voltar</a>