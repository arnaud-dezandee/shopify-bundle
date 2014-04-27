<?php

namespace Adezandee\ShopifyBundle\Call;

use Guzzle\Http\Client;

/**
 * Class DeleteJson
 *
 * @author Arnaud Dezandee <dezandee.arnaud@gmail.com>
 */
class DeleteJson extends GuzzleJson
{
    /**
     * {@inheritdoc}
     */
    public function makeRequest()
    {
        $client = new Client();
        $request = $client->delete($this->url);

        $response = $request->send();

        if (!in_array($response->getStatusCode(), array(200))) {
            throw new \ErrorException($response->getMessage());
        }

        return true;
    }
}
