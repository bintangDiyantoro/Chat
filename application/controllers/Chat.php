<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{
    public function index()
    {
        if ($this->input->post('username')) {
            $user = $this->input->post('username');
            $this->session->set_userdata('name', $user);
        } else {
            $user = $this->session->userdata('name');
        }
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
        if ($this->input->post('name')) {
            $data['user'] = $this->input->post('name');
        } else {
            $data['user'] = $this->session->userdata('name');
        }

        if ($this->input->post('content') !== null) {
            $this->db->insert('message', $input);
        }
        // redirect('chat');
        $data['title'] = "Chat";
        $data['contents'] = $this->db->get('message')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('chat/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function content()
    {
        $data['contents'] = $this->db->get('message')->result_array();
        $this->load->view('content/index', $data);
    }

    public function logout()
    {
        $this->db->empty_table('message');
        $this->session->unset_userdata('username');
        redirect('/');
    }
}
