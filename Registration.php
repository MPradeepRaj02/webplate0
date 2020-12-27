<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="Registration.css">
        <script src="jquery.min.js"></script>
        <script style="color:white;">
              $(document).ready(function{
                    $("#NAME").bind("blur",function{
                          //how to pass the values to the 'php' file
                          $.post("check_user.php",{name:frm.name.value},function(data){
                                $("#feedback").html(data);
                           });
                    });
             });
       </script>
    </head>
<body>
    <div id="header">
        <h1>REGISTRATION FORM</h1>
    </div>
    <div id="container1">
      <form method="post" action="Registration.php" name="frm">
            <input type="text" name="name" placeholder="Name" class="input" id="NAME"><br>
            <input type="password" name="pass1" placeholder="Password" class="input"><br>
            <input type="password" name="pass2" placeholder="Confirm password" class="input"><br>
            <input type="text" name="dob" placeholder="D.O.B" class="input"><br>
            <input type="email" name="email" placeholder="Email" class="input" id="gmail"><span id="feedback"></span><br>
            <input type="text" name="quali" placeholder="Qualification" class="input"><br>
            <input type="text" name="gender" placeholder="Gender" class="input"><br>
            <input type="submit" name="submit" placeholder="submit" class="input"><br>
      </form>
<div id="information" name="info">
<?php
    $flag=0;
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="foodcourt";
    $conn=new mysqli($servername,$username,$password,$databasename);
    if($conn->connect_error)
    {
        die("Connection Failed:".$conn->connect_error);
    }
    $name=filter_input(INPUT_POST,'name');
    $pass1=filter_input(INPUT_POST,'pass1');
    $pass2=filter_input(INPUT_POST,'pass2');
    $email=filter_input(INPUT_POST,'email');
    $quali=filter_input(INPUT_POST,'quali');
    $dob=filter_input(INPUT_POST,'dob');
    $gender=filter_input(INPUT_POST,'gender');
    $submit=filter_input(INPUT_POST,'submit');
    if(isset($_POST["submit"]))
    {
     if($name!=""&&$pass1!=""&&$pass2!=""&&$email!=""&&$quali!=""&&$dob!=""&&$gender!="")
     {
        /*$sql1="SELECT * FROM users";
        $result=$conn->query($sql1);
        while($row=$result->fetch_assoc())
        {
          if($email==$row["Email"])
          {
            echo "<script>alert('Email id already available')</script>";
            $flag=1;
            break;
            die();
          }
        }
        if($flag==0)
        {*/
         if($pass1==$pass2)
         {
            $sql="INSERT INTO users(Name,Password,Dob,Email,Qualification,Gender) values('$name','$pass1','$dob','$email','$quali','$gender')";
            if($conn->query($sql))
            {
                echo "<script>alert('Informations stored successfully')</script>";
                die();
            }
            else
            {
                echo "server busy:".$conn->error;
            }
         }
         else
         {
            echo "<script>alert('password Mismatch')</script>";
            $pass1="";
            $pass2="";
         }
        //}
     }
     else
     {
        echo "<script>alert('All fields are required')</script>";
     }
   }
?>
</div>
</div>
</body>
</html>