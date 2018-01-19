<?php
class Tablepdf{

	function table_pdf($query, $date){
   	require 'config.php';
	$conn = new mysqli($servername, $user, $pass, $database);
    	$result = $conn->query($query);

		$data = array();
		for($i=0; $i<$result->num_rows; $i++) {
			$row=mysqli_fetch_row($result);
              if(empty($date)===false){
                  $data1=substr($date,0,4).substr($date,5,2).substr($date,8,2);
                  $data2=substr($row[1],0,4).substr($row[1],4,2).substr($row[1],6,2);
                  if($data1===$data2){
                      $data[$i] = array($row[0], substr($row[1],0,4).'-'.substr($row[1],4,2).'-'.substr($row[1],6,2), substr($row[1],8,2).':'.substr($row[1],10,2), substr($row[1],12), $row[2], $row[3], $row[4], $row[5]);
                  }
              } else {
                  $data[$i] = array($row[0], substr($row[1],0,4).'-'.substr($row[1],4,2).'-'.substr($row[1],6,2), substr($row[1],8,2).':'.substr($row[1],10,2), substr($row[1],12), $row[2], $row[3], $row[4], $row[5]);
              }
      }return $data;
    }
}
?>