<?php

namespace Adezandee\ShopifyBundle\Tests;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

/**
 * Class ShopifyTestCase
 *
 * @author Arnaud Dezandee <dezandee.arnaud@gmail.com>
 */
class ShopifyTestCase extends \PHPUnit_Framework_TestCase
{
    /** @var array */
    protected $storeKey;
    /** @var SerializerInterface */
    protected $serializer;

    public function setUp()
    {
        $this->storeKey = array(
            'api_key' => '0e54680857cc2874d9f3874364d786c3',
            'password' => '8ad3f0ee9cec0c559046f273dd22350c',
            'secret'    => '139bfc86c90a8893e0bb97560a5e0e4a',
            'domain'    => 'symfony-shopify-bundle.myshopify.com',
        );

        $builder = new SerializerBuilder();
        $this->serializer = $builder
            ->addMetadataDir(realpath(__DIR__.'/../Resources/serializer'))
            ->build()
        ;
    }
}
