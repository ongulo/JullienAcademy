<!DOCTYPE html><html lang="en">
<head>
<meta charset="UTF-8"><title>Spring School</title><meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Spring - Website"><meta name="author" content="merkulove"><meta name="keywords" content="">
<link rel="icon" href="assets/img/spring.jpg">
<link rel="stylesheet" type="text/css" href="assets/css/main.min.css">
</head>
<body><div class="wrapper"><div class="error-page">
  <h2 class="page-title">Spring</h2><div class="container"><div class="error-text">

  <?php
    require_once "connection.php";
?>

<?php
echo "Record submitted, Thank You for your feedback!";
?>
 <br>
 <div class="row">
    <table class="table" style="margin:5px;">
        <thead>
            <tr>
                <th scope="colspan">#</th>
                <th scope="colspan">Name</th>
                <th scope="colspan">Email</th>
                <th scope="colspan">Position</th>
                <th scope="colspan">Comment</th>
                </tr>
            <tr></tr>
        </thead>
        
        <?php
            $stmt = "SELECT * FROM subscriber ORDER BY id DESC LIMIT 1";
            $result = mysqli_query($conn, $stmt);

            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['position']."</td>
                        <td>".$row['comment']."</td>
                       
                    </tr>";
                };
            };  
        ?>
    </table>
</div>
   
<a href="index.php" title="" class="btn-default">Home Page <i class="fa fa-long-arrow-alt-right"></i></a><ul class="social-icons">
  <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li><li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
  <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li></ul>
  <!--social-icons end--></div><!--error-text end--></div></div><!--error-page end--></div><!--wrapper end-->
  <script src="assets/js/bundle.min.js"></script>
  </body>
</html>