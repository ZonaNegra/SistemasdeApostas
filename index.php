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
    </section>
<?php include("footer.php");?>
