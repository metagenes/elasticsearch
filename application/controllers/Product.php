<?php
use Restserver\Libraries\REST_Controller;

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
       $message = "Welcome to API";
        $this->response($message, 200);
    }
}