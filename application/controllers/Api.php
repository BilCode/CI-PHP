<?php
/**
 * Created by PhpStorm.
 * User: Bilal
 * Date: 001, 1-November-17
 * Time: 10:35 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'libraries\REST_Controller.php');
class Api extends REST_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('helloworld_model');

    }
    public function data_get(){
        $r =$this->helloworld_model->getData();
        $this->response($r);
    }


}