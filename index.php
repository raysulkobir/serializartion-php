<?php 
    include "inc/header.php";
    include "inc/function.php";
     
?>
<?php
       function __autoload($calss_name){
           include "inc/".$calss_name.".php";
       }
?>

    <div class="para">
        <?php
            $pro =new programming();
            $ser = serialize($pro);
//            file_put_contents("test.txt", $ser);
//            echo $ser;
            
            $getcont = file_get_contents("test.txt");
            $unset = unserialize($getcont);
            echo "<pre>";
                print_r($unset);
            echo "<pre>";
        ?>
        
     
     </div>

<?php include "inc/footer.php"; ?>