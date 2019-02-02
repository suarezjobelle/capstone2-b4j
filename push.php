<?php

include 'core/init.php';
?>
<?php  $myrow = $connect->fetch_data("Menu_list");
    foreach($myrow as $rows){   ?> 
    <input type="checkbox" name="channcost[]" value="<?php echo $rows['menu_price']?>" onClick="test();" /><?php echo $rows['menu_price']?><br />
<!--     <input type="checkbox" name="chanlcost" value="20" onClick="test();" />20 <br />
    <input type="checkbox" name="chancost" value="40" onClick="test();" />40 <br />
    <input type="checkbox" name="chanlcost" value="60" onClick="test();" />60 <br /> -->
    </div>

    <?php } ?>
        <button type="button" onclick="myClick()" >Click me</button>
<script type="text/javascript">
var selected = new Array();
function myClick(){
$(document).ready(function() {
  $("input:checkbox[name=channcost]:checked").each(function() {
       selected.push($(this).val());
       	  alert(selected);
  });

});
}
</script>