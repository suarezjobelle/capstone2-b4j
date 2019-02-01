
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>B4J</title>
    <link rel="shortcut icon" href="./assets/image/icon.jpg">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- / CSS -->
  </head>
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" ></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
  <!-- /fonts -->
  <!-- script -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script><!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 -->   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <script type="text/javascript">
    	$(function () {
  $(document).scroll(function () {
	  var $nav = $(".container-nav");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	});
});
    </script>
    <script type="text/javascript">
    	$('#exampleModal').on('show.bs.modal', function (event) {
});
    </script>
     <script type="text/javascript">
    	$('#cancel').on('show.bs.modal', function (event) {
});
    </script>
 <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
  <!--   Filter Reservation Table -->
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!--   /Filter Reservation Table -->
<!--   Filter Menu Table -->
<script>
$(document).ready(function(){
  $("#myMenu").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!--   /Filter Menu Table -->
<!--   Filter Product Table -->
<script>
$(document).ready(function(){
  $("#myProduct").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!--   /Filter Product Table -->
<!-- Isotope gallery -->
<script>
 $(function() {
    var selectedClass = "";
    $(".fil-cat").click(function(){ 
    selectedClass = $(this).attr("data-rel"); 
     $("#portfolio").fadeTo(100, 0.1);
    $("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('scale-anm');
      $("#portfolio").fadeTo(300, 1);
    }, 300); 
    
  });
});
</script>
<!--/ script -->
</html>