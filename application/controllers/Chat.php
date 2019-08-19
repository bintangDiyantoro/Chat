<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{
    public function index()
    {
        $this->session->set_userdata('name', $this->input->post('username'));
        $user = $this->session->userdata('name');
        $data['user'] = $user;
        $data['title'] = "Chat";
        $data['contents'] = $this->db->get('message')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('chat/index', $data);
        $this->load->view('templates/footer', $data);
    }
    public function send()
    {
        $input = ['name' => $this->input->post('name'), 'content' => $this->input->post('content')];
        $data['user'] = $this->input->post('name');
        $this->db->insert('message', $input);
        // redirect('chat');
        $data['title'] = "Chat";
        $data['contents'] = $this->db->get('message')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('chat/index', $data);
        $this->load->view('templates/footer', $data);
    }
    public function logout()
    {
        $this->db->empty_table('message');
        $this->session->unset_userdata('username');
        redirect('/');
    }
}
