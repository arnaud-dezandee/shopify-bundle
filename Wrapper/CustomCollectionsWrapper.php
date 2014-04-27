<?php
namespace Adezandee\ShopifyBundle\Wrapper;

use JMS\Serializer\Annotation\Type;

/**
 * Class CustomCollections
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class CustomCollectionsWrapper
{
    /**
     * @var array
     *
     * @Type("array<Adezandee\ShopifyBundle\Entity\CustomCollection>")
     */
    protected $customCollections;
}
