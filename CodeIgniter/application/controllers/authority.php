<?php

class Authority extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        session_start();

        $this->load->helper(array('url', 'form'));

    }

    public function index()
    {

        if (@$_SESSION['authority'])
            redirect('system');

        $this->load->view('authority.php');

    }

    public function log_in()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('mail', 'mail', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $this->form_validation->set_error_delimiters('', '<br>');

        if ($this->form_validation->run()) {

            $this->load->model('model_system_user');

            if ($this->model_system_user->log_in())
                redirect('system');

            else
                $this->load->view('authority.php', array('message' =>
                        'Please check your mail and password.'));

        } else
            $this->load->view('authority.php');

    }

    public function log_out()
    {

        $this->load->model('model_system_user');

        $this->model_system_user->log_out();

        redirect('authority');

    }

    function sign_up()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('mail', 'mail', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required'); // |matches[confirmation]
        $this->form_validation->set_rules('confirmation', 'confirmation', 'required'); // |matches[confirmation]
        $this->form_validation->set_rules('name', 'name', 'required');

        $this->form_validation->set_error_delimiters('', '<br>');

        if ($this->form_validation->run()) {

            $this->load->model('model_system_user');

            if ($this->model_system_user->insert() == true) {
                redirect('authority/log_in');
            } else {
                $this->load->view('authority.php', array('message' =>
                        'Email address must be unique. The email address you entered already in use.',
                        '...'));
            }

        } else
            $this->load->view('authority.php', array('message', '...'));

    }

    function request_password()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('mail', 'mail', 'required|valid_email');

        if ($this->form_validation->run()) {

            $this->load->model('model_system_user');
            if ($this->model_system_user->check() != false) {
                if ($this->model_system_user->request_password() == true) {
                    $this->load->view('authority.php', array('message' =>
                            'Require passwords retrieve email. Please follow the instructions in the email.',
                            'forgot' => true));
                }
            } else {
                $this->load->view('authority.php', array('message' =>
                            'The requested member could not be found.',
                            'forgot' => true));
            }

        } else {
            $this->load->view('authority.php', array('message', 'forgot' => false));
        }
    }

}

?>
