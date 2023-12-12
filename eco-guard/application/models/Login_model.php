<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    function cek_user($username, $password) {
        // Perform database query to check if the user exists
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
        
        // Check if a user with the provided credentials was found
        if ($query->num_rows() == 1) {
            // User is valid, return user data
            return $query->row_array();
        } else {
            // User is not valid
            return false;
        }
    }
}
