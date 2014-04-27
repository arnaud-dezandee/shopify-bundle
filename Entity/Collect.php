<?php
namespace Adezandee\ShopifyBundle\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class Collect
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class Collect
{
    /**
     * @var integer
     *
     * @Type("integer")
     */
    protected $collectionId;

    /**
     * @Type("DateTime<'Y-m-d\TH:i:sO'>")
     */
    protected $createdAt;

    /**
     * @Type("boolean")
     */
    protected $featured;

    /**
     * @var integer
     *
     * @Type("integer")
     */
    protected $id;

    /**
     * @Type("string")
     */
    protected $position;

    /**
     * @var integer
     *
     * @Type("integer")
     */
    protected $productId;

    /**
     * @Type("string")
     */
    protected $sortValue;

    /**
     * @Type("DateTime<'Y-m-d\TH:i:sO'>")
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
