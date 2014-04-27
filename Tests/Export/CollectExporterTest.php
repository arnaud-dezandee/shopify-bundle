<?php

namespace Adezandee\ShopifyBundle\Tests\Export;

use Adezandee\ShopifyBundle\Entity\Collect;
use Adezandee\ShopifyBundle\Export\CollectExporter;
use Adezandee\ShopifyBundle\Tests\ShopifyTestCase;

/**
 * PHPUnit Test CollectExporterTest
 *
 * @author Arnaud Dezandee <dezandee.arnaud@gmail.com>
 */
class CollectExporterTest extends ShopifyTestCase
{
    /** @var CollectExporter */
    protected $exporter;

    public function setUp()
    {
        parent::setUp();
        $this->exporter = new CollectExporter($this->storeKey, $this->serializer);
    }

    public function testCreateAndRemoveANewCollect()
    {
        $collect = new Collect();
        $collect
            ->setCollectionId(23136625)
            ->setProductId(299068065)
            ->setFeatured(false)
        ;

        // Create a new Product in the store
        $collect = $this->exporter->export($collect);
        $this->assertNotNull($collect->getId());
        $this->assertFalse($collect->isFeatured());

        // API Call limit
        usleep(50000);

        // Delete the Collect.
        $deleted = $this->exporter->remove($collect);
        $this->assertTrue($deleted);
    }
}
