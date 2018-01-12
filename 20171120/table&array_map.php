<?php
  $data=array(
      array("Volvo",22,18),
      array("BMW",15,13),
      array("Saab",5,2),
      array("Land Rover",17,15)
  );
?>
<table border="1">
    <?php
        echo"<tr><th>Name</th><th>Stock</th><th>Sold</th></tr>";
        for($i=0;$i<count($data);$i++){
            echo"<tr>";
            for($j=0;$j<count($data[$i]);$j++){
                echo"<td>".$data[$i][$j]."</td>";          
            }
            echo"</tr>";
        }     
    ?>    
</table><br/>
<table border="1">
    <?php
        echo"<tr><th>Name</th><th>Stock</th><th>Sold</th></tr>";
        foreach($data as $key=>$value){
           echo"<tr>";
           foreach($data[$key] as $subkey=>$subval){
            echo"<td>$subval</td>";
           }
           echo "</tr>";
        }
    ?>    
</table><br/>

<?php
function td($str){
    return '<td>'.join('</td><td>',$str).'</td>';
}
$result1=array_map("td",$data);
$result=join("</tr><tr>",$result1);
?>
<table border="solid">
     <tr><th>Name</th><th>Stock</th><th>Sold</th></tr>
     <tr><?php echo $result;?></tr>
</table>


 