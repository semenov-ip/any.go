<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
 
    class News extends CI_Controller {
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

            $data['eventData'] = json_decode(file_get_contents('http://37.139.10.190:8080/anygo-ws/api/event/get?v=2&id=' . $_REQUEST['id']));
           
            $this->load->view('news_tpl', $data);
        }
    }