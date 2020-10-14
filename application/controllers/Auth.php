
<?php

class Auth extends CI_controller{
    public function login(){
        $data['category'] = $this->db->get('category')->result();
        
        $this->form_validation->set_rules('contact','contact','required');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run()){
            $data = [
                'contact' => $_POST['contact'],
                'password' => md5($_POST['password'])
            ];
            
            $count = $this->db->where($data)->get('account')->num_rows();
            
            if($count > 0 ){
                $this->session->set_userdata("user",$_POST['contact']);
                redirect("home/index");
            }
            else{
                $this->session->set_flashdata("error","incorrect password and username");
                redirect("auth/login");
            }
            
        }
        else{
            $this->session->set_flashdata("error","login invalid");
        
        $this->load->view('public/include/header', $data);
        $this->load->view('auth/login');
        $this->load->view('public/include/footer');
    }
    }
    
    public function signup(){
        $data['category'] = $this->db->get('category')->result();
        
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('contact','contact','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('city','city','required');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('confirm_password','confirm_password','required|matches[password]');
        
        if($this->form_validation->run()){
            $data = [
                'name'  => $_POST['name'],
                'contact'  => $_POST['contact'],
                'email'  => $_POST['email'],
                'city'  => $_POST['city'],
                'password'  => md5($_POST['password']),
            ];
            
            $this->db->insert('account',$data);
            $this->session->set_userdata("user",$_POST['contact']);
            redirect("auth/login");
        }
        
        $this->load->view('public/include/header', $data);
        $this->load->view('auth/signup');
        $this->load->view('public/include/footer');
    
    }
    
    public function logout(){
        $this->session->unset_userdata("user");
        redirect('auth/login');
    }
}



?>