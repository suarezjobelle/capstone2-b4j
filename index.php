<?php 
include 'includes/header.php';
 include_once 'core/ajax/modal.php';
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
    <a class="nav-link" href="#about">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#menu">Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#gallery">Gallery</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#news">News</a>
  </li>
   <li class="nav-item">
    <a class="nav-link active" href="">Order Online</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#cancel">Cancel Reservation</a>
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
       <button type="button" class="btn btn-success" id="btnres" data-toggle="modal" data-target="#add_data_Modal">
 Book a table
</button>
         </form>
      </div>
    </div>
  </div>
</section>


<!--  <hr style="border-top: 1px solid white;"> -->
<!--About Content-->
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
	</div>
</div>
</section>
 <hr style="border-top: 1px solid black;">
<!--gallery Content-->
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
  <hr style="border-top: 1px solid black;">
<!--Menu Content-->
  <section id="menu">
<div class="section-content">
      <center><h1>OUR MENU</h1></center>
<div class="toolbar mb2 mt2 justify-content-center">
  <button class="btn fil-cat" href="" data-rel="fil">Filipino</button>
  <button class="btn fil-cat" data-rel="indian">Indian</button>
  <button class="btn fil-cat" data-rel="app">Appetizer</button>
  <button class="btn fil-cat" data-rel="soup">Soups</button>
</div> 
  
<div id="portfolio">
  <div class="lightbox fil ">
        <img src="./assets/image/karekares.jpg" alt="" />
  </div>
  <div class="lightbox fil mt-1">
    <img src="./assets/image/bicol.jpg" alt="" />
  </div>
  <div class="lightbox  fil mt-1">
    <img src="./assets/image/chopsuey.jpg" alt="" />
  </div>
  <div class="lightbox indian mt-1">
            <img src="./assets/image/biryani.jpg" alt="" />
  </div>
  <div class="lightbox fil soup mt-1">
        <img src="./assets/image/bulalo.jpg" alt="" />
  </div>
  <div class="lightbox app mt-1">
            <img src="./assets/image/grilled.jpg" alt="" />
  </div>
   <div class="lightbox app mt-1">
    <img src="./assets/image/potato salad.jpg" alt="" />
  </div>
  <div class="lightbox fil soup mt-1">
        <img src="./assets/image/sinigang.jpg" alt="" />
  </div>
  <div class="lightbox app mt-1">
           <img src="./assets/image/corn.jpg" alt="" /> 
  </div>
  <div class="lightbox app mt-1">
        <img src="./assets/image/taco.jpg" alt="" />
  </div>
  <div class="lightbox indian mt-1">
            <img src="./assets/image/tikka.jpg" alt="" />
  </div>
  <div class="lightbox fil mt-1">
            <img src="./assets/image/lechon.jpg" alt="" />
  </div>
</div>
          </div>
        </section>   

 <section id="news">
    <div class="section-content">
      <div class="container">
        <h3>Latest News</h3>
        <h2><b>Keep visiting our website for more hot news about B4J!</b></h2>
        
        <hr style="border: 1px solid black;">
        <div class="row">
          <div class="col-md-12">
            <div class="card-columns">
              <!--1st card--->
              <div class="card">
                <img src="./assets/image/burger.jpg" alt="">
                <div class="card-body">
                  <h5 class="card-title">
                      Chilliest Burger is now available!!
                  </h5>
                </div>
              </div>
              <!--2nd Card-->
               <div class="card p-3">
                <blockquote class="blockquote mb-0 card-body">
                   <img src="./assets/image/hire.jpeg" class="card-image-top img-fluid" alt="protect"><br><br>
                   <h5 class="card-title">
                      B4J is now hiring!
                  </h5>
                   <footer class="blockquote-footer">
                    <small class="text-muted">
                      Jobelle Suarez
                    </small>
                     
                   </footer>
                </blockquote>
              </div>
                 <!--3rd Card-->
               <div class="card">
                <img src="./assets/image/band.jpg" alt="windows">
                <div class="card-body">
                  <h5 class="card-title">
                      B.A.D Band Will perform with us!
                  </h5>
                  <p class="card-text"> 
                      <small class="text-muted">
                        Febuary 1,2019
                      </small>
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>   
</body>
<?php include 'includes/footer.php'?>