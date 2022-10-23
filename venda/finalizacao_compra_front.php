<link rel="stylesheet" href="../css/style.css">   
<link rel="icon" href="../img/cactoIni_final.svg">
<title>Finalização de Compra</title>
            <?php
            include_once "../utils/header_3.php";

            session_start();
            if($_SESSION['usuariologado']) {
            $idusuario = $_SESSION['usuariologado']['id_usuario']; // Depois precisamos alterar para pegar da $_SESSION
            include "finalizacao_compra_back.php";
       
                echo  "

                <main>

                    <div class='section_2' id='home_2'>

                        <div class='fim-compra'>
                        </div>
                        
                    </div>
                
                </main>";
           
            }
            else
            {
                echo "<div>";
                echo "  <div class='section_none'>";
                echo "      <span>Você não possui permissão para acessar este local.</span>";
                echo "      <span><b>Faça o login para acessar essa função.</b></span>";
                echo "  </div>";
                echo "</div>";
            }

                include_once "../utils/footer_3.php";

            ?>

        <a href="selecao_produtos_front.php">Voltar</a>


