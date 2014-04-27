<?php
namespace Adezandee\ShopifyBundle\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class CustomCollectionImage
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class CustomCollectionImage
{
    /**
     * @var \Datetime
     *
     * @Type("DateTime<'Y-m-d\TH:i:sO'>")
     */
    protected $createdAt;

    /**
     * @var string
     *
     * @Type("string")
     */
    protected $src;

    /**
     * @param string $src
     */
    public function setSrc($src)
    {
        $this->src = $src;
    }
}
