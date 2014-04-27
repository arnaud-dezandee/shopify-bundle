<?php

namespace Adezandee\ShopifyBundle\Export;

use Adezandee\ShopifyBundle\Call\DeleteJson;
use Adezandee\ShopifyBundle\Call\PostJson;
use Adezandee\ShopifyBundle\Call\PutJson;
use Adezandee\ShopifyBundle\Entity\Product;
use Adezandee\ShopifyBundle\Wrapper\ProductWrapper;

/**
 * Class ProductExporter
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class ProductExporter extends ShopifyExporter
{
    private function exportUrl()
    {
        return $this->baseUrl(). '/admin/products.json';
    }

    private function updateUrl(Product $product)
    {
        return $this->baseUrl(). '/admin/products/'. $product->getId() .'.json';
    }

    private function removeUrl(Product $product)
    {
        return $this->updateUrl($product);
    }

    /**
     * @param Product $product
     *
     * @return Product
     */
    public function export(Product $product)
    {
        if (null !== $product->getId()) {
            $request = new PutJson($this->updateUrl($product), new ProductWrapper($product), $this->serializer);
        } else {
            $request = new PostJson($this->exportUrl(), new ProductWrapper($product), $this->serializer);
        }

        /** @var ProductWrapper $productWrapper */
        $productWrapper = $request->makeRequest();

        return $productWrapper->getProduct();
    }

    /**
     * @param Product $product
     *
     * @return bool
     */
    public function remove(Product $product)
    {
        if (null == $product->getId()) {
            throw new \ErrorException('Can not remove a non existent Product !');
        } else {
            $request = new DeleteJson($this->removeUrl($product));
        }

        $deleted = $request->makeRequest();

        return $deleted;
    }
}
