<?php


class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $this->load->view("admin/login");
    }


    public function profile()
    {
        $data['allNews'] = $this->Admin_model->getAll();
        $this->load->view("admin/profile",$data);
    }

    public function addNews()
    {
        $this->load->view("admin/addNews");
    }

    public function addNewsAct()
    {

    $title  = $this->input->post('title');
    $desc   = $this->input->post('desc');
    $dates  = $this->input->post('dates');

    $config['upload_path']    = 'uploads/';
    $config['allowed_types']  = 'jpg|jpeg|png|gif';
    $config['file_name']      = $_FILES['images']['name'];
    $config['max_size'] = '10000';


    $this->upload->initialize($config);

        if($this->upload->do_upload('images')){
            $uploadData = $this->upload->data();
            $pictures = $uploadData['file_name'];

            $data=array(
                'title'      =>$title,
                'description'=>$desc,
                'date'       =>$dates,
                'image'      =>$pictures,
            );

            $this->Admin_model->insert($data);

            $this->session->set_userdata('success', 'succesful download');

            redirect("Admin/profile");

        }else{

            $this->session->set_userdata('err', 'download failed');

            redirect("Admin/addNews");

        }

    }

    public function adminContact()
    {
        $this->load->view("admin/admin_contact");
    }



}