<?php
  session_start();
  if(isset($_SESSION["name"]))
  {
      echo "<script>alert('Welcome {$_SESSION['name']} to our comment section !')</script>"; 
  }
  else
  {
      echo "<script>alert('please loign in 'login page')</script>"; 
      header('location:index.php');
  }
?>
<html>
    <head>
        <title>Blog</title>
        <link href="blog.css" rel="stylesheet">
        <link rel="stylesheet" href=".//fontawesome-free-5.13.0-web/css/all.css">
    </head>
<body>
   <div id ="container"> 
    <div id="head">
        <i>foodcourt.com</i>
        <img src="pic8.png"></img>
    </div>
    <div id="navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About us</a>
                <ul>
                    <li><a href="#">Our vision</a></li>
                    <li><a href="#">Resources</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a>
              <ul>
                  <li><a href="#">Maps</a></li>
                  <li><a href="#">Directions</a></li>
              </ul>
            </li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="Registration.php">Registration</a></li>
        </ul>
    </div>
    <input type="checkbox" id="check">
         <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
         </label>
    <div id="verticalContent">
           <header>Our specalities</header>
           <ul>
              <li><i class="fas fa-qrcode">quickDelivery</i></li>
              <li><i class="fas fa-sliders-h">promptService</i></li>
              <li><i class="fas fa-calendar-week">offordableCost</i></li>
              <li><i class="fas fa-envelope">24hoursService</i></li>
              <li><i class="fas fa-stream">bigOnlineSale</i></li>
              <li><i class="fas fa-question-circle">hygenicProducts</i></li>
              <li><i class="fas fa-sliders-h">reliability</i></li>
              <li><i class="fas fa-bars">moreVarieties</i></li>
           </ul>
    </div>
    <section></section>
    <div id="box">
        <form method="post" action="blog.php">
            <span>comment</span>
            <input type="text" placeholder="username" name="uname" id="user" value="<?php echo $_SESSION['name'] ?>" readonly>
            <textarea name="cmt"></textarea>
            <input type="submit" value="submit" name="submit" >
        </form>
    </div>
    <div id="comments">
        <?php
            $con=new mysqli('localhost','root','','foodcourt');
            if($con->connect_error)
            {
                echo "connection failed";
            }
            if(isset($_POST["submit"]))
            {
                $name=$_SESSION["name"];
                $comment=$_POST["cmt"];
                if($_POST["cmt"]!="")
                {
                    $sql1="INSERT into comments(Name,Comment) VALUES('$name','$comment')";
                    if($con->query($sql1))
                    {
                        echo "<script>alert('comment added successfully')</script>";
                    }
                    else
                    {
                        echo "<script>alert('server busy...')</script>";
                    }
                }
                else
                {
                    echo "<script>alert('please fill the comment')</script>";
                }
            } 
            $sql2="SELECT * FROM comments";
            $result=$con->query($sql2);
            if($result->num_rows>0)
            {
               while($row=$result->fetch_assoc())
               {
                   echo "<p style='color:lime'>Name: {$row['Name']}</p><br>";
                   echo "<p style='color:orange'>Comment: {$row['comment']}</p><br>";
                   echo "<hr>";
               }
            }
            else
            {
                echo "<script>alert('No comments available')</script>";
            }
        ?>
    </div>
</body>
</html>