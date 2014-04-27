<?php

namespace Adezandee\ShopifyBundle\Tests\Export;

use Adezandee\ShopifyBundle\Entity\CustomCollection;
use Adezandee\ShopifyBundle\Entity\CustomCollectionImage;
use Adezandee\ShopifyBundle\Export\CustomCollectionExporter;
use Adezandee\ShopifyBundle\Tests\ShopifyTestCase;

/**
 * PHPUnit Test CustomCollectionExporterTest
 *
 * @author Arnaud Dezandee <dezandee.arnaud@gmail.com>
 */
class CustomCollectionExporterTest extends ShopifyTestCase
{
    /** @var CustomCollectionExporter */
    protected $exporter;

    public function setUp()
    {
        parent::setUp();
        $this->exporter = new CustomCollectionExporter($this->storeKey, $this->serializer);
    }

    public function testCreateAndRemoveANewCustomCollection()
    {
        $collectionImage = new CustomCollectionImage();
        $collectionImage->setSrc('https://www.google.fr/images/srpr/logo11w.png');

        $customCollection = new CustomCollection();
        $customCollection
            ->setImage($collectionImage)
            ->setTitle('Test CustomCollection1')
            ->setBodyHtml('Test Body CustomCollection1')
            ->setHandle('test-custom-collection')
        ;

        // Create a new CustomCollection in the store
        $customCollection = $this->exporter->export($customCollection);
        $this->assertNotNull($customCollection->getId());

        // API Call limit
        usleep(50000);

        // Update CustomCollection
        $customCollection->setTitle('Updated CustomCollection1');
        $updated = $this->exporter->export($customCollection);
        $this->assertEquals('Updated CustomCollection1', $updated->getTitle());

        // API Call limit
        usleep(50000);

        // Delete the CustomCollection.
        $deleted = $this->exporter->remove($customCollection);
        $this->assertTrue($deleted);
    }
}
