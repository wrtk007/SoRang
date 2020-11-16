
<?php
                $connect = mysqli_connect('localhost', 'root', '1234', 'team15') or die ("connect fail");
                
                $review_id = $_GET['review_id'];                      //Writer
                //$pw = $_GET[pw];                        //Password
                $review_title = $_GET['review_title'];                  //Title
                $review = $_GET['review'];              //Content
                $review_score=$_GET['review_score'];
                $review_alc_table = $_GET['review_alc_table'];
                $review_alc_no = $_GET['review_alc_no'];
                //$review_date = date(current_timestamp());            //Date
 
                $URL = './myreview.php';                   //return URL
 
 
                $query = "insert into user_review (review_no,review_id, review_title, review, review_score, review_alc_table, review_alc_no) 
                        values(null,'$review_id','$review_title', '$review', '$review_score', '$review_alc_table', '$review_alc_no')";
 
 
                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                        
                }
 
                mysqli_close($connect);
?>
