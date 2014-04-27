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
     * @throws \ErrorException
     */
    public function export(Collect $collect)
    {
        if (null !== $collect->getId()) {
            throw new \ErrorException('You can not export the same Collect object');
        } else {
            $request = new PostJson($this->exportUrl(), new CollectWrapper($collect));
        }
        $request->generateRequestData($this->serializer);

        /** @var CollectWrapper $collectWrapper */
        $collectWrapper = $this->caller->call($request);

        if (!in_array($request->getStatusCode(), array(201))) {
            throw new \ErrorException($request->getStatus());
        }

        return $collectWrapper->getCollect();
    }

    /**
     * @param Collect $collect
     *
     * @return Collect
     * @throws \ErrorException
     */
    public function remove(Collect $collect)
    {
        if (null == $collect->getId()) {
            throw new \ErrorException('Can not remove a non existent Product !');
        } else {
            $request = new DeleteJson($this->removeUrl($collect), new CollectWrapper($collect));
        }
        $this->caller->call($request);

        if (!in_array($request->getStatusCode(), array(200))) {
            throw new \ErrorException($request->getStatus());
        }

        return true;
    }
}
