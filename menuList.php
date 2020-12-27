<?php
   session_start();
   if(isset($_SESSION["name"]))
   {
       echo "<script>alert('welcome {$_SESSION['name']} !')</script>";
   }
   else
   {
      echo "<script>alert('Please Login in index page!')</script>";
      header('location:index.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MenuList</title> 
    <link rel="stylesheet" href="menulist.css">
    <link rel="stylesheet" href=".//fontawesome-free-5.13.0-web/css/all.css">
</head>
<body>
     <div id="head">
        <div id="headContent">
             <h1>foodcourt.com</h1>
        </div>
        <div id="headImg">
             <img src="pic8.png">
        </div>
     </div>
     <div id="horizontalNavBar">
         <ul>
             <li><a href="#">Home</a></li>
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
             <li><a href="blog.php">Blog</a></li>
             <li><a href="logout.php">Logout</a></li>
         </ul>
     </div>
     <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
     <div id="verticalNavBar">
        <ul>
            <li id="title">Varieties</li>
            <li><a href="#" onclick="generate(1)"><i class="fas fa-qrcode">Sweet</i></a></li>
            <li><a href="#" onclick="generate(2)"><i class="fas fa-sliders-h">Hot</i></a></li>
            <li><a href="#" onclick="generate(3)"><i class="fas fa-calendar-week">Delecious</i></a></li>
            <li><a href="#" onclick="generate(4)"><i class="fas fa-stream">Sandwich</i></a></li>
            <li><a href="#" onclick="generate(5)"><i class="fas fa-envelope">Burger</i></a></li>
            <li><a href="#" onclick="generate(6)"><i class="fas fa-question">Dessert</i></a></li>
            <li><a href="#" onclick="generate(7)"><i class="fas fa-link">Dinner</i></a></li>
        </ul>
     </div>
     <section>
     </section>
    <div id="menuContainer">
        <div id="imgBox">
            <img src="pic3.png" id="image">
        </div>
        <div id="contentBox">
            <p id="name">Beef burger</p>
            <ul>
                <li><p class="content">1 Burger 200g</p></li>
                <li><p class="content">1 Medium fries</p></li>
                <li><p class="content">1 Pepsi</p></li>
                <li><p class="content">1 Salad</p></li>
                <br><br>
                <span class="content">10$</span>
            </ul>
        </div>
    </div>
    <script>
            function generate(i)
            {
                var img=document.getElementById("image");
                var title=document.getElementById("name");
                var cnt=document.getElementsByClassName("content");
                switch(i)
                {
                    case 1:
                    {
                        img.setAttribute("src","pic18.png");
                        title.innerHTML="Sweet Fries";
                        cnt[0].innerHTML="1 Coke 100ml";
                        cnt[1].innerHTML="2 medium fries";
                        cnt[2].innerHTML="Pepsi";
                        cnt[3].innerHTML="salad";
                        cnt[4].innerHTML="20$";
                        break;
					}
                    case 2:
                    {
                        img.setAttribute("src","pic16.png");
                        title.innerHTML="Hot fries";
                        cnt[0].innerHTML="1 Coke 100ml";
                        cnt[1].innerHTML="2 medium fries";
                        cnt[2].innerHTML="Pepsi";
                        cnt[3].innerHTML="salad";
                        cnt[4].innerHTML="30$";
                        break;
					}
                    case 3:
                    {
                        img.setAttribute("src","pic1.png");
                        title.innerHTML="Chicken Fries";
                        cnt[0].innerHTML="1 Coke 100ml";
                        cnt[1].innerHTML="3 medium fries";
                        cnt[2].innerHTML="Pepsi";
                        cnt[3].innerHTML="salad";
                        cnt[4].innerHTML="50$";
                        break;
					}
                    case 4:
                    {
                        img.setAttribute("src","pic11.png");
                        title.innerHTML="Sweet corns";
                        cnt[0].innerHTML="1 Coke 100ml";
                        cnt[1].innerHTML="40 medium corns";
                        cnt[2].innerHTML="Pepsi";
                        cnt[3].innerHTML="salad";
                        cnt[4].innerHTML="38$";
                        break;
					}
                    case 5:
                    {
                        img.setAttribute("src","pic2.png");
                        title.innerHTML="Hot Burger";
                        cnt[0].innerHTML="1 Coke 100ml";
                        cnt[1].innerHTML="1 medium burger";
                        cnt[2].innerHTML="Pepsi";
                        cnt[3].innerHTML="salad";
                        cnt[4].innerHTML="80$";
                        break;
					}
                    case 6:
                    {
                        img.setAttribute("src","pic9.png");
                        title.innerHTML="Bada chilli era";
                        cnt[0].innerHTML="1 Coke 100ml";
                        cnt[1].innerHTML="2 medium era's";
                        cnt[2].innerHTML="Pepsi";
                        cnt[3].innerHTML="salad";
                        cnt[4].innerHTML="79$";
                        break;
					}
                    case 7:
                    {
                        img.setAttribute("src","pic15.png");
                        title.innerHTML="Fried rice";
                        cnt[0].innerHTML="1 Coke 100ml";
                        cnt[1].innerHTML="1 medium fried rice";
                        cnt[2].innerHTML="Pepsi";
                        cnt[3].innerHTML="salad";
                        cnt[4].innerHTML="100$";
                        break;
					}
				}
			}
    </script>
</body>
</html>