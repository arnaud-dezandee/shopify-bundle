<?php

namespace Adezandee\ShopifyBundle\Entity;

/**
 * Class Image
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class ProductImage
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $position;

    /**
     * @var int
     */
    protected $productId;

    /**
     * @var string
     */
    protected $src;

    /**
     * @var \Datetime
     */
    protected $updatedAt;

    /**
     * @var \Datetime
     */
    protected $createdAt;

    /**
     * @param string $src
     */
    public function setSrc($src)
    {
        $this->src = $src;
    }
}
