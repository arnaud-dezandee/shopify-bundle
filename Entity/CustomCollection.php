<?php

namespace Adezandee\ShopifyBundle\Entity;

/**
 * Class CustomCollection
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class CustomCollection
{
    /**
     * @var string
     */
    protected $bodyHtml;

    /**
     * @var string
     */
    protected $handle;

    /**
     * @var CustomCollectionImage
     */
    protected $image;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var array
     */
    protected $metafields;

    /**
     * @var bool
     */
    protected $published;

    /**
     * @var \Datetime
     */
    protected $publishedAt;

    /**
     * @var string
     */
    protected $publishedScope;

    /**
     * @var string
     */
    protected $sortOrder;

    /**
     * @var string
     */
    protected $templateSuffix;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var \Datetime
     */
    protected $updatedAt;

    /**
     * @var array
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
