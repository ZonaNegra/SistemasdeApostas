<?php include("header.php");?>
    <section class ='my-slide'>
        <?php
            
            $url = isset($_GET['url']) ? $_GET['url'] : "home";

            if(file_exists("pages/".$url.".php")){
                include("pages/".$url.".php");
            }else{
                include("pages/404.php");
            }

        ?>
        <h1>Aqui vai ser um slide</h1>
    </section>
    <section class='content'>
        <h1>Conteúdo</h1>
    </section>
<?php include("footer.php");?>
