<?php
namespace Adezandee\ShopifyBundle\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class CustomCollection
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class CustomCollection
{
    /**
     * @var string
     *
     * @Type("string")
     */
    protected $bodyHtml;

    /**
     * @var string
     *
     * @Type("string")
     */
    protected $handle;

    /**
     * @var CustomCollectionImage
     *
     * @Type("Adezandee\ShopifyBundle\Entity\CustomCollectionImage")
     */
    protected $image;

    /**
     * @var integer
     *
     * @Type("integer")
     */
    protected $id;

    /**
     * @var array
     *
     * @Type("array<Adezandee\ShopifyBundle\Entity\Metafield>")
     */
    protected $metafields;

    /**
     * @var bool
     *
     * @Type("boolean")
     */
    protected $published;

    /**
     * @Type("DateTime<'Y-m-d\TH:i:sO'>")
     */
    protected $publishedAt;

    /**
     * @Type("string")
     */
    protected $publishedScope;

    /**
     * @Type("string")
     */
    protected $sortOrder;

    /**
     * @Type("string")
     */
    protected $templateSuffix;

    /**
     * @var string
     *
     * @Type("string")
     */
    protected $title;

    /**
     * @Type("DateTime<'Y-m-d\TH:i:sO'>")
     */
    protected $updatedAt;

    /**
     * @var array
     *
     * @Type("array<Adezandee\ShopifyBundle\Entity\Collect>")
     */
    protected $collects;

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
     * @param array $collects
     */
    public function setCollects($collects)
    {
        $this->collects = $collects;
    }

    /**
     * @param CustomCollectionImage $image
     */
    public function setImage(CustomCollectionImage $image)
    {
        $this->image = $image;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param string $bodyHtml
     */
    public function setBodyHtml($bodyHtml)
    {
        $this->bodyHtml = $bodyHtml;
    }

    /**
     * @param string $handle
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
    }
}
