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

            $data['eventsData'] = $this->prepareData(json_decode(file_get_contents('http://37.139.10.190:8080/anygo-ws/api/event/list?group=date')));
            
            $this->load->view('news_tape_tpl', $data);
        }

        function prepareData($eventsData){

            foreach ($eventsData->events->groups as $valAllDataEvent){

                foreach ($valAllDataEvent->event_list as $valDataEvent) {

                    $valDataEvent->min_text = $this->cutString($valDataEvent->text, 180);

                    $eventsDataObj[$valAllDataEvent->group_events_date]['event_list'][] = $valDataEvent;
 
                }   
                
            }

            return $eventsDataObj;
        }

        function cutString($string, $maxlen) {
            $len = (mb_strlen($string) > $maxlen)
                ? mb_strripos(mb_substr($string, 0, $maxlen), ' ')
                : $maxlen;

            $cutStr = mb_substr($string, 0, $len);

            return (mb_strlen($string) > $maxlen)
                ? '' . $cutStr . '...'
                : '' . $cutStr . '';
        }
    }


