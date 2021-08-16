<style>
    table, th, td{
        border: 1px solid blue;
        border-collapse: collapse;
        text-align: center;
    }

    tr:hover{
        background-color: bisque;
    }
</style>


<?php
    session_start();

    if(isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])){
        ?>

            <br>
            <h3>BOOKS</h3>
            <input type="search" id="searchbox">
            <input type="button" value="Search" id="searchbtn">
            <br>
            <br>
            <script>
                var srcbtn=document.getElementById('searchbtn');
                srcbtn.addEventListener('click', searchprocess);

                function searchprocess(){
                    var searchvalue=document.getElementById('searchbox').value;
                    window.location.assign("Lsearch.php?param1="+searchvalue);
                }

            </script>


            <br>
            <br>

            <table>
                <thead>
                    <tr>
                         <th>Id</th>
                        <th>BName</th>
                        <th>Writter</th>
                        <th>publication</th>
                        <th>edition</th>
                         <th>gener</th>
                          <th>discription</th>
                           <th>quantity</th>

                            <th>imagepath</th>
                    </tr>
                </thead>
              <tbody>
                    <?php
                        try{

                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $sqlquery="SELECT * FROM books";

                            try{
                                $returnval=$dbcon->query($sqlquery); ///PDOStatement

                                $bookstable=$returnval->fetchAll();

                                foreach($bookstable as $row){
                                    ?>
                                        <tr>
                                           <td><?php echo $row['bookId'] ?></td>
                                            <td><?php echo $row['bookName'] ?></td>
                                            <td><?php echo $row['writterName'] ?></td>
                                            <td><?php echo $row['publication'] ?></td>
                                            <td><?php echo $row['edition'] ?></td>
                                              <td><?php echo $row['genre'] ?></td>
                                            <td><?php echo $row['description'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td><?php echo $row['image'] ?></td>
                                            <td>
                                                <img width="80" height="80" alt="BOOK Demo" src="<?php echo $row['image'] ?>">
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="9">Data read error ... ...</td>
                                    </tr>
                                <?php
                            }

                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="9">Data read error ... ...</td>
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
            <br>
            <br>
            <input type="button" value="ENTRY NEW BOOKS" id="bkebtn">

<script>
    var e = document.getElementById('bkebtn');
    e.addEventListener('click', processlogout);

    function processlogout() {
        window.location.assign('Lentry.php');
    }
</script>
             <br>
            <br>
            <input type="button" value="UPDATE BOOK INFO" id="bkebtn6">

<script>
    var e6 = document.getElementById('bkebtn6');
    e6.addEventListener('click', processlogout);

    function processlogout() {
        window.location.assign('updateinfo.php');
    }
</script>
             <br>
            <br>
              <input type="button" value="HOME" id="bkebtnbd">

        <script>
            var e1bd = document.getElementById('bkebtnbd');
            e1bd.addEventListener('click', processlogout);

            function processlogout() {
                window.location.assign('LHomepage.php');
            }
        </script>


        <?php
    }
    else{
        ///session doesn't contain any valid user email
        ?>
            <script>
                window.location.assign('Llogin.php');
            </script>
        <?php
    }
?>