<?php

namespace Adezandee\ShopifyBundle\Call;

use Guzzle\Http\Client;

/**
 * Class PutJson
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class PutJson extends GuzzleJson
{
    /**
     * {@inheritdoc}
     */
    public function makeRequest()
    {
        $json = $this->serializer->serialize($this->data, 'json');

        $client = new Client();
        $request = $client->put($this->url, array(), $json);
        $request->setHeader('Content-Type', 'application/json');
        $request->setHeader('Content-Length', strlen($json));
        $request->addHeader('Accept', 'application/json');

        $response = $request->send();

        if (!in_array($response->getStatusCode(), array(200, 201, 100))) {
            throw new \ErrorException($response->getMessage());
        }

        $responseObject = $this->serializer->deserialize(
            $response->getBody(true),
            get_class($this->data),
            'json'
        );

        return $responseObject;
    }
}
