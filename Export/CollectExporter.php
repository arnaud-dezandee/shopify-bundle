<?php

namespace Adezandee\ShopifyBundle\Export;

use Adezandee\ShopifyBundle\Call\DeleteJson;
use Adezandee\ShopifyBundle\Call\PostJson;
use Adezandee\ShopifyBundle\Entity\Collect;
use Adezandee\ShopifyBundle\Wrapper\CollectWrapper;

/**
 * Class CollectExporter
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class CollectExporter extends ShopifyExporter
{
    private function exportUrl()
    {
        return $this->baseUrl(). '/admin/collects.json';
    }

    private function removeUrl(Collect $collect)
    {
        return $this->baseUrl(). '/admin/collects/'. $collect->getId() .'.json';
    }

    /**
     * @param Collect $collect
     *
     * @return Collect
     */
    public function export(Collect $collect)
    {
        if (null !== $collect->getId()) {
            throw new \ErrorException('You can not update a Collect object');
        } else {
            $request = new PostJson($this->exportUrl(), new CollectWrapper($collect), $this->serializer);
        }

        /** @var CollectWrapper $collectWrapper */
        $collectWrapper = $request->makeRequest();

        return $collectWrapper->getCollect();
    }

    /**
     * @param Collect $collect
     *
     * @return bool
     */
    public function remove(Collect $collect)
    {
        if (null == $collect->getId()) {
            throw new \ErrorException('Can not remove a non existent Collect !');
        } else {
            $request = new DeleteJson($this->removeUrl($collect));
        }

        $deleted = $request->makeRequest();

        return (bool) $deleted;
    }
}
