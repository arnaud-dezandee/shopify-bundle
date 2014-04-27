<?php
namespace Adezandee\ShopifyBundle\Entity;

/**
 * Class Product
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class Product
{
    /**
     * @var string
     */
    protected $bodyHtml;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $handle;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var array
     */
    protected $images;

    /**
     * @var array
     */
    protected $options;

    /**
     * @var string
     */
    protected $productType;

    /**
     * @var \DateTime
     */
    protected $publishedAt;

    /**
     * @var string
     */
    protected $publishedScope;

    /**
     * @var string
     */
    protected $tags;

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
    protected $variants;

    /**
     * @var string
     */
    protected $vendor;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * @param \Datetime $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(\Datetime $createdAt)
    {
        $this->createdAt = $createdAt;

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
     * @param array $images
     *
     * @return $this
     */
    public function setImages(array $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param array $options
     *
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param string $productType
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @param \Datetime $publishedAt
     *
     * @return $this
     */
    public function setPublishedAt(\Datetime $publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * @param string $publishedScope
     *
     * @return $this
     */
    public function setPublishedScope($publishedScope)
    {
        $this->publishedScope = $publishedScope;

        return $this;
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @param string $templateSuffix
     *
     * @return $this
     */
    public function setTemplateSuffix($templateSuffix)
    {
        $this->templateSuffix = $templateSuffix;

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
     * @param \Datetime $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(\Datetime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @param array $variants
     *
     * @return $this
     */
    public function setVariants(array $variants)
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * @param string $vendor
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * @return array
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
