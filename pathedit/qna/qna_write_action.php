<?php
                
                include "../config.php";  // including configuration file
                $id = $_GET['name'];                      //Writer
                
                $title = $_GET['title'];                  //Title
                $content = $_GET['content'];              //Content
                $date = date('Y-m-d H:i:s');            //Date
 
                $URL = './qna.php';                   //return URL
 
 
                $query = "insert into qna (number,title, content, id,  date) 
                        values(null,'$title', '$content','$id', '$date')";
 
				$result = mysqli_query( $db,$query);
               
                if($result){
?>                  <script>
                        alert("<?php echo "registered"?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>