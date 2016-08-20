<?php

namespace AppBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use Sonata\UserBundle\Entity\BaseUser;

/**
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="salt",
 *          column=@ORM\Column(
 *              type = "string",
 *              nullable = true,
 *          )
 *      )
 * })
 * @ORM\Entity()
 * @ORM\Table("fos_user_user")
 *
 * @JMS\ExclusionPolicy("all")
 * @JMS\XmlRoot("user")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     * @ORM\Id()
     *
     * @JMS\Expose()
     * @JMS\Groups({"sonata_api_read", "sonata_api_write", "sonata_search"})
     * @JMS\Since("1.0")
     * @JMS\Type("integer")
     * @JMS\XmlAttributeMap()
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();

        $this->salt = null;
    }

    /**
     * Since PHP 7 password functions does not support custom salts.
     *
     * By manually overriding this method we prevent the salt option from being passed to password functions.
     */
    public function getSalt()
    {
        return;
    }
}
