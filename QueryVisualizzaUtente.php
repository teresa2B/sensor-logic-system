<?php
class QueryVisualizzaUtente{
	function visualizzaut($query, $id, $nome, $cognome, $email, $citta){
    					require 'config.php';
						$conn = new mysqli($servername, $user, $pass, $database);
    	 				
                        if(!empty($id)) {
                        	$query = $query.sprintf(' and id = '.$id);
                        }
                        if(!empty($nome)){
                           	$query = $query.sprintf(" and nome = '".$nome."'");
                        }
                        if(!empty($cognome)){
                           	$query = $query.sprintf(" and cognome = '".$cognome."'");
                        }
                        if(!empty($email)){
                           	$query = $query.sprintf(" and email = '".$email."'");
                        }
                        if(!empty($citta)){
                           	$query = $query.sprintf(" and citta = '%s'", mysqli_real_escape_string($conn, $citta));
                        }
                         $query=$query.sprintf(' order by utente.id');
         return $query;
    }
}
?>