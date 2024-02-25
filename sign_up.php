<?php
// Classe Connexion
class Connexion {
    private $host;
    private $database;
    private $username;
    private $password;
    protected $conn;

    public function __construct($host, $username, $database, $password) {
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;

        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);

       
    }
}

// Classe CRUD
class CRUD extends Connexion {
    public function __construct($host, $username, $database, $password) {
        parent::__construct($host, $username, $database, $password);
    }

    // Fonction de ajouter des etudiants 
    public function ajouter($CNE, $name, $prenom, $email, $pass, $filiere) {
        $sql = "INSERT INTO `etudiants_en_attende` (`email_insti`, `CNE`, `nom_etudiant`, `prenom_etudiant`, `password`, `nom_filiere`) VALUES (?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        // $stmt->execute(array($email, $CNE, $name, $prenom, $pass, $filiere)) ; 
        try {
           
            $stmt->execute(array($email, $CNE, $name, $prenom, $pass, $filiere));
            ?>
          
            <?php
            header("location: form_log.php");  // je doit modifier pour chaque page d'etudiant 
            exit(); 
            
          
        } catch (Exception $e) {
           ?>
           <script>
            alert("authentification incorrect !!") ; 
           </script>
           <?php
           
           
        }
    
    }

  

    }
class login extends Connexion {
    public function __construct($host, $username, $database, $password) {
        parent::__construct($host, $username, $database, $password);
    }
   
}    

$obj = new CRUD('localhost', 'root', 'our_project', '');

$CNE = $_POST['CNE'];
$name = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$filiere = $_POST['filiere'];

 $obj->ajouter($CNE, $name, $prenom, $email, $pass, $filiere);










?>
<?PHP 

