<?php

namespace Adezandee\ShopifyBundle\Export;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

/**
 * Class ShopifyExporter
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
abstract class ShopifyExporter
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @var array
     */
    protected $options;

    /**
     * @param array $options
     */
    public function __construct($options)
    {
        $this->options = $options;

        $builder = new SerializerBuilder();
        $this->serializer = $builder
            ->addMetadataDir(realpath(__DIR__.'/../Resources/serializer'))
            ->build()
        ;
    }

    protected function baseUrl()
    {
        return 'https://'. $this->options['api_key'] .':'. $this->options['password'] .'@'. $this->options['domain'];
    }
}
