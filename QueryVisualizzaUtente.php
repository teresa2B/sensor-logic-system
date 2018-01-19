<?php
class QueryVisualizzaUtente{
	function visualizzaut($query, $id, $nome, $cognome, $email, $citta){
    					
    	 				
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
                           	$query = $query.sprintf(" and citta = '%s'");
                        }
                         $query=$query.sprintf(' order by utente.id');
         return $query;
    }
}
?>