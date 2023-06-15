<?php
//------------------------------------------------------------------------------
                    //--------INSCRIPTION---------------
//------------------------------------------------------------------------------
// require_once 'login.php';
//On recupere les input HTML 
$name = $_POST['user_name'];
$email = $_POST ['user_email'];
$phone = $_POST['user_phone'];
// $password = $_POST ["password"];
// $siret = $_POST ["siret"];
// $adress = $_POST ["adress"];
// $codePostal = $_POST ["codePostal"];
// $city = $_POST ["city"];
//! reste les autre input du formulaire d'inscription
echo $name;
//On crypt le MDP avant de L'envoyer sur la BDD (dernier hash sorti)
// $crypt_password = password_hash($password, PASSWORD_ARGON2ID);

//conexion a la BDD Mysql
// on creer un  nouvel object de conexion $pdo
//? voir les opts???
//? gestion des erreur avec TRY et CATCH????
// $pdo = new PDO($attr, $user, $pass, $opts);

$pdo = new PDO('mysql:host=localhost;dbname=laruchedesproducteurs','root','root');

// on prepare la requete, (ressemble au GIT ADD et GIT COMMIT) les ??? pour eviter les injection SQL
$req = $pdo->prepare("INSERT INTO inscription (name, email, phone) VALUES (?, ?, ?)");
// on envoie ( GIT PUSH )
$req->execute([
    $name,
    $email,
    $phone,
    // $password,
    // $siret,
    // $adress,
    // $codePostal,
    // $city
]);

// on creer une table dans la base de donnée

// $query = "CREATE TABLE inscription (
//     id SMALLINT NOT NULL AUTO_INCREMENT,
//     name VARCHAR NOT NULL,
//     email VARCHAR NOT NULL
//     phone INT(10) NOT NULL,
//     password VARCHAR(8) NOT NULL,
//     siret INT(14) NOT NULL,
//     adress VARCHAR NOT NULL,
//     codePostal INT(5) NOT NULL,
//     city VARCHAR NOT NULL,
//     )";


//------------------------------------------------------------------------------
                    //--------VERIFY PASSWORD---------------
//------------------------------------------------------------------------------

// verification des mot de passe $password entrer par l'utilisateur (input) 
//et $crypt_password MDP Crypter sur la BDD
// if (password_verify($password, $crypt_password)) {
//     echo 'Le mot de passe est valide !';
// } else {
//     echo 'Le mot de passe est invalide.';
// }

?>