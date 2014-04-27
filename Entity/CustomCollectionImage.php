<?php

namespace Adezandee\ShopifyBundle\Entity;

/**
 * Class CustomCollectionImage
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class CustomCollectionImage
{
    /**
     * @var \Datetime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $src;

    /**
     * @param string $src
     */
    public function setSrc($src)
    {
        $this->src = $src;
    }
}
