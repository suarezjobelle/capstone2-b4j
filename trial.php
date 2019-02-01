<?php
include 'core/init.php';
$connect = new MainFunction();
 $recNew = $connect->fetch_data("Menu_list");

echo "<table>\n";
foreach ($recNew as $values) // For every field name (id, name, last_name, gender)
{

	echo $values['menu_price'];
    // echo "<tr>\n"; // start the row
    // // echo "\t<td style='color:red'>" . $key . "</td>\n" ; // create a table cell with the field name
    //     foreach ($values as $cell => $name) // for every sub-array iterate through all values
    //     {
    //        echo "\t<td>" . $name[] . "</td>\n"; // write cells next to each other

    //     }
    // echo "</tr>\n"; // end row

}

echo "</table>";
?>