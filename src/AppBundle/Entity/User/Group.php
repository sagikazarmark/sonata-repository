<?php

namespace AppBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use Sonata\UserBundle\Entity\BaseGroup;

/**
 * @ORM\Entity()
 * @ORM\Table("fos_user_group")
 *
 * @JMS\ExclusionPolicy("all")
 * @JMS\XmlRoot("group")
 */
class Group extends BaseGroup
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
}
