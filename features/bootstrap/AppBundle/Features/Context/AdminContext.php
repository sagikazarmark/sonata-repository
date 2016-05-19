<?php

namespace AppBundle\Features\Context;

use Behat\MinkExtension\Context\RawMinkContext;
use Behat\Symfony2Extension\Context\KernelAwareContext;
use Behat\Symfony2Extension\Context\KernelDictionary;

final class AdminContext extends RawMinkContext implements KernelAwareContext
{
    use KernelDictionary;
}
