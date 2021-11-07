<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud {

    private $CI;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    public function inup($rules,$view,$data)
    {
        
        $this->CI->form_validation->set_rules($rules['rules'], $rules['rules'],'required');
        
        if ($this->CI->form_validation->run() == FALSE)
        {
            $this->CI->load->view('overview_admin',$view);
        }
        else
        {
            $model =$rules['model'];
            $table=$rules['table'];
            $field=$rules['rules'];
            $image=$rules['image'];
            $redirect=$rules['redirect'];
            if ($rules['crud'] == "input") {
                if ($image) {
                    $path=$rules['path'];
                    $data['foto']=$this->CI->Admin_model->upload_foto($path);
                }
                $this->CI->Admin_model->$model($data,$table);
            }elseif ($rules['crud'] == "update") {
                $id=$rules['id'];
                if ($image) {
                    if (!empty($_FILES['foto']['name'])) {
                        $path=$rules['path'];
                        $data['foto']=$this->CI->Admin_model->upload_foto($path);
                    } else {
                        $data['foto']=$rules['old_image'];
                    }
                }
                $this->CI->Admin_model->$model($data,$table,$field,$id);
            }
            redirect(base_url($redirect));
        }
    }
}