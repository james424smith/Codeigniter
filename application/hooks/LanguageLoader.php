<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $ci->load->library('session');
        if($ci->session->userdata('language_key') == 1)
        {
         	$ci->lang->load('content','english');
        }
        else
        {
        	$ci->lang->load('content','french');
        }
        

    }
}