<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testAddinventory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/add-inventory');
    }

    public function testEditinventory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/edit-inventory/{id}');
    }

    public function testListinventory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/list-inventory');
    }

    public function testDeleteinventory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/delete-inventory/{id}');
    }

}
