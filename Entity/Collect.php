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
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
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
     *
     * @return $this
     */
    public function setCollectionId($collectionId)
    {
        $this->collectionId = $collectionId;

        return $this;
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

    /**
     * @return bool
     */
    public function isFeatured()
    {
        return $this->featured;
    }

    /**
     * @param bool $featured
     *
     * @return $this
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * @param string $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @param string $sortValue
     *
     * @return $this
     */
    public function setSortValue($sortValue)
    {
        $this->sortValue = $sortValue;

        return $this;
    }
}
