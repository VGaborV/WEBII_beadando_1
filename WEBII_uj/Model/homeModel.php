<?php
class homeModel {
    function getMunkalapDarab() {
        $result = Database::query('SELECT COUNT(*) as darab FROM munkalap');
        return $result[0]['darab'];
    }
}