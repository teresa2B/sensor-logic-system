<?php
	require 'config.php';
    include_once'QueryVisualizzaUtente.php';
	session_start();
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $conn = new mysqli($servername, $user, $pass, $database);
    $query = sprintf("SELECT * FROM credenziale where email='%s' and password='%s'",mysqli_real_escape_string($conn, $email),mysqli_real_escape_string($conn, $password));
    $result = $conn->query($query);
    if($result === false || $result->num_rows != 1){
    	    header('Location: http://sensorlogicsystemlogin.altervista.org/index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title></title>
  <link href="adminDesktop.css" media="only screen and (min-width: 401px)" rel="stylesheet" type="text/css">
  <link href="adminMobile.css" media="only screen and (max-width: 400px)" rel="stylesheet" type="text/css">
</head>
<body>
	<br />
	<span class="visClient">Visualizza Clienti</span>
    <br /><br />
      <div class="contenitoreFiltri">
      	<form class="form"  action="visualizzaClienti.php" method="post">
                <?php
        include_once 'Layout.php';
          $layoutS= new Layout();
          echo $layoutS-> layoutSearch($id, $nome, $cognome, $email, $citta);
          ?>
                    <?php
                    	require 'config.php';
                        
                        $id=$_POST['id'];
                        $nome=$_POST['nome'];
                        $cognome=$_POST['cognome'];
                        $email=$_POST['email'];
                        $citta=$_POST['città'];
                        
                        $query = sprintf("select * from utente inner join credenziale on id=utente where permesso='u'");
                       	$visualcli= new QueryVisualizzaUtente();
                        $query= $visualcli-> visualizzaut($query, mysqli_real_escape_string($conn, $id),mysqli_real_escape_string($conn, $nome),mysqli_real_escape_string($conn, $cognome), mysqli_real_escape_string($conn, $email), mysqli_real_escape_string($conn, $citta));
                  
                       	$conn = new mysqli($servername, $user, $pass, $database);
                        $result = '';
                        if(isset($_SESSION['email']) === true && isset($_SESSION['password']) === true ) {
                        	$result = $conn->query($query);
                        }  
                        
                        $tabquery= new QueryVisualizzaUtente();
                        $result= $tabquery->tablequery($result);
                    ?>
                </tbody>
            </table>
           </div>
         </form>
      </div>
</body>
</html>
