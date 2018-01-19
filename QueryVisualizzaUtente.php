<?php
class QueryVisualizzaUtente{
	function visualizzaut($query, $id, $nome, $cognome, $email, $citta){
    					
    	 				
                        if(!empty($id)) {
                        	$query = $query.sprintf(" and id = '%s'",$id);
                        }
                        if(!empty($nome)){
                           	$query = $query.sprintf(" and nome = '%s'", $nome);
                        }
                        if(!empty($cognome)){
                           	$query = $query.sprintf(" and cognome = '%s'",$cognome);
                        }
                        if(!empty($email)){
                           	$query = $query.sprintf(" and email = '%s'", $email);
                        }
                        if(!empty($citta)){
                           	$query = $query.sprintf(" and citta = '%s'",$citta);
                        }
                         $query=$query.sprintf(' order by utente.id');
         return $query;
    }
    function tablequery($result){
    for($i=0; $i<$result->num_rows; $i++) {
                        	$row=mysqli_fetch_row($result);
                            $str='';
                        	$str = '<tr>';
                            $str = $str.'<td>'.htmlspecialchars($row[0]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[1]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[3]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[2]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[13]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[5]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[7]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[8]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[9]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[11]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[10]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[6]).'</td>';
                            $str = $str.'<td>'.htmlspecialchars($row[4]).'</td>';
                            $str = $str.'</tr>';
                            echo $str;
                        }
    }
}
?>