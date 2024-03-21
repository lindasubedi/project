<?php
session_start();
$username=$_SESSION['username'];
if($username==true){

}else{
    header("location:sign_in.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Management And Distribution System</title>
  <link rel="icon" type="image" href="istockphoto-1171700662-640x640.jpg">
  <style>
    body {
  margin: 0;
  padding: 0;
  min-height: 100vh; 
  display: flex;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  flex-direction: column;
  background-color: whitesmoke;
  
}
    /* Style for custom scrollbar (webkit browsers) */
    body::-webkit-scrollbar {
      width: 0.1em;
      height: 0em;
    }

    body::-webkit-scrollbar-thumb {
      background-color:gold; /* You can set the color to match your background */
    }
    nav {
      background-color:#a61111;;
      padding: 0px;
      padding-bottom: 1.6px;
      display: flex;
      justify-content: space-between;
      /* align-items: center; */
    }
    ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      margin-left: auto; 
      margin-right: 10%;

      
    }

    .dropdown {
      position: relative;
    }

    .dropdown button {
      background-color:#8c0000;;
      color: #ffffff;
      padding: 25px;
      border: none;
      cursor: pointer;
      font-size: 15px;
    }
    .dropdown button:hover{
        background-color: #740000;;
    }

    .dropdown-data {
      display: none;
      position: absolute;
      background-color: #740000;
      min-width:250px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-data{
      display: block;
    }

    .dropdown-data a {
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-data a:hover {
      background-color:rgb(163, 30, 30);
      text-decoration: underline;
    }
    .body1 h1{
       color: white;
       background-color: #8c0000;;
       margin-top: -0.1%;
       padding: 80px;
       text-align: center;
       border-bottom-left-radius: 50% 50px;
       border-bottom-right-radius: 50% 50px;
       padding-bottom: 35px;
    }
 
    footer{
      display: flex;
      grid-template-columns: 15% 60% 0%;
      padding: 80px;
      /* bottom: 20px; */
      width: 89.5%;
      /* position: absolute; */
      background-color: rgb(237, 235, 235);
      /* height: 2vh; */
      padding-top: 15px;
      padding-bottom: 20px;
      color: black;
      margin-top: auto;
        
    }
    .imgo{
      display: grid;
      grid-template-columns: 50% 50%;
      background-color:transparent;
    }
    .div2{
        margin-left: 4.5%;
    }
    .gmail{
      text-decoration: none;
    }
    .gmail:hover{
      text-decoration: underline;
    }
    .link{
      text-decoration: none;
    }
    .dropdown button a{
        text-decoration: none;
        color: white;
    }
    .forms button a{
      margin-bottom: 50px;
      text-decoration: none;
      color: #f2f2f2;
      padding: 10px;
      background-color: #8c0000;
      border-radius: 10px;
    } 
    .forms button a:hover{
      background-color:white;
      border: 1px solid black;
      color: #8c0000;
    }
    .forms button{
      margin-left: 29%;
      border-radius: 10px;
      border: none;
      background-color: transparent;
      margin-bottom: 100px;
    }
    .tabledonor, th, td{
      border: 1px solid black;
      background-color: wheat;
     border-radius: 2px;
    }
    .content2{
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 500px;
      margin-bottom: 2%;
    }
    .tabledonor{
      align-items: center;
      width: 80%;
      align-self: center ;
    }
    .donorav{
     
     /* margin-top: -150p;*/

    }
    .table2{
      align-items: center;
      width: 80%;
      align-self: center ;
      margin-bottom: 150px;
    }
    #bbank, #bloodt{
      padding: 10px;
      border-radius: 20px;
      float: right;
      margin-right: 40px;
    }
    #buttts{
      /* margin-bottom: 50px; */
      margin-right: 40px;
      float: right;
      text-decoration: none;
      color: #f2f2f2;
      border: 1px solid white;
      padding: 10px 15px;
      background-color: #8c0000;
      border-radius: 20px;
    } 
    #buttts:hover{
      background-color:white;
      border: 1px solid black;
      color: #8c0000;
    }
    .opt{
      padding: 10px;
      border-radius: 20px;
    }
    .table2{
      align-items: center;
      width: 80%;
      align-self: center ;
    }
  </style>
</head>
<body>
  <nav>
    <ul>
        <li class="dropdown">
            <button><a href="admin.php">Home</a></button>
            <div class="dropdown-data"></div>
          </li>
      <!-- <li class="dropdown">
        <button>Blood Availability</button>
        <div class="dropdown-data">
          <a href="#">A+</a>
          <a href="#">B+</a>
          <a href="#">AB+</a>
          <a href="#">O+</a>
          <a href="#">A-</a>
          <a href="#">B-</a>
          <a href="#">AB-</a>
          <a href="#">O-</a>
        </div>
      </li> -->
      <li class="dropdown">
        <button>Blood Stock Bank</button>
        <div class="dropdown-data">
          <a href="adminbhaktapur.php">Bhaktapur NRCS Blood Bank</a>
          <a href="adminnrcs.php">Central NRCS Blood Bank</a>
          <!-- <a href="">Lalitpur NRCS Blood Bank</a>
          <a href="">Frontline Hospital Blood Bank</a>
          <a href="">Teaching Hospital</a> -->
        </div>
      </li>
      <li class="dropdown">
        <button><a href="admininfo.php" style="text-decoration: none; color:white;">Admin Profile</a></button>
        <div class="dropdown-data">
          
        </div>
      </li>
    </ul>
  </nav>

  <div class="body1">
    <h1> Delete Blood</h1>
  </div><br><br>

  <table class="table2">
      <tr>
        <th>ID</th>
        <th>Bloods</th>
        <th>Blood Bank</th>
        
      </tr>
      
      <tr>
        <td>
        <?php
        // session_start();
        include "database.php";
        $username=$_SESSION['username'];
       
    $sql=mysqli_query($conn,"SELECT `id` FROM `bhaktpur` ");
$rows=mysqli_num_rows($sql);
if($rows>0){
  for($i=1;$i<=$rows;$i++){
    $rata=implode(mysqli_fetch_assoc($sql));
    echo $rata."<br>";
    }
}
?>
        </td>

        <td>
        <?php
        // session_start();
        include "database.php";
        $username=$_SESSION['username'];
       
    $sql=mysqli_query($conn,"SELECT `bloods` FROM `bhaktpur`");
$rows=mysqli_num_rows($sql);
if($rows>0){
  for($i=1;$i<=$rows;$i++){
    $rata=implode(mysqli_fetch_assoc($sql));
    echo $rata."<br>";
    }
}
?>
        </td>

        <td>
          <?php
          include "database.php";
        $username=$_SESSION['username'];
    $sql=mysqli_query($conn,"SELECT `bloodbank` FROM `bhaktpur`");
$rows=mysqli_num_rows($sql);
if($rows>0){
   for($i=1;$i<=$rows;$i++){
    $rata=implode(mysqli_fetch_assoc($sql));
    echo $rata."<br>";
    }
  }
          ?>

        </td>

       
      </tr>
    </table><br><br><br>
    
    <form action="delete.php" method="post">
    <button type="submit" id="buttts">DELETE</button>
    <select name="bank" id="bbank">
  <option value="Bhaktpur NRCS Blood Bank">Bhaktpur NRCS Blood Bank</option>
  <option value="Centeral NRCS Blood Bank">Centeral NRCS Blood Bank</option>
</select>

<select name="blood" id="bloodt">
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="O+">O+</option>
  <option value="A-">A-</option>
  <option value="B-">B-</option>
  <option value="AB-">AB-</option>
  <option value="O+">O-</option>
</select>
       
    </form>

  <footer>
    <div class="div1"><a  style="text-decoration: none; color: rgba(0, 0, 0, 0.683);">Contact us<br><span><a href="https://www.google.com/gmail/about/" class="gmail"> bmds45@gmail.com</a></span><br>+977 9810000000</a><br>
      <a class="link" href="https://www.facebook.com/profile.php?id=100079188882330"><img src="facebook-logo-facebook-icon-free-free-vector.jpg" style="height: 40px; width: 40px; margin-left: -5%; border-radius: 50%;"> </a>
      <a class="link" href="https://www.instagram.com/accounts/login/"><img src="download.png" style="height: 40px; width: 40px; border-radius: 50%;
        background-color: blue;"> </a> </div>
    <div class="div2" style="text-decoration: none; color:rgba(0, 0, 0, 0.683); text-align: justify;">About us<span>
    <br>We are a web-based system that may help with blood information in emergency situations. With the aid of our system, 
    users can quickly learn about the types and quantities of blood available at blood banks.</span>
  </div>
    <div class="div3"></div>
  </footer>
</body>
</html>
