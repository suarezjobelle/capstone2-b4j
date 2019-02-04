<?php 
session_start();
include 'includes/header.php';
include_once 'core/ajax/modal.php';
$id_user = $_SESSION['id_user'];
// echo $id_user;
?>
<body>
<!--Home Content-->
<section id="cover">
  <div id="cover-caption">
 <!-- nav -->
<nav class="navbar navbar-expand-lg container-nav fixed-top">
  <a class="navbar-brand ml-4" href="#"><img src="./assets/image/icon.jpg" width="130px" height="90px" style="border-radius: 50%;"></a>
  <button class="navbar-toggler btn btn-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
<ul class="nav justify-content-center" >
  <li class="nav-item">
    <a class="nav-link active" href="#cover">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#menu">Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#gallery">Gallery</a>
  </li>
     <li class="nav-item">
    <a class="nav-link" href="#about">About</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="" data-toggle="modal" data-target="#order">Order Online</a>
  </li>
  <li class="nav-item">
 <div class="dropdown show">
  <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i>Welcome, <?php $connect->get_user($id_user);?></i>
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="./includes/user_logout.php">Logout</a>
  </div>
</div>

  </li>
</ul>
  </div>
</nav>
  <!-- /nav -->
    <div class="container">
      <div class="row">
       <div class="col-sm-12">
        <h1>WELCOME TO B4J</h1>
        <h4 style="color:black"><b>"Growing up in a very big family, working together and playing together, that is something that has been part of my life since ever I was born. It has advantages and disadvantages. It's like an older style of living where everyone works in the family business."</b></h4>
         <form action="" class="form-horizontal justify-content-center">
      <!--  <button type="button" class="btn btn-success" id="btnres" data-toggle="modal" data-target="#add_data_Modal">
 Book a table
</button> -->
         </form>
      </div>
    </div>
  </div>
</section>


<!--Menu Content-->
  <section id="menu">
<div class="section-content">
      <center><h1>OUR MENU</h1></center>
<div class="toolbar mb2 mt2 justify-content-center">
  <button class="btn fil-cat" href="" data-rel="fil">Filipino Dish</button>
  <button class="btn fil-cat" data-rel="indian">Indian Dish</button>
  <button class="btn fil-cat" data-rel="app">Appetizers</button>
  <button class="btn fil-cat" data-rel="soup">Soups</button>
</div> 
  
<div id="portfolio">
  <div class="lightbox fil ">
        <img src="./assets/image/karekares.jpg" alt="" />
  </div>
  <div class="lightbox fil mt-1">
            <img src="./assets/image/lechon.jpg" alt="" />
  </div>
  <div class="lightbox fil mt-1">
    <img src="./assets/image/bicol.jpg" alt="" />
  </div>
  <div class="lightbox  fil mt-1">
    <img src="./assets/image/chopsuey.jpg" alt="" />
  </div>
  <div class="lightbox fil soup mt-1">
        <img src="./assets/image/sinigang.jpg" alt="" />
  </div>
  <div class="lightbox fil soup mt-1">
        <img src="./assets/image/bulalo.jpg" alt="" />
  </div>

   <div class="lightbox soup mt-1">
            <img src="./assets/image/nilagang-baboy.jpg" alt="" />
  </div>
   <div class="lightbox indian mt-1">
            <img src="./assets/image/biryani.jpg" alt="" />
  </div>
  <div class="lightbox indian mt-1">
            <img src="./assets/image/grilled.jpg" alt="" />
  </div>
   <div class="lightbox indian mt-1">
            <img src="./assets/image/tikka.jpg" alt="" />
  </div>
   <div class="lightbox app mt-1">
    <img src="./assets/image/potato salad.jpg" alt="" />
  </div>
 
  <div class="lightbox app mt-1">
           <img src="./assets/image/corn.jpg" alt="" /> 
  </div>
  <div class="lightbox app mt-1">
        <img src="./assets/image/taco.jpg" alt="" />
  </div>
 

</div>
          </div>
            <hr style="border-top: 1px solid black;">
        </section>  
<!--  <hr style="border-top: 1px solid white;"> -->

<section id="gallery">
<div class="section-content">
  <div class="container">
    <div class="container gallery-container">
    <h1>GALLERY</h1>
<b style="text-align: center;">Come and Taste Delicious Food in B4J</b>
    <div class="tz-gallery">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="assets/image/gallery1.jpg">
                    <img src="./assets/image/gallery1.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="./assets/image/gallery2.jpg">
                    <img src="./assets/image/gallery2.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="./assets/image/gallery3.jpg">
                    <img src="./assets/image/gallery3.jpg" alt="Tunnel">
                </a>
            </div>
             <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="./assets/image/gallery4.jpg">
                    <img src="./assets/image/gallery4.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="./assets/image/gallery5.jpg">
                    <img src="./assets/image/gallery5.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="./assets/image/gallery6.jpg.jpg">
                    <img src="./assets/image/gallery6.jpg" alt="Tunnel">
                </a>
            </div>
             <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="./assets/image/gallery7.jpg">
                    <img src="./assets/image/gallery7.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw1sKYNqLrELKAIpYjVU8PX52LO-lQi-sn789BwZFPGPd3XlxM">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw1sKYNqLrELKAIpYjVU8PX52LO-lQi-sn789BwZFPGPd3XlxM" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="./assets/image/gallery8.jpg">
                    <img src="./assets/image/gallery8.jpg" alt="Tunnel">
                </a>
                     </div>
                </div>
             </div>
        </div>
    </div>
  </div>  
</section>
 
<!--About Content-->
<hr style="border-top: 1px solid black;">
<section id="about">
	<div class="section-content">
	<div class="container">
				<h3>ABOUT</h3>
  <div class="row">
  	    <div class="col mt-5">
      <h5 class="mt-0">Chef Johnnielson Suarez</h5>
    <b>The head chef, the man behind the success of B4J , a very hardworking man that believes in fil the small things in the beginning may lead us to a bigger future</b><br><br>
    <b>"Do not be so quick to judge or label, for one day the objects of ridicule may become what they are ever so used to being seen as. And when this <br>happens it is too late, another soul has ffilen to the cruel persecution of todays society and become what they are seen as instead of who they refily are. A person, just like everyone else."</b>
    	</div>
    		<div class="col">
     <img src="./assets/image/chef.jpg">
    		</div>
  		</div>

  		 <div class="row">
    		<div class="col">
     <img src="./assets/image/reserve.jpg">
    		</div>
    		  	    <div class="col mt-5">
      <h5 class="mt-0">Our Story, B4J</h5>
    
    <b>"Do not be so quick to judge or label, for one day the objects of ridicule may become what they are ever so used to being seen as. And when this <br>happens it is too late, another soul has ffilen to the cruel persecution of todays society and become what they are seen as instead of who they refily are. A person, just like everyone else."</b>
    	</div>
  		</div>
	</div>
</div>
</section>
 
<!--gallery Content-->

</body>
<?php include 'includes/footer.php'?>