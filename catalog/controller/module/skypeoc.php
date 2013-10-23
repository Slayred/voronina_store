<?php

class ControllerModuleSkypeOC extends Controller
{

    protected function index()
    {
	global $registry;
	$this->load->library('skypeoc');
	$registry->set('skypeoc', new skypeoc($registry));
        $output_method = $this->config->get('skype_gen_output');
        define('SKYPE_CALL', 'skype_call');
        define('SKYPE_VIDEO', 'skype_video');
        define('SKYPE_CHAT', 'skype_chat');

	$this->document->addStyle('catalog/view/theme/default/stylesheet/skypeoc.css');
	$this->data['skype_login'] = $this->config->get('skype_login');

	if ($output_method == 'custom')
        {
            if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/skypeoc_custom.tpl'))
            {
                $this->template = $this->config->get('config_template') . '/template/module/skypeoc_custom.tpl';
            }
            else
            {
                $this->template = 'default/template/module/skypeoc_custom.tpl';
            }
            $this->data['skype_custom_class_call'] = $this->config->get('skype_custom_output_class_call');
	    $this->data['skype_custom_class_video'] = $this->config->get('skype_custom_output_class_video');
	    $this->data['skype_custom_class_chat'] = $this->config->get('skype_custom_output_class_chat');
        }
        if ($output_method == 'standart')
        {
            $this->document->addScript('catalog/view/javascript/skype-uri.js');

            if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/skypeoc.tpl'))
            {
                $this->template = $this->config->get('config_template') . '/template/module/skypeoc.tpl';
            }
            else
            {
                $this->template = 'default/template/module/skypeoc.tpl';
            }

            if ($this->config->get('skype_image_color') == $this->language->get('skype_white_color'))
            {
                $this->data['skype_image_color'] = 'white';
            }
            else
            {
                $this->data['skype_image_color'] = 'blue';
            }
            $this->data['skype_image_size'] = $this->config->get('skype_image_size');
        }

	$this->render();
    }

}

?>