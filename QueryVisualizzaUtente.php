<?php
class QueryVisualizzaUtente{
	function visualizzaut($query, $id, $nome, $cognome, $email, $citta){
    					
    	 				
                        if(!empty($id)) {
                        	$query = $query.sprintf(" and id = '%s'");
                        }
                        if(!empty($nome)){
                           	$query = $query.sprintf(" and nome = '%s'");
                        }
                        if(!empty($cognome)){
                           	$query = $query.sprintf(" and cognome = '%s'");
                        }
                        if(!empty($email)){
                           	$query = $query.sprintf(" and email = '%s'");
                        }
                        if(!empty($citta)){
                           	$query = $query.sprintf(" and citta = '%s'");
                        }
                         $query=$query.sprintf(' order by utente.id');
         return $query;
    }
}
?>