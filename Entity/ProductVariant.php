<?php

namespace Adezandee\ShopifyBundle\Entity;

/**
 * Class Variant
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class ProductVariant
{
    /**
     * @var string
     */
    protected $barcode;

    /**
     * @var string
     */
    protected $compareAtPrice;

    /**
     * @var \Datetime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $fulfillmentService;

    /**
     * @var integer
     */
    protected $grams;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $inventoryManagement;

    /**
     * @var string
     */
    protected $inventoryPolicy;

    /**
     * @var string
     */
    protected $option1;

    /**
     * @var string
     */
    protected $option2;

    /**
     * @var string
     */
    protected $option3;

    /**
     * @var integer
     */
    protected $position;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var integer
     */
    protected $productId;

    /**
     * @var bool
     */
    protected $requiresShipping;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var bool
     */
    protected $taxable;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var \Datetime
     */
    protected $updatedAt;

    /**
     * @var integer
     */
    protected $inventoryQuantity;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @param string $option1
     */
    public function setOption1($option1)
    {
        $this->option1 = $option1;
    }

    /**
     * @param string $option2
     */
    public function setOption2($option2)
    {
        $this->option2 = $option2;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param string $option3
     */
    public function setOption3($option3)
    {
        $this->option3 = $option3;
    }
}
