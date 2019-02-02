<?php

include 'core/init.php';
?>
<?php
// include 'core/init.php';
// $connect = new MainFunction();
//  $recNew = $connect->fetch_data("Menu_list");

// echo "<table>\n";
// foreach ($recNew as $values) // For every field name (id, name, last_name, gender)
// {

// 	echo $values['menu_price'];
    // echo "<tr>\n"; // start the row
    // // echo "\t<td style='color:red'>" . $key . "</td>\n" ; // create a table cell with the field name
    //     foreach ($values as $cell => $name) // for every sub-array iterate through all values
    //     {
    //        echo "\t<td>" . $name[] . "</td>\n"; // write cells next to each other

    //     }
    // echo "</tr>\n"; // end row

// }

// echo "</table>";
?>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <div id="container">

<table>
  <input type="text" id="chatinput" class="form-control" onchange="myFunction()" value="1"><br />
  Total Amount :
 
    <input type="text" id="Totalcost3" >
  <tr>
    <th>id</th>
    <th>name</th>
    <th>price</th>
  </tr>
 <form method="post" id="order_id">
<?php  $myrow = $connect->fetch_data("Menu_list");
    foreach($myrow as $rows){   ?> 
     <tr> 
    <td> <p><?php echo $rows['id']?></p></td>
    <td> <p><?php echo $rows['menu_name']?></p></td>

      <td><input type="checkbox" name="menu[]" value="<?php echo $rows['menu_price']?>" onClick="test();" /></td><br />
    </tr>
<?php } ?>

<input type="submit" name="order" id="order" value="Order" class="btn btn-success" />
</form>
</table>
      </div>
    
 
<!-- <body>
<div class="container">
	<input type="checkbox" class="chk" value="DOG">A <br>
	<input type="checkbox" class="chk" value="CAT">B <br>
	<input type="checkbox" class="chk" value="BUNNY">C<br>

	<a href="" onclick="getValue();return false;">GET</a>

	<script>
		function getValue(){
			var checks = document.getElementsByClassName('chk');
			var str  = '';


			for (var $i = 0; $i < 3; $i++) {
				if (checks[$i].checked === true) {
					str += checks[$i].value + ",";
				}
			}
			alert(str);
		}
	</script>
</div> -->
<script type="text/javascript">
  function test(){
  $('input[type=checkbox]').click(function() {
  inputBox = parseFloat($('#chatinput').val());
  total = 0;

  inputBox1 = parseFloat($('#chatinput').val());
  totalcd = 0;
  $('#container input[type=checkbox]').each(function() {
    if ($(this).prop('checked')) {
      total = total + thisValue;

      thisValue = parseFloat($(this).val());
    }
  });

  $('#container1 input[type=checkbox]').each(function() {
    if ($(this).prop('checked')) {
      thisValue = parseFloat($(this).val());
      totalcd = totalcd + thisValue;
    }
  });


  $("#Totalcost3").val(inputBox * total + totalcd);
});
}
</script>

<!-- <script> 

$(document).ready(function(){
 $('#order_id').on("submit",function(event){  
    event.preventDefault();   
   $.ajax({  
    url:"core/ajax/insert_order.php",  
    method:"POST",  
    data:new FormData(this),
    processData:false,
    cache:false,
    contentType:false,
    beforeSend:function(){  
     $('#order').val("Ordered");  
    },  
    success:function(data){  
     $('#order_id')[0].reset();  
     // $('#order').modal('hide');  
     alert(data);
    },error:function(data){
      alert(data);
    } 

   });   
   
 });
 $(".order_name").on('click',function(){
    var id = $(this).data('order_id');
    var value = $(this).val();
    var price = $(this).data("price");
    $("#"+id).val(price);
    alert(value + " " + price);
 });
});  
 </script> -->
</body>
</html>
<!-- new FormData(this),
    processData:false,
    cache:false,
    contentType:false, -->


