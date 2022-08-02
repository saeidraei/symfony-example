<?php
namespace App\Tests\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase {

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET','/post/2');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'test title 2');
    }

}