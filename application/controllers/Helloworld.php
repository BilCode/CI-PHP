<?php
/**
 * Created by PhpStorm.
 * User: Bilal
 * Date: 001, 1-November-17
 * Time: 7:00 PM
 */

class Helloworld extends CI_Controller
{
    function index()
    {
        $this->load->model('helloworld_model');

        $data['result'] = $this->helloworld_model->getData();
            $data['page_title'] = "CI Hello World App!";

            $this->load->view('helloworld_view',$data);
    }
}
?>