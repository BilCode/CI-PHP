<?php
/**
 * Created by PhpStorm.
 * User: Bilal
 * Date: 001, 1-November-17
 * Time: 6:50 PM
 */

class Helloworld_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getData()
    {
        //Query the data table for every record and row
        $query = $this->db->get('data');

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            //show_error('Database is empty!');
        }
    }
}
?>