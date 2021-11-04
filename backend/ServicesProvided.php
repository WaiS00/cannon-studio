<?php
require_once "DBController.php";

class ServicesProvided extends DBController
{

    function getAllServices()
    {
        $query = "SELECT * FROM services";
        
        $servicesResult = $this->getDBResult($query);
        return $servicesResult;
    }

}
