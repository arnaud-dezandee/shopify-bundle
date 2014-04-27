<?php

namespace Adezandee\ShopifyBundle\Export;

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
     * Constructor creates dependency objects
     *
     * @param array               $options
     * @param SerializerInterface $serializer
     */
    public function __construct($options, SerializerInterface $serializer)
    {
        $this->options    = $options;
        $this->serializer = $serializer;
    }

    protected function baseUrl()
    {
        return 'https://'. $this->options['api_key'] .':'. $this->options['password'] .'@'. $this->options['domain'];
    }
}
