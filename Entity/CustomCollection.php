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
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param array $collects
     *
     * @return $this
     */
    public function setCollects($collects)
    {
        $this->collects = $collects;

        return $this;
    }

    /**
     * @param CustomCollectionImage $image
     *
     * @return $this
     */
    public function setImage(CustomCollectionImage $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $bodyHtml
     *
     * @return $this
     */
    public function setBodyHtml($bodyHtml)
    {
        $this->bodyHtml = $bodyHtml;

        return $this;
    }

    /**
     * @param string $handle
     *
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;

        return $this;
    }
}
