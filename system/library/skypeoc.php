<?php

class Skypeoc
{

    public function __construct($registry)
    {
	$this->config = $registry->get('config');
    }

    public function create($link_type = 'skype_chat', $tag = false, $class = false)
    {
        $result = '';
        if ($this->config->get('skype_gen_output') == 'standart')
        {
            if (!$tag)
            {
                $tag = $this->config->get('skype_tag');
            }
            if (!$class)
            {
                $class = $this->config->get('skype_class');
            }
            $result = '<' . $tag . ' id="' . $link_type . '" class="' . $class . '"></' . $tag . '>';
        }
        if ($this->config->get('skype_gen_output') == 'custom')
        {
	    switch ($link_type)
	    {
		case 'skype_call' :
		    $result = html_entity_decode($this->config->get('skype_custom_output_html_call'), ENT_QUOTES, 'UTF-8');
		    break;
		case 'skype_video' :
		    $result = html_entity_decode($this->config->get('skype_custom_output_html_video'), ENT_QUOTES, 'UTF-8');
		    break;
		case 'skype_chat' :
		    $result = html_entity_decode($this->config->get('skype_custom_output_html_chat'), ENT_QUOTES, 'UTF-8');
		    break;
	    }

        }
	return $result;
    }

}

?>