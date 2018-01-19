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
}
?>