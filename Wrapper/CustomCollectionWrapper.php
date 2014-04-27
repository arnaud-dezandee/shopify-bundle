<?php

namespace Adezandee\ShopifyBundle\Wrapper;

use Adezandee\ShopifyBundle\Entity\CustomCollection;

/**
 * Class CustomCollectionWrapper
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class CustomCollectionWrapper
{
    /**
     * @var CustomCollection
     */
    protected $customCollection;

    /**
     * @param CustomCollection $customCollection
     */
    public function __construct($customCollection)
    {
        $this->customCollection = $customCollection;
    }

    /**
     * @return CustomCollection
     */
    public function getCustomCollection()
    {
        return $this->customCollection;
    }
}
