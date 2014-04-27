<?php

namespace Adezandee\ShopifyBundle\Call;

use JMS\Serializer\SerializerInterface;

/**
 * Class GuzzleJson
 *
 * @author Arnaud Dezandee <dezandee.arnaud@gmail.com>
 */
abstract class GuzzleJson
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @var mixed
     */
    protected $data;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @param string                $url
     * @param mixed                 $data
     * @param SerializerInterface   $serializer
     */
    public function __construct($url, $data = null, SerializerInterface $serializer = null)
    {
        $this->url        = $url;
        $this->data       = $data;
        $this->serializer = $serializer;
    }

    /**
     * @return object
     * @throws \ErrorException
     */
    abstract public function makeRequest();
}
