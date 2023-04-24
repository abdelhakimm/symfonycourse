<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class MainControllerTest extends WebTestCase{

    /**
     * 
     * permet de vérifier que lorsqu'on tape / on obtient une réponse 200
     * 
     *  @return void
     */
    public function testMainController(){
        $client = static::createClient();
        $crawler = $client->request('GET','/');
        self::assertResponseStatusCodeSame(Response::HTTP_OK);
    }
}

?>