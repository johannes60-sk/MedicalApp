<?php

require_once('./class/ConnectDB.php');
require_once('./class/DatabaseAuth.php');
require_once('./class/Validator.php');

// Contrôleur pour récupérer les données d'un patient
function getPatientController()
{
    // Traitement des données envoyées par l'utilisateur
    $_POST = json_decode(file_get_contents('php://input'), true);

    $numero_securite_social = $_POST['numero_securite_social'];

    $hopital_name = $_POST['hospital_name'];

    $db = new ConnectDB($hopital_name);

    $patient = new DatabaseAuth($db);

    $patientAuth = $patient->login($numero_securite_social);

    if(!$patientAuth){
        $db = new ConnectDB('projet_ppe_bd');

        $patient_appli = $db->query("SELECT * FROM patients WHERE(numero_securite_social = :numero_securite_social)",
                                    ['numero_securite_social' => $numero_securite_social])->fetch();

       if($patient_appli){

            $response = [
                'message' => "Utilisateur connecte a la BD de l'application",
                'numero_securite_social' => $patient_appli['numero_securite_social']
            ];

            // echo "<span style='color:green'>Enregistrement du patient reussir</span>";

            // Affichage de la réponse au format JSON
            header('Content-Type: application/json');
            echo json_encode($response);

       }else if(!$patient_appli){
            echo "Veillez vous inscrire";
       }
    }
}


function registerPatientController()
{
      // Traitement des données envoyées par l'utilisateur
      $_POST = json_decode(file_get_contents('php://input'), true);

      $db = new ConnectDB('projet_ppe_bd');
      $patient = new DatabaseAuth($db);

      $validator = new Validator($_POST);

      $validator->isUniq("numero_securite_social", $db, 'patients', 'Cet numero de securite social est deja attribue a un utilisateur');
      
      $validator->isEmail("email", 'Adresse email invalide');

      if($validator->isValid()){

        $patient->register($_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['sex'],$_POST['email'], $_POST['numero_securite_social'], $_POST['telephone']);
  
        header('HTTP/1.0 200 ok');
    
        echo "<span style='color:green'>Enregistrement du patient reussir</span>";

      }else if(!$validator->isValid()){

        $errors = $validator->errors;

        foreach ($errors as $error) {
            header('HTTP/1.0 400 Bad Request ');
            echo "<span style='color:red'>" . $error . "</span><br>";

            
        }

        // header('HTTP/1.0 404 ');
    
        // echo 'Quelque chose s\'est mal passé!';
      }

      

}


function validateAccountPatientController(){

    // $key = getValidationKeyFromUrl($_SERVER['REQUEST_URI']);

    var_dump($_GET['key']);
}


function getValidationKeyFromUrl($url) {
    // $url = "http://localhost/apiPatient/api.php/validate-account/638288dsds";
    $segments = explode("/", $url);
    $key = end($segments);

}
