<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notfound extends CI_Controller {

    public function index()
    {
        $this->output->set_status_header('404');
        $data['content'] = 'error_404'; // View name
        $this->load->view('404page',$data);//load view
    }
}