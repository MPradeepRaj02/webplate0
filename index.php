<?php
   session_start();
?>
<html>
    <head>
        <title>FoodCourt.com</title>
        <link  rel="stylesheet" href="style.css">
    </head>
<body>
        <div id="Container1">
            <div id="header">
                <img src="pic8.png">
                <p>Foodcourt.com</p>
            </div>
            <div id="verticalPortion">
                <i>Our Branches</i>
                <ul>
                      <li id="forSpace1"><i>Tamilnadu</i></li>
                      <li id="forSpace2"><i>Kerela</i></li>
                      <li id="forSpace3"><i>Gujarat</i></li>
                      <li id="forSpace4"><i>Maharastra</i></li>
                      <li id="forSpace5"><i>Rajasthan</i></li>
                      <li id="forSpace6"><i>Assam</i></li>
                      <li id="forSpace7"><i>calcutta</i></li>
                </ul>
            </div>
            <div id="Content">
                <div id="navigationBar">
                    <ul>
                        <li><a href="slideShow.html" target="frm">Home</a></li>
                        <li><a href="#">About us</a>
                            <ul>
                                <li><a href="#">Our vision</a></li>
                                <li><a href="#">Resources</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a>
                            <ul>
                                <li><a href="#">Maps</a></li>
                                <li><a href="#">Directions</a></li>
                            </ul>
                        </li>
                        <li><a href="Registration.php" target="blank">Registration</a></li>
                    </ul>
                    <div id="transparent">
                        <p>LOGIN</p>
                        <form method="post" action="index.php" autocomplete="off">
                            <input  id="box1" type="text" placeholder="username" name="uname"><br>
                            <input  id="box2" type="password" placeholder="password" name="pass"><br>
                            <input  id="login" type="submit" value="Login" name="login">
                        </form>
                    </div>
                </div>
            </div>
            <div id="footer">
                <p>Copyright@2019 &nbspDesigned by Mr.kishore...</p>
                <?php               
                    $conn=new mysqli('localhost','root','','foodcourt');
                    if($conn->connect_error)
                    {
                        echo "connection failed";
                    }
                    if(isset($_POST["login"]))
                    {
                        $name=$_POST["uname"];
                        $pass=$_POST["pass"];
                        if($name!=""&&$pass!="")
                        {
                            $sql="SELECT Name,Password FROM users WHERE Name='$name' AND Password='$pass'";
                            $result=$conn->query($sql);
                            //print_r($result);
                            if($result->num_rows==1)
                            {
                               $_SESSION["name"]=$name;
                               header("location:menuList.php");
                            }
                            else
                            {
                                echo "<script>alert('Login Invalid')</script>";
                            }
                        }
                       else
                       {
                            echo "<script>alert('please fill required inforamtions')</script>";
                       }
                    }
                ?>
            </div>
        </div>
</body>
</html>