<?php

namespace ProjetBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AmisControllerTest extends WebTestCase
{
    public function testAjout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajout-amis');
    }

    public function testSupprimer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/supprimer-amis');
    }

}
