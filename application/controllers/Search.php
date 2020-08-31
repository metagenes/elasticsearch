
<?php
use Restserver\Libraries\REST_Controller;
use Elasticsearch\ClientBuilder;
require 'vendor\autoload.php';
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Search extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        //inisialisasi model Produk_model.php dengan nama produk
        $this->load->database();
    }
    public function index_post()
    {
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => 'pet_name',
            'body'  => [
                'query' => [
                    'match' => [
                        'testField' => $this->post('body')
                    ]
                ]
            ]
        ];
        
        $response = $client->search($params);
        $this->response($response);
    }
}