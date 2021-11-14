<?php
class homeController {
    
    private $model;
    
    function __construct() {
        $this->model = new homeModel();
    }
    
    function render() {
        return render('View/home.php', [
            'munkalap_darab' => $this->model->getMunkalapDarab(),
        ]);
    }   
}