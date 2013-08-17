<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

    class Calendar extends CI_Controller {
        private $header_arr;
        
        function __construct(){
            parent::__construct();
            
            $this->header_arr = array(
                'css' => $this->config->item('css'),
                'js' => $this->config->item('js'),
                'base_url' => $this->config->item('base_url')
            );
        }
        
        function index(){
            $data['header'] = $this->header_arr;

            $this->load->view('calendar_tpl', $data);
        }
    }