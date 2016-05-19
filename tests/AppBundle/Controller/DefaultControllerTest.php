<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Entity\User\User;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertStatusCode(200, $client);
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }

    public function testHello()
    {
        $fixtures = $this->loadFixtureFiles([
            '@AppBundle/DataFixtures/ORM/user.yml'
        ]);

        /** @var User $user */
        $user = $fixtures['fabien'];

        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/'.$user->getUsername());

        $this->assertStatusCode(200, $client);
        $this->assertContains(
            sprintf('Hello, %s %s!', $user->getFirstname(), $user->getLastname()),
            $crawler->filter('#container h1')->text()
        );
    }
}
