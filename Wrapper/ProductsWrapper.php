<?php
namespace Adezandee\ShopifyBundle\Wrapper;

use JMS\Serializer\Annotation\Type;

/**
 * Class ProductsWrapper
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class ProductsWrapper
{
    /**
     * @var array
     *
     * @Type("array<Adezandee\ShopifyBundle\Entity\Product>")
     */
    protected $products;
}
