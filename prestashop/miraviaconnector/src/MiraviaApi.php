<?php
class MiraviaApi
{
    private $endpoint;
    private $token;

    public function __construct($endpoint, $token)
    {
        $this->endpoint = rtrim($endpoint, '/');
        $this->token = $token;
    }

    public function getProductList()
    {
        // TODO: Call Miravia API to fetch product list
    }

    public function pushProduct($productData)
    {
        // TODO: Send product data to Miravia via API
    }
}
