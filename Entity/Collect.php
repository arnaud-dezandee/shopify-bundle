<?php
namespace Adezandee\ShopifyBundle\Entity;

/**
 * Class Collect
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class Collect
{
    /**
     * @var integer
     */
    protected $collectionId;

    /**
     * @var \Datetime
     */
    protected $createdAt;

    /**
     * @var bool
     */
    protected $featured;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $position;

    /**
     * @var integer
     */
    protected $productId;

    /**
     * @var string
     */
    protected $sortValue;

    /**
     * @var \Datetime
     */
    protected $updatedAt;

    /**
     * @param integer $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $collectionId
     */
    public function setCollectionId($collectionId)
    {
        $this->collectionId = $collectionId;
    }

    /**
     * @return int
     */
    public function getCollectionId()
    {
        return $this->collectionId;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
