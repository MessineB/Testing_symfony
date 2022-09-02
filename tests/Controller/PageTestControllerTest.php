<?php
namespace App\Tests\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageTestControllerTest extends WebTestCase
{
    public function testHelloWorld()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/fr/TestPage');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    public function testH1Welcome()
    {
        $client = static::createClient();
        $request = $client->request('GET', '/fr/TestPage');
        $this->assertSelectorTextContains("H1", "Bienvenue sur le test d'un controller!");
    }
    public function testP()
    {
        $client = static::createClient();
        $request = $client->request('GET', '/fr/TestPage');
        $this->assertSelectorTextContains("P", "Voici la page pour tester le controller test 
                                                    je veux voir si ca marche");
    }
   
}

