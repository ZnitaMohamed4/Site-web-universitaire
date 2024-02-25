<?php 
/**
 * ####################################################################
 *  cette page pour verifier est que les email et mot de pass correct ou none 
 * ####################################################################
 */

function verifLogin($email, $pass){
    $conn = mysqli_connect('localhost','root','','our_project') ; 
    $req = "SELECT * FROM etudiants";
    $res = mysqli_query($conn, $req);  // Utiliser $this->conn au lieu de $conn
    $bo = false;  // Correction du mot-clé false
    while ($donne = mysqli_fetch_assoc($res)) {
        if ($email == $donne['email_insti'] && $pass == $donne['password']) {
            $bo = true;
            break;
        }
    }
        if ($bo) {
            
                    header("Location: etud.php");                                                                  
                    exit();  
        
        }  
        else {   
           
             header("Location: form_log.php");                                                                  
             exit();
          
           
                 
               
              }
        
      }
       

$email_ex = $_POST['email_exist'] ; 
$pass_ex = $_POST['pass_exist'] ; 

verifLogin($email_ex , $pass_ex) ; 

if(verifLogin($email_ex , $pass_ex)){
    
} 
?>

