<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <title>Blood Bank</title>
        <link rel="icon" type="image" href="istockphoto-1171700662-640x640.jpg">
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
         body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: rgb(205, 205, 205);
    
    }
    body::-webkit-scrollbar {
      width: 0.1em;
      height: 0em;
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
       
       
        #fname, #lname, #age, #weight, #allergy{
            padding: 10px 250px 10px 15px;
            background-color: #ffffff;
            border-radius: 10px;
            font-size: 15px;
            border: 0px;
            outline: none;
        }
        #sub{
            padding: 10px 20px;
            font-size: 15px;
            background-color: #ffffff;
            outline: none;
            border-radius: 10px;
        }
        footer{
      display: grid;
      grid-template-columns: 15% 60% 0%;
      padding: 79.9px;
      /* bottom: 20px; */
      width: 89.5%;
      /* position: absolute; */
      background-color: rgb(237, 235, 235);
      /* height: 2vh; */
      padding-top: 10px;
      padding-bottom: 5px;
      color: black;
    }
    .imgo{
      display: grid;
      grid-template-columns: 50% 50%;
      background-color:transparent;
    }
    .box2{
      margin-left: -35%;
      color: rgba(0, 0, 0, 0.589);
      font-size: x-large;
      font-style: italic;
      margin-top: 8%;
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
    .donor{
            margin-left: 10%;
            color: rgb(0, 0, 0);
            font-size: 25px;
        }
    </style>
<body>
    <nav>
        <ul>
          <li class="dropdown">
            <button><a href="home.php">Home</a></button>
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
            <a href="bhaktapur.html">Bhaktapur NRCS Blood Bank</a>
          <a href="nrcs.html">Central NRCS Blood Bank</a>
              <!-- <a href="">Lalitpur NRCS Blood Bank</a>
              <a href="">Frontline Hospital Blood Bank</a>
              <a href="">Teaching Hospital</a> -->
            </div>
          </li>
          <li class="dropdown">
            <button>Donor</button>
            <div class="dropdown-data">
              <a href="donorlogin.html">Donor login</a>
            </div>
          </li>
          
        </ul>
      </nav>
    <form action="donorlogin.php" method="post" class="donor">
        <h2>Donor login</h2><br>
        First Name<br>
        <input type="text" name="fnames" id="fname" placeholder="Enter your first name"><br><br>
        Last Name<br>
        <input type="text" name="lnames" id="lname" placeholder="Enter your last name"><br><br>
        Age<br>
        <input type="text" name="ages" id="age" placeholder="Enter your age"><br><br>
        Weight<br>
        <input type="text" name="weights" id="weight" placeholder="Enter your weight"><br><br>
        Allergy/ Diseases if any:<br>
        <textarea id="allergy" rows="3" cols="70" name="allergys" id="allergy"></textarea><br><br>
        <input type="submit" id="sub" name="submit"><br><br><br><br>
        
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