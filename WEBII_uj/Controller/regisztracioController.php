<?php
class regisztracioController {
    
    private $model;
    
    function __construct() {
        $this->model = new regisztracioModel();
    }
    
    function render() {
        $result = [];
        if (isset($_POST['jelszo']) && isset($_POST['felhasznalo']) && isset($_POST['vezeteknev']) && isset($_POST['utonev'])) {
            
            $result = $this->model->regisztralas($_POST['felhasznalo'], $_POST['vezeteknev'], $_POST['utonev'], $_POST['jelszo']);
        }
        
        return render('View/regisztracio.php', $result);
    }   
}