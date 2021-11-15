<?php
class kilepesController {
    
    private $model;
    
    function __construct() {
        $this->model = new kilepesModel();
    }
    
    function render() {
        $result = $this->model->kilep();
        return render('View/kilepes.php', $result);
    }   
}