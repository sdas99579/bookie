<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <?php  include 'connection.php';?>
</head>
<body style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/c.jpg);">


<style>

                
        body {
  font-family: "Lato", sans-serif;
}

.bgimg{
     background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.5)) , url(../img/f.jpg);
    background-position: center;
    background-size:cover;
    height:60vh;
    width:100%;
}


    .sidebar {
  height:100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top:0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.top-left {
   position: absolute;
  top: 8px;
  left: 16px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

.fab{
    padding:12px;
}

.fab:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-snapchat {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}


    </style>


    <div>
    <!-- <img src="img/w.jpg" class="bgimg"> -->
    <div id="main" class="top-left">
        <button class="openbtn" onclick="openNav()">☰ Menu</button> 
    </div>
</div><br><br><br>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="profile.php"> My profile </a>
  <a href="mybooks.php"> Mybooks </a>
  <a href="sellbooks.php"> Sell Books </a>
  <a href="viewbooks.php">Viewbooks</a>
  <a href="myorder.php">Myorder</a>
  <a href="mycart.php"><i class="fas fa-cart-arrow-down"></i>   Mycart</a>
  
  <a href="gallery.php"><i class="far fa-image"></i>   Gallery </a>
  <a href="logout.php"><i class="fas fa-power-off"></i>  Logout</a>
  <a href="about.php"><i class="fas fa-info-circle"></i>  About us</a>
</div>


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

    <div class="center text-center">

        <br><h1 class="container text-white" style=""> MY PROFILE</h1><br></div>
        <section>
            <div class="container" style="background-color:#AED6F1; padding-top:2%; padding-bottom: 1%; width: 100%; text-align:left; border-radius:10px;">
                
                <h1 class="text-center"> Name:- SOURAV DAS </h1>

            </div>
            <br><br>
        </section>



<!--         <div class="container" style="background-color:#85C1E9; width: 100%; text-align:left; border-radius:10px; padding-top: 10px;"> -->

<!--           <div style="width: 50%; margin-left:20%;">

            <h5 style="padding-top:10px; padding-bottom: 10px;"> Phone No:- 9101131735 </h5>
            <h5 style="padding-top:10px; padding-bottom: 10px;"> Email:- sourav_m200722ca@nitc.ac.in </h5>
            <h4 style="padding-top:10px; padding-bottom: 10px;"> Address </h4>
            <h5 style="padding-top:10px; padding-bottom: 10px; margin-left:80px;"> Vill/Town:- Ambagan </h5>
            <h5 style="padding-top:10px; padding-bottom: 10px; margin-left:80px;"> House No:- 206 </h5>
            <h5 style="padding-top:10px; padding-bottom: 10px; margin-left:80px;"> Dist:- Nagaon </h5>
            <h5 style="padding-top:10px; padding-bottom: 10px; margin-left:80px;"> PIN:- 782120 </h5>
          </div> -->


            
<!--         </div>  -->




<!--         </section> -->

<!--     </div> -->


<div class="container">
    

    <div class="d-flex">
        <div class="p-2 flex-fill" style="background-color:#A9CCE3;border-radius:10px;">

            <h5 style="padding-top:10px; padding-bottom: 10px; margin-right:20%"> Phone No:- 9101131735 </h5>
            <h5 style="padding-top:10px; padding-bottom: 10px;"> Email:- sourav_m200722ca@nitc.ac.in </h5>
            <h4 style="padding-top:10px; padding-bottom: 10px; margin-right:38%"> Address </h4>
            <h5 style="padding-top:10px; padding-bottom: 10px; margin-left:10px;"> Vill/Town:- Ambagan </h5>
            <h5 style="padding-top:10px; padding-bottom: 10px; margin-left:10px;"> House No:- 206 </h5>
            <h5 style="padding-top:10px; padding-bottom: 10px; margin-left:10px;"> Dist:- Nagaon </h5>
            <h5 style="padding-top:10px; padding-bottom: 10px; margin-left:10px;"> PostOffice:-  </h5>
            <h5 style="padding-top:10px; padding-bottom: 10px; margin-left:10px;"> PIN:- 782120 </h5>


        </div>


         <div class="p-2 flex-fill" style="background-color:#A9CCE3;border-radius:10px; " >
             
             <img src="../college/img/c.jpg" style="height:200px;width:200px; margin-top:10%; margin-left:40%">

         </div>
    </div>

</div>








    
</body>
</html>