<?php
namespace Adezandee\ShopifyBundle\Tests\Export;

use Adezandee\ShopifyBundle\Export\ProductExporter;
use Adezandee\ShopifyBundle\Tests\ShopifyTestCase;
use Adezandee\ShopifyBundle\Entity\Product;

/**
 * PHPUnit Test ProductExporterTest
 *
 * @author Arnaud Dezandee <dezandee.arnaud@gmail.com>
 */
class ProductExporterTest extends ShopifyTestCase
{
    /** @var ProductExporter */
    protected $exporter;

    public function setUp()
    {
        parent::setUp();
        $this->exporter = new ProductExporter($this->storeKey, $this->serializer);
    }

    public function testCreateAndRemoveANewProduct()
    {
        $product = new Product();
        $product
            ->setTags('tag1, tag2, tag3')
            ->setTitle('Test Product1')
            ->setBodyHtml('Body Test Product1')
            ->setProductType('Test')
            ->setVendor('symfony')
        ;

        // Create a new Product in the store
        $product = $this->exporter->export($product);
        $this->assertNotNull($product->getId());

        // API Call limit
        usleep(50000);

        // Update Product
        $product->setTitle('Updated Product1');
        $updated = $this->exporter->export($product);
        $this->assertEquals('Updated Product1', $updated->getTitle());

        // API Call limit
        usleep(50000);

        // Delete the Product.
        $deleted = $this->exporter->remove($product);
        $this->assertTrue($deleted);
    }
}
