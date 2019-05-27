 <?php
               include 'dbh.php';
               
              

$name = $_POST['uname'];
                $sql = "SELECT * FROM posts WHERE name='".$name."'";
                $result = $conn->query($sql);
               if ($result->num_rows > 0){
           //   if(!empty($result)){
                  
                    while ($row = $result->fetch_assoc()){
                    //while ($row = mysql_fetch_array($result)) {
                        echo "" . $row["name"], "" , " :: " , $row["msg"], "--" ,$row["date"], "<br>";
                        echo "<br>";
                        
                    }
                    
                }else {
                    echo "0 results";
                }
                $conn->close();
                ?>
