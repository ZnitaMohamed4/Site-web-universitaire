
    <?php 
 
    function login_delegue(){


    $conn = mysqli_connect("localhost",'root','','our_project') ; 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_delegue'])) {
        $Email = $_POST['email'];
        
        $sql = "SELECT * FROM etudiants_delegues WHERE email_insti= '$Email' ";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            if (mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                $id_delegue = $row['id_delegue'];
               

                header("Location: espace_delegue.php?id_delegue=$id_delegue&email=$Email");
                exit();
            } else {

                ?>
                <script>
                    alert("Identifiants incorrects") ; 
                </script>
<?php  

echo '<h1> Identifiants incorrects </h1>';
            }
        } else {
            echo "Erreur de requête : " . mysqli_error($conn);
        }
    }


}
login_delegue(); 

?>

    
    <!-- // section footer // -->
</body>

</html>
