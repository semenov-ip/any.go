<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

    class News_tape extends CI_Controller {
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

            $eventsData = file_get_contents('http://37.139.10.190:8080/anygo-ws/api/event/list');

            $eventsData = json_decode($eventsData);

            $data['eventsData'] = $eventsData->events->list;

            $this->load->view('news_tape_tpl', $data);
        }
    }