<?php
use Restserver\Libraries\REST_Controller;
use Elasticsearch\ClientBuilder;
require 'vendor\autoload.php';
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Product extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        //inisialisasi model Produk_model.php dengan nama produk
        $this->load->database();
    }
    public function index_get()
    {
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => 'pet_name',
            'id' => 'test_id'
        ];
        
        $response = $client->get($params);
        $this->response($response);
    }
    public function index_post()
    {
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => $this->post('index'),
            'id'    => rand(),
            'body'  => ['testField' => $this->post('body')]
        ];
        
        $response = $client->index($params);
        $this->response($response);
    }
}