<?php
namespace Adezandee\ShopifyBundle\Wrapper;

use Adezandee\ShopifyBundle\Entity\Collect;
use JMS\Serializer\Annotation\Type;

/**
 * Class CollectWrapper
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class CollectWrapper
{
    /**
     * @var Collect
     *
     * @Type("Adezandee\ShopifyBundle\Entity\Collect")
     */
    protected $collect;

    /**
     * @param Collect $collect
     */
    public function __construct(Collect $collect)
    {
        $this->collect = $collect;
    }

    /**
     * @return Collect
     */
    public function getCollect()
    {
        return $this->collect;
    }
}
