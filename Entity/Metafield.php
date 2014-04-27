<?php
namespace Adezandee\ShopifyBundle\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class Metafield
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class Metafield
{
    /**
     * @Type("DateTime<'Y-m-d\TH:i:sO'>")
     */
    protected $createdAt;

    /**
     * @Type("string")
     */
    protected $description;

    /**
     * @Type("integer")
     */
    protected $id;

    /**
     * @Type("string")
     */
    protected $key;

    /**
     * @Type("string")
     */
    protected $namespace;

    /**
     * @Type("integer")
     */
    protected $ownerId;

    /**
     * @Type("string")
     */
    protected $ownerResource;

    /**
     * @Type("string")
     */
    protected $value;

    /**
     * @Type("string")
     */
    protected $valueType;

    /**
     * @Type("DateTime<'Y-m-d\TH:i:sO'>")
     */
    protected $updatedAt;
}
