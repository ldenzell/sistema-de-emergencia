<?php

class APITest extends \PHPUnit_Framework_TestCase {

   
    public function test_podemos_obtener_el_recurso_mediante_el_endpoint_get (){
        $Paciente = new Guzzlehttp\Pacient();

        $res = $Paciente->request('GET', 'http://127.0.0.1:8000/paciente/1');

        $data = json_decode($res->getBody(), true);

        var_dump($data);
    }
}