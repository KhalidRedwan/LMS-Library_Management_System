<?php
    session_start();
    if(isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])){

        if(isset($_POST['sid']) && !empty($_POST['sid'])&&isset($_POST['rd']) && !empty($_POST['rd'])&&isset($_POST['bk']) && !empty($_POST['bk'])){
            
            $var1=$_POST['sid'];
            $var2=$_POST['rd'];
            $var3=$_POST['bk'];
           
            
            try{
                ///php-mysql 3 way. We will use PDO - PHP data object
                $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                 $sql = "UPDATE allocation SET returnDate='$var2' WHERE studentsid='$var1' ";
                
                try{
                   

                 $stmt = $dbcon->prepare($sql);

  // execute the query
                   $stmt->execute();




                    ?>
                        <script>
                            window.location.assign('LHomePage.php');
                        </script>
                    <?php
                }
                catch(PDOException $ex){
                    ?>
                        <script>
                            window.location.assign('LHomePage.php');
                        </script>
                    <?php
                }
                
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('LHomePage.php');
                    </script>
                <?php
            }
        }
        else{
            ?>
                <script>
                    window.location.assign('LHomePage.php');
                </script>
            <?php
        }
    }
    else{
        ?>
            <script>
                window.location.assign('Llogin.php');
            </script>
        <?php
    }
?>