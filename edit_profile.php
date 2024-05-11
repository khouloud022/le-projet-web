<?php
session_start(); 
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "projet";

try {
    $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['new-name']) && isset($_POST['new-email'])) {
        $newName = $_POST['new-name'];
        $newEmail = $_POST['new-email'];
        $newdate = $_POST['new-date'];
        $newregion = $_POST['new-region'];
        $stmt = $conn->prepare("UPDATE utilisateurs SET nom = :nom, email = :email, date_de_naissance = :date_de_naissance, region = :region WHERE email = :session_email");
        $stmt->bindParam(':nom', $newName);
        $stmt->bindParam(':email', $newEmail);
        $stmt->bindParam(':date_de_naissance', $newdate);
        $stmt->bindParam(':region', $newregion);
        $stmt->bindParam(':session_email', $_SESSION['email']);
        $stmt->execute();
        header("Location: profile.php");
        exit();
    }
}
?>
