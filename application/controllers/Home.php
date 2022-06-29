<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('User');

        $this->load->library('session');
    }


    public function index()
    {
        $data['judul'] = "Tately NV.";
        $this->load->view('templates/head', $data);
        $this->load->view('home_page/index');
        $this->load->view('templates/footer');
    }

    public function loginSuperint()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->User->getByUsername($username);
        $user = $query->row();

        $userRole = $this->User->getRolebyIdUser($username);
        $role = $userRole->row();

        if ($user->username_user != $username || $user->password_user != $password) {
            redirect('home', " echo <script type='text/javascript'>alert('login gagal');</script>;");
        } else {
            $userdata = array(
                'username_user' => $user->username_user,
                'nama_user' => $user->nama_user,
                'role_user' => $role->role_user,
                'status' => 'login',
            );
            $this->session->set_userdata($userdata);
            redirect('dashboard/dashboardSuperint', 'refresh');
        }
    }

    public function loginSupervisor()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->Auth->getByUsername($username);
        $user = $query->row();

        if ($user->usernameUser != $username || $user->passwordUser != $password) {
            redirect('home', 'refresh');
        } else {
            redirect('dashboard/dashboardSupervisor', 'refresh');
        }
    }
    public function loginOperator()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->Auth->getByUsername($username);
        $user = $query->row();

        if ($user->usernameUser != $username || $user->passwordUser != $password) {
            redirect('home', 'refresh');
        } else {
            redirect('dashboard/dashboardOperator', 'refresh');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
