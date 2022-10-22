<link rel="stylesheet" href="../css/style.css">   
<link rel="icon" href="../img/cactoIni_final.svg">
<title>Finalização de Compra</title>
            <?php
            include_once "../utils/header_3.php";

            session_start();
            $idusuario = $_SESSION['usuariologado']['id_usuario']; // Depois precisamos alterar para pegar da $_SESSION
            include "finalizacao_compra_back.php";
       
                echo  "

                <main>

                    <div class='section_2' id='home_2'>

                        <div class='fim-compra'>
                        </div>
                        
                    </div>
                
                </main>";
           
                include_once "../utils/footer_3.php";

            ?>

        <a href="selecao_produtos_front.php">Voltar</a>


