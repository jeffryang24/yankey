<?php

/**
 * Description of Installer [Yankee-Whiskey CodeName: OperationZulu]
 *
 * @author Jeffry Angtoni
 * @version 1.0.0b
 * @revision none
 * @date 03-30-2015
 * @purpose Initialize first-time use for new user
 * 
 */
class Installer extends CI_Controller{
    
    // index
    public function index(){
        // Initialize variable for this page
        $data = array("installer_page_title" => "Yankee-Whiskey Finance Diary :: First Step ::");
        $this->load->view("view_installer");
    }
}
