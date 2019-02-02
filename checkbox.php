<?php

include 'core/init.php';
?>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  
	
  </head>
  <body>

   <form name="listForm" id="order_id"> 
   	<table border="1">
   		<tr>
   			<th>Menu Name</th>
   			<th>Menu Price</th>
   			
   		</tr>
   
   	<?php  $myrow = $connect->fetch_data("Menu_list");
    foreach($myrow as $rows){   ?> 


<tr>
	<td><input type="text" name="menu[]" id="menu" value="<?php echo $rows['menu_name']?>"></td>
   <td>	<input type="checkbox" name="choice[]" id="choice" value="<?php echo $rows['menu_price']?>" onchange="checkTotal()"/><?php echo $rows['menu_price']?></td>
   	
</tr>
<?php } ?>
   <!-- 	<input type="checkbox" name="choice" value="10" onchange="checkTotal()"/>10<br/> 
   	<input type="checkbox" name="choice" value="20" onchange="checkTotal()"/>20<br/>  -->

   	Total: <input type="text" size="2" name="total" value="0"/> 
	</table>
	       <input type="submit" name="order" id="order" value="Order" class="btn btn-success" />
      
   </form>

  <script type="text/javascript">
   function checkTotal() { 
   	document.listForm.total.value = ''; var sum = 0; 
   	for (i=0;i<document.listForm.choice.length;i++) { 
   	if (document.listForm.choice[i].checked) { 
   	sum = sum + parseInt(document.listForm.choice[i].value); 
   		} 
	} 

for (z=0;z<document.listForm.menu.length;z++) { 
   	if (document.listForm.menu[i].checked) { 
   	// sum = sum + parseInt(document.listForm.menu[i].value); 
   		} 
	} 
} 

</script>
<script> 
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
 </script>	
  </body>
</html>