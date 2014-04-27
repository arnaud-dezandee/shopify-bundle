<?php

namespace Adezandee\ShopifyBundle\Wrapper;

use Adezandee\ShopifyBundle\Entity\Collect;

/**
 * Class CollectWrapper
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class CollectWrapper
{
    /**
     * @var Collect
     */
    protected $collect;

    /**
     * @param Collect $collect
     */
    public function __construct(Collect $collect)
    {
        $this->collect = $collect;
    }

    /**
     * @return Collect
     */
    public function getCollect()
    {
        return $this->collect;
    }
}
