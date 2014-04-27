<?php
namespace Adezandee\ShopifyBundle\Export;

use Adezandee\ShopifyBundle\Call\DeleteJson;
use Adezandee\ShopifyBundle\Call\PostJson;
use Adezandee\ShopifyBundle\Call\PutJson;
use Adezandee\ShopifyBundle\Entity\CustomCollection;
use Adezandee\ShopifyBundle\Wrapper\CustomCollectionWrapper;

/**
 * Class CustomCollectionExporter
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class CustomCollectionExporter extends ShopifyExporter
{
    private function exportUrl()
    {
        return $this->baseUrl(). '/admin/custom_collections.json';
    }

    private function updateUrl(CustomCollection $collection)
    {
        return $this->baseUrl(). '/admin/custom_collections/'. $collection->getId() .'.json';
    }

    private function removeUrl(CustomCollection $collection)
    {
        return $this->updateUrl($collection);
    }

    /**
     * @param CustomCollection $collection
     *
     * @return CustomCollection
     */
    public function export(CustomCollection $collection)
    {
        if (null !== $collection->getId()) {
            $request = new PutJson($this->updateUrl($collection), new CustomCollectionWrapper($collection));
        } else {
            $request = new PostJson($this->exportUrl(), new CustomCollectionWrapper($collection));
        }
        $request->generateRequestData($this->serializer);

        /** @var CustomCollectionWrapper $collectionWrapper */
        $collectionWrapper = $this->caller->call($request);

        if (!in_array($request->getStatusCode(), array(200, 201))) {
            throw new \ErrorException($request->getStatus());
        }

        return $collectionWrapper->getCustomCollection();
    }

    /**
     * @param CustomCollection $collection
     *
     * @return bool
     */
    public function remove(CustomCollection $collection)
    {
        if (null == $collection->getId()) {
            throw new \ErrorException('Can not remove a non existent Product !');
        } else {
            $request = new DeleteJson($this->removeUrl($collection), new CustomCollectionWrapper($collection));
        }
        $this->caller->call($request);

        if (!in_array($request->getStatusCode(), array(200))) {
            throw new \ErrorException($request->getStatus());
        }

        return true;
    }
}
