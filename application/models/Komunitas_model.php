<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komunitas_model extends CI_Model {

    public function post_comments($data)
    {
        // Use CodeIgniter's query builder for better security
        $result = $this->db->insert('comments', $data);

        return $result;
    }
}
