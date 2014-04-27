ShopifyBundle
==============

Symfony2 Bundle to interact with a Shopify Store (API Call)

### Configuration

After installing the bundle, you'll need private api key and password of your shopify shop and add it in your config file:
http://docs.shopify.com/api/tutorials/creating-a-private-app

``` yaml
# app/config/config.yml

shopify:
    api_key:    "%shopify_api_key%"
    password:   "%shopify_password%"
    secret:     "%shopify_secret%"
    domain:     "%shopify_domain%"
```

## Basic Usage

This bundle provide a mapping of Shopify object and allow you to create / update / delete items of your shopify store through API call.

``` php
# AcmeBundle/Controller/DefaultController.php

    public function newProductAction()
    {
        $product = new Product();
        $product
            ->setTitle('Test Product1')
            ->setBodyHtml('Body Test Product1')
            ->setProductType('Test')
            ->setVendor('symfony')
        ;

        $product = $this->get('shopify.product_exporter')->export($product);

        // Now you can persist locally that you created a shopifyProduct
        // with $product->getId();
    }

```
