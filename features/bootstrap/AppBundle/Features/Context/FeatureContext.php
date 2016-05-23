<?php

namespace AppBundle\Features\Context;

use AppBundle\Entity\User\User;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Symfony2Extension\Context\KernelAwareContext;
use Behat\Symfony2Extension\Context\KernelDictionary;

final class FeatureContext extends MinkContext implements SnippetAcceptingContext, KernelAwareContext
{
    use KernelDictionary;

    /**
     * @Given there is a user called :firstName :lastName with the username :username
     */
    public function thereIsAUserCalledWithTheUsername($firstName, $lastName, $username)
    {
        $user = new User();

        $user->setFirstname($firstName);
        $user->setLastname($lastName);
        $user->setUsername($username);
        $user->setEmail('email@example.com');
        $user->setPlainPassword('password');
        $user->setEnabled(true);
        $user->setLocked(false);

        $em = $this->getContainer()->get('doctrine')->getManager();

        $em->persist($user);
        $em->flush();
    }
}
