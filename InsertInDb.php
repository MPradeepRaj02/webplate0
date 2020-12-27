<?php
 $servername="localhost";
 $username="root";
 $password="";
 $databasename="mysql";
 $conn=new mysqli($servername,$username,$password,$databasename);
 if($conn->connect_error)
 {
     die("Connection Failed:".$conn->connect_error);
 }
 $name=$_POST["name"];
 $pass1=$_POST["pass1"];
 $pass2=$_POST["pass2"];
 $email=$_POST["email"];
 $quali=$_POST["quali"];
 $dob=$_POST["dob"];
 $gender=$_POST["gender"];
 $submit=$_POST["submit"];
 if(isset($_POST["submit"]))
 {
  if($name!=""&&$pass1!=""&&$pass2!=""&&$email!=""&&$quali!=""&&$dob!=""&&$gender!="")
  {
     if($pass1==$pass2)
     {
         $sql="INSERT INTO users(NAME,PASSWORD,DOB,EMAIL,QUALIFICATION,GENDER) values('$name','$password','$dob','$email','$quali','$gender')";
         if($conn->query($sql))
         {
             echo "Informations stored successfully";
         }
         else
         {
             echo "server busy:".$conn->error;
         }
     }
     else
     {
         echo "password Mismatch";
         $pass1="";
         $pass2="";
     }
  }
  else
  {
     echo "All fields are required";
  }
}
?>