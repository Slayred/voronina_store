<?php
class ControllerModuleSkypeoc extends Controller {
	private $error = array();

	public function __construct($registry)
	{
	    parent::__construct($registry);
	    define('MODULE_VERSION', '0.4');
	}

	public function index() {
		$this->load->language('module/skypeoc');

		$this->document->setTitle($this->language->get('heading_title_without_tags'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('skypeoc', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
		}

		$this->data['heading_title'] = $this->language->get('heading_title');

		$this->data['text_enabled'] = $this->language->get('text_enabled');
		$this->data['text_disabled'] = $this->language->get('text_disabled');
		$this->data['text_content_top'] = $this->language->get('text_content_top');
		$this->data['text_content_bottom'] = $this->language->get('text_content_bottom');
		$this->data['text_column_left'] = $this->language->get('text_column_left');
		$this->data['text_column_right'] = $this->language->get('text_column_right');
		$this->data['text_success_send_feedback'] = $this->language->get('text_success_send_feedback');

		$this->data['entry_skype_login'] = $this->language->get('entry_skype_login');
		$this->data['help_skype_login'] = $this->language->get('help_skype_login');
		$this->data['entry_skype_image_size'] = $this->language->get('entry_skype_image_size');
		$this->data['help_skype_image_size'] = $this->language->get('help_skype_image_size');
		$this->data['entry_skype_image_color'] = $this->language->get('entry_skype_image_color');
		$this->data['help_skype_image_color'] = $this->language->get('help_skype_image_color');
		$this->data['entry_skype_tag'] = $this->language->get('entry_skype_tag');
		$this->data['help_skype_tag'] = $this->language->get('help_skype_tag');
		$this->data['entry_skype_class'] = $this->language->get('entry_skype_class');
		$this->data['help_skype_class'] = $this->language->get('help_skype_class');
                $this->data['entry_skype_gen_output'] = $this->language->get('entry_skype_gen_output');
		$this->data['help_skype_gen_output'] = $this->language->get('help_skype_gen_output');
                $this->data['entry_skype_table_page'] = $this->language->get('entry_skype_table_page');
                $this->data['entry_skype_table_status'] = $this->language->get('entry_skype_table_status');
                $this->data['entry_skype_custom_class_call'] = $this->language->get('entry_skype_custom_class_call');
		$this->data['entry_skype_custom_class_video'] = $this->language->get('entry_skype_custom_class_video');
		$this->data['entry_skype_custom_class_chat'] = $this->language->get('entry_skype_custom_class_chat');
                $this->data['entry_skype_custom_html_call'] = $this->language->get('entry_skype_custom_html_call');
                $this->data['entry_skype_custom_html_video'] = $this->language->get('entry_skype_custom_html_video');
                $this->data['entry_skype_custom_html_chat'] = $this->language->get('entry_skype_custom_html_chat');
		$this->data['entry_skype_enable_module'] = $this->language->get('entry_skype_enable_module');
		$this->data['entry_skype_enable_all'] = $this->language->get('entry_skype_enable_all');
		$this->data['entry_skype_disable_all'] = $this->language->get('entry_skype_disable_all');
		$this->data['entry_skype_help_settings'] = $this->language->get('entry_skype_help_settings');
		$this->data['entry_skype_help_using'] = $this->language->get('entry_skype_help_using');
		$this->data['entry_skype_help_settings_sett'] = $this->language->get('entry_skype_help_settings_sett');
		$this->data['entry_skype_help_settings_desc'] = $this->language->get('entry_skype_help_settings_desc');
		$this->data['entry_skype_help_setting1'] = $this->language->get('entry_skype_help_setting1');
		$this->data['entry_skype_help_setting2'] = $this->language->get('entry_skype_help_setting2');
		$this->data['entry_skype_help_setting3'] = $this->language->get('entry_skype_help_setting3');
		$this->data['entry_skype_help_setting4'] = $this->language->get('entry_skype_help_setting4');
		$this->data['entry_skype_help_setting5'] = $this->language->get('entry_skype_help_setting5');
		$this->data['entry_skype_help_setting6'] = $this->language->get('entry_skype_help_setting6');
		$this->data['entry_skype_help_setting7'] = $this->language->get('entry_skype_help_setting7');
		$this->data['entry_skype_help_setting8'] = $this->language->get('entry_skype_help_setting8');
		$this->data['entry_skype_help_setting9'] = $this->language->get('entry_skype_help_setting9');
		$this->data['entry_skype_help_setting10'] = $this->language->get('entry_skype_help_setting10');
		$this->data['entry_skype_help_setting11'] = $this->language->get('entry_skype_help_setting11');
		$this->data['entry_skype_help_setting12'] = $this->language->get('entry_skype_help_setting12');
		$this->data['entry_skype_help_setting13'] = $this->language->get('entry_skype_help_setting13');
		$this->data['entry_skype_help_setting14'] = $this->language->get('entry_skype_help_setting14');
		$this->data['entry_skype_help_setting15'] = $this->language->get('entry_skype_help_setting15');
		$this->data['entry_skype_help_setting16'] = $this->language->get('entry_skype_help_setting16');
		$this->data['entry_skype_help_video'] = $this->language->get('entry_skype_help_video');
		$this->data['entry_skype_help_video_call'] = $this->language->get('entry_skype_help_video_call');
		$this->data['entry_skype_help_video_custom'] = $this->language->get('entry_skype_help_video_custom');
		$this->data['entry_skype_help_video_add'] = $this->language->get('entry_skype_help_video_add');
		$this->data['entry_skype_feedback_name'] = $this->language->get('entry_skype_feedback_name');
		$this->data['entry_skype_feedback_email'] = $this->language->get('entry_skype_feedback_email');
		$this->data['entry_skype_feedback_question'] = $this->language->get('entry_skype_feedback_question');
		$this->data['entry_skype_feedback_send'] = $this->language->get('entry_skype_feedback_send');

		$this->data['tab_settings'] = $this->language->get('tab_settings');
		$this->data['tab_help'] = $this->language->get('tab_help');
		$this->data['tab_callback'] = $this->language->get('tab_callback');

		$this->data['button_save'] = $this->language->get('button_save');
		$this->data['button_cancel'] = $this->language->get('button_cancel');

		$this->data['tab_module'] = $this->language->get('tab_module');

		$this->data['error_empty_skype_login'] = $this->language->get('error_empty_skype_login');
		$this->data['error_empty_skype_tag'] = $this->language->get('error_empty_skype_tag');
                $this->data['error_empty_skype_custom_html'] = $this->language->get('error_empty_skype_custom_html');
                $this->data['error_empty_skype_custom_id'] = $this->language->get('error_empty_skype_custom_id');
                $this->data['error_empty_skype_feedback_name'] = $this->language->get('error_empty_skype_feedback_name');
                $this->data['error_empty_skype_feedback_email'] = $this->language->get('error_empty_skype_feedback_email');
                $this->data['error_valid_skype_feedback_email'] = $this->language->get('error_valid_skype_feedback_email');
                $this->data['error_empty_skype_feedback_question'] = $this->language->get('error_empty_skype_feedback_question');
                $this->data['error_empty_skype_feedback_min'] = $this->language->get('error_empty_skype_feedback_min');
                $this->data['error_empty_skype_feedback_max'] = $this->language->get('error_empty_skype_feedback_max');
                $this->data['error_send_email_skype_feedback'] = $this->language->get('error_send_email_skype_feedback');
 		if (isset($this->error['warning'])) {
			$this->data['error_warning'] = $this->error['warning'];
		} else {
			$this->data['error_warning'] = '';
		}

  		$this->data['breadcrumbs'] = array();

   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => false
   		);

   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_module'),
			'href'      => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);

   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('module/skypeoc', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);

		$this->data['action'] = $this->url->link('module/skypeoc', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['send_feedback'] = $this->url->link('module/skypeoc/send_feedback');
		$this->data['token'] = $this->session->data['token'];

		$this->data['config_owner'] = $this->config->get('config_owner');
		$this->data['config_email'] = $this->config->get('config_email');
//		$this->data['modules'] = array();
//
		if (isset($this->request->post['skype_login'])) {
			$this->data['skype_login'] = $this->request->post['skype_login'];
		} elseif ($this->config->get('skype_login')) {
			$this->data['skype_login'] = $this->config->get('skype_login');
		} else
		{
		    $this->data['skype_login'] = '';
		}

		if (isset($this->request->post['skype_tag'])) {
			$this->data['skype_tag'] = $this->request->post['skype_tag'];
		} elseif ($this->config->get('skype_tag')) {
			$this->data['skype_tag'] = $this->config->get('skype_tag');
		} else
		{
		    $this->data['skype_tag'] = '';
		}

		if (isset($this->request->post['skype_class'])) {
			$this->data['skype_class'] = $this->request->post['skype_class'];
		} elseif ($this->config->get('skype_class')) {
			$this->data['skype_class'] = $this->config->get('skype_class');
		} else
		{
		    $this->data['skype_class'] = '';
		}

		if (isset($this->request->post['skype_image_size'])) {
			$this->data['skype_image_size'] = $this->request->post['skype_image_size'];
		} elseif ($this->config->get('skype_image_size')) {
			$this->data['skype_image_size'] = $this->config->get('skype_image_size');
		} else
		{
		    $this->data['skype_image_size'] = '';
		}


		if (isset($this->request->post['skype_image_color'])) {
			$this->data['skype_image_color'] = $this->request->post['skype_image_color'];
		} elseif ($this->config->get('skype_image_color')) {
			$this->data['skype_image_color'] = $this->config->get('skype_image_color');
		} else
		{
		    $this->data['skype_image_color'] = '';
		}

                if (isset($this->request->post['skype_gen_output'])) {
			$this->data['skype_gen_output'] = $this->request->post['skype_gen_output'];
		} elseif ($this->config->get('skype_gen_output')) {
			$this->data['skype_gen_output'] = $this->config->get('skype_gen_output');
		} else
		{
		    $this->data['skype_gen_output'] = '';
		}

                if (isset($this->request->post['skype_custom_output_html_call'])) {
			$this->data['skype_custom_output_html_call'] = $this->request->post['skype_custom_output_html_call'];
		} elseif ($this->config->get('skype_custom_output_html_call')) {
			$this->data['skype_custom_output_html_call'] = $this->config->get('skype_custom_output_html_call');
		} else
		{
		    $this->data['skype_custom_output_html_call'] = '';
		}

		if (isset($this->request->post['skype_custom_output_html_video'])) {
			$this->data['skype_custom_output_html_video'] = $this->request->post['skype_custom_output_html_video'];
		} elseif ($this->config->get('skype_custom_output_html_video')) {
			$this->data['skype_custom_output_html_video'] = $this->config->get('skype_custom_output_html_video');
		} else
		{
		    $this->data['skype_custom_output_html_video'] = '';
		}

		if (isset($this->request->post['skype_custom_output_html_chat'])) {
			$this->data['skype_custom_output_html_chat'] = $this->request->post['skype_custom_output_html_chat'];
		} elseif ($this->config->get('skype_custom_output_html_chat')) {
			$this->data['skype_custom_output_html_chat'] = $this->config->get('skype_custom_output_html_chat');
		} else
		{
		    $this->data['skype_custom_output_html_chat'] = '';
		}

                if (isset($this->request->post['skype_custom_output_class_call'])) {
			$this->data['skype_custom_output_class_call'] = $this->request->post['skype_custom_output_class_call'];
		} elseif ($this->config->get('skype_custom_output_class_call')) {
			$this->data['skype_custom_output_class_call'] = $this->config->get('skype_custom_output_class_call');
		} else
		{
		    $this->data['skype_custom_output_class_call'] = '';
		}

		if (isset($this->request->post['skype_custom_output_class_video'])) {
			$this->data['skype_custom_output_class_video'] = $this->request->post['skype_custom_output_class_video'];
		} elseif ($this->config->get('skype_custom_output_class_video')) {
			$this->data['skype_custom_output_class_video'] = $this->config->get('skype_custom_output_class_video');
		} else
		{
		    $this->data['skype_custom_output_class_video'] = '';
		}

		if (isset($this->request->post['skype_custom_output_class_chat'])) {
			$this->data['skype_custom_output_class_chat'] = $this->request->post['skype_custom_output_class_chat'];
		} elseif ($this->config->get('skype_custom_output_class_chat')) {
			$this->data['skype_custom_output_class_chat'] = $this->config->get('skype_custom_output_class_chat');
		} else
		{
		    $this->data['skype_custom_output_class_chat'] = '';
		}
		$this->data['skype_image_sizes'] = array(
		    '10', '12', '14', '16', '24', '32'
		);

		$this->data['skype_image_colors'] = array(
		    $this->language->get('skype_blue_color'), $this->language->get('skype_white_color')
		);

                $this->data['skype_gen_methods'] = array(
		    'standart' => $this->language->get('skype_gen_standart'), 'custom'=>$this->language->get('skype_gen_custom')
		);

		$this->data['modules'] = array();

		if (isset($this->request->post['skypeoc_module'])) {
			$this->data['modules'] = $this->request->post['skypeoc_module'];
		} elseif ($this->config->get('skypeoc_module')) {
			$this->data['modules'] = $this->config->get('skypeoc_module');
		}
		$this->load->model('design/layout');

		$this->data['layouts'] = $this->model_design_layout->getLayouts();

		$this->template = 'module/skypeoc.tpl';
		$this->children = array(
			'common/header',
			'common/footer'
		);
		$this->document->addStyle('view/stylesheet/skypeoc.css');
		$this->response->setOutput($this->render());
	}

	public function send_feedback() {
	    $result = '0';
	    if ($this->request->server['REQUEST_METHOD'] == 'POST')
	    {
		$name = trim($this->request->post['name']);
		$email = trim($this->request->post['email']);
		$question = trim($this->request->post['question']);
		if ($name AND $email AND $question)
		{
		    $text = '<html>';
		    $text .= '<body>';
		    $text .= 'Модуль: Skype для OpenCart<br/>';
		    $text .= 'Версия моделя: '.MODULE_VERSION.'<br/>';
		    $text .= 'Имя клиента: '.$name.'<br/>';
		    $text .= 'Email клиента: '.$email.'<br/>';
		    $text .= '<hr/>';
		    $text .= '<p>'.$question.'</p>';
		    $text .= '</body>';
		    $text .= '</html>';

		    $headers  = 'MIME-Version: 1.0' . "\r\n";
		    $headers .= 'Content-type: text/html; charset=utf8' . "\r\n";

		    $result = (string)mail('mak_xxx@mail.ru', 'Вопрос по модулю "Skype для OpenCart"', $text, $headers);
		}
	    }
	    echo $result;
	}

	public function install() {
	    $this->load->model('setting/setting');
	    $this->load->model('design/layout');
	    $layouts = $this->model_design_layout->getLayouts();
	    $data = array();
	    for($i=0;$i<count($layouts);$i++)
	    {
		$data['skypeoc_module'][$i]['layout_id'] = $layouts[$i]['layout_id'];
		$data['skypeoc_module'][$i]['position'] = 'content_top';
		$data['skypeoc_module'][$i]['status'] = '0';
		$data['skypeoc_module'][$i]['sort_order'] = '0';
	    }
//	    die(print_r($data));
	    $this->model_setting_setting->editSetting('skypeoc', $data);
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'module/skypeoc')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			return true;
		} else {
			return false;
		}
	}
}
?>