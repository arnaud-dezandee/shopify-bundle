<?php
namespace Adezandee\ShopifyBundle\Wrapper;

use Adezandee\ShopifyBundle\Entity\Product;

/**
 * Class ProductWrapper
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class ProductWrapper
{
    /**
     * @var Product
     */
    protected $product;

    /**
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
