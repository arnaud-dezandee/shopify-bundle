<?php

namespace Adezandee\ShopifyBundle\Entity;

/**
 * Class Metafield
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class Metafield
{
    /**
     * @var \Datetime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $namespace;

    /**
     * @var integer
     */
    protected $ownerId;

    /**
     * @var string
     */
    protected $ownerResource;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $valueType;

    /**
     * @var \Datetime
     */
    protected $updatedAt;
}
