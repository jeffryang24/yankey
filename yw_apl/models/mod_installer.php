<?php
/**
 * Description of mod_installer
 *
 * @author Jeffry Angtoni
 * @date 02-04-2015
 * @purpose Installer Module
 */
class Mod_installer extends CI_Model {
    
    private $db;
    
    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database();
    }
    
    /*
     * @author      : Jeffry Angtoni
     * @date        : April 3, 2015
     * @purpose     : Insert data method for installer_controller
     */
    private function _insertData($first_name,$last_name,$username,$email,$password,$pin){
        
    }
    
    // Setter and Getter
    public function __set($name, $value) {
        $this->$name = $value;
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
}
