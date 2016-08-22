<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'mahasiswa/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'mahasiswa/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'mahasiswa/index.html';
            $config['first_url'] = base_url() . 'mahasiswa/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Mahasiswa_model->total_rows($q);
        $mahasiswa = $this->Mahasiswa_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
                'mahasiswa_data' => $mahasiswa,
                'q' => $q,
                'pagination' => $this->pagination->create_links(),
                'total_rows' => $config['total_rows'],
                'start' => $start,
            );
        $this->load->view('mahasiswa/mahasiswa_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);
        if ($row) {
            $data = array(
                'nim' => $row->nim,
                'nama' => $row->nama,
                'jenis_kelamin' => $row->jenis_kelamin,
                'prodi' => $row->prodi,
                'alamat' => $row->alamat,
                );
            $this->load->view('mahasiswa/mahasiswa_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Mahasiswa'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('mahasiswa/create_action'),
            'nim' => set_value('nim'),
            'nama' => set_value('nama'),
            'jenis_kelamin' => set_value('jenis_kelamin'),
            'prodi' => set_value('prodi'),
            'alamat' => set_value('alamat'),
        );
        $this->load->view('mahasiswa/mahasiswa_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'nim' => $this->input->post('nim',TRUE),
                'nama' => $this->input->post('nama',TRUE),
                'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
                'prodi' => $this->input->post('prodi',TRUE),
                'alamat' => $this->input->post('alamat',TRUE),
                );

            $this->Mahasiswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('mahasiswa'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mahasiswa/update_action'),
                'nim' => set_value('nim', $row->nim),
                'nama' => set_value('nama', $row->nama),
                'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
                'prodi' => set_value('prodi', $row->prodi),
                'alamat' => set_value('alamat', $row->alamat),
                );
            $this->load->view('mahasiswa/mahasiswa_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mahasiswa'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('nim', TRUE));
        } else {
            $data = array(
                'nama' => $this->input->post('nama',TRUE),
                'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
                'prodi' => $this->input->post('prodi',TRUE),
                'alamat' => $this->input->post('alamat',TRUE),
                );

            $this->Mahasiswa_model->update($this->input->post('nim', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('mahasiswa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $this->Mahasiswa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('mahasiswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mahasiswa'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
    $this->form_validation->set_rules('prodi', 'prodi', 'trim|required');
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');

    $this->form_validation->set_rules('nim', 'nim', 'trim|required');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
