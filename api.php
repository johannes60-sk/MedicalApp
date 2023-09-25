<?php

require_once('controllers/PatientController.php');
require_once('config/Config.php');


// Routeur
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === GET_PATIENT_ENDPOINT) {
    getPatientController();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === REGISTER_PATIENT_ENDPOINT) {
    registerPatientController();

} elseif($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === VALIDATE_ACCOUNT_PATIENT_ENDPOINT) {

    validateAccountPatientController();
}
else {
    header('HTTP/1.0 404 Not Found');
}



?>