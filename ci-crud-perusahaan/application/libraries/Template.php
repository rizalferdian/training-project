<?php
class Template
{
  var $_ci;

  function __construct() 
  {
    $this->_ci =& get_instance();
  }

  public function view($content, $data = null)
  {
    $template['_css'] = $this->_ci->load->view('_layout/_css', '', true);
    $template['_nav'] = $this->_ci->load->view('_layout/_nav', '', true);
    $template['_script'] = $this->_ci->load->view('_layout/_script', '', true);
    $template['_content'] = $this->_ci->load->view($content, $data, true);
    $this->_ci->load->view('_layout/template', $template);
  }
  
  public function view_login($content, $data = null)
  {
    $template['_css'] = $this->_ci->load->view('_layout/_css', '', true);
    $template['_nav'] = $this->_ci->load->view('_layout/_nav', '', true);
    $template['_script'] = $this->_ci->load->view('_layout/_script', '', true);
    $template['_content'] = $this->_ci->load->view($content, $data, true);
    $this->_ci->load->view('_layout/template_login', $template);
  }

}

?>