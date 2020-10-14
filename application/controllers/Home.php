<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $user = $this->session->userdata("user");
        $data['category'] = $this->db->get('category')->result();
        $data['products'] = $this->db->get('product')->result();
        $data['user'] = $this->db->where(array("contact = $user"))->get('account')->result();
		$this->load->view('public/include/header',$data);
		$this->load->view('public/index',$data);
		$this->load->view('public/include/footer');
	}
    private function checkLogin(){
        if(!$this->session->userdata("user")){
            redirect('auth/login');
        }
    }
        public function add_post(){
            $this->checkLogin();
        $data['category'] = $this->db->get('category')->result();
      

        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('description','description','required');
        $this->form_validation->set_rules('category','category','required');
        $this->form_validation->set_rules('address','address','required');
        $this->form_validation->set_rules('city','city','required');
        $this->form_validation->set_rules('state','state','required');
        $this->form_validation->set_rules('brand','brand','required');
        $this->form_validation->set_rules('model','model','required');
        $this->form_validation->set_rules('price','price','required');
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('contact','contact','required');
        $this->form_validation->set_error_delimiters("<span class=' badge rounded-0 mt-1 p-2 text-light font-weight-bold' style='background:#e84118;'>","</span>");

        if($this->form_validation->run()){

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';

            $this->load->library('upload',$config);
            if($this->upload->do_upload('image')){

            $data = [
                'title'           =>    $_POST['title'],
                'category'        =>    $_POST['category'],
                'address'         =>    $_POST['address'],
                'description'     =>    $_POST['description'],
                'city'            =>    $_POST['city'],
                'state'           =>    $_POST['state'],
                'brand'           =>    $_POST['brand'],
                'model'           =>    $_POST['model'],
                'price'           =>    $_POST['price'],
                'name'            =>    $_POST['name'],
                'contact'         =>    $_POST['contact'],
                'image'           =>    $_FILES['image']['name']
            ];
            $this->db->insert('product',$data);
            $this->session->set_flashdata('error',"data inserted successfully");
            redirect('home/index');
        }else{
        $data['error'] = $this->upload->display_errors();
        $this->load->view('public/include/header');
        $this->load->view('public/add_post',$data);
        $this->load->view('public/include/footer');
        }
    }
    else{
        
        $this->load->view('public/include/header',$data);
        $this->load->view('public/add_post',$data);
        $this->load->view('public/include/footer');
    }
}

public function product($pro_id){
    $data['product'] = $this->db->where(array("id"=>$pro_id))->get('product')->row();
    $data['products'] = $this->db->where(array("id !="=>$pro_id))->get('product')->result();
    $data['category'] = $this->db->get('category')->result();
    $this->load->view('public/include/header',$data);
    $this->load->view('public/product');
    $this->load->view('public/include/footer');
}

    
    public function category($cat_id){
        
        $data['products'] = $this->db->where(array("category"=>$cat_id))->get('product')->result();
        $data['category'] = $this->db->get('category')->result();
        $this->load->view('public/include/header',$data);
        $this->load->view('public/index',$data);
        $this->load->view('public/include/footer');
    }
    
    public function add_category(){
        $this->checkLogin();
        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('description','description','required');
        
        if($this->form_validation->run()){
            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description']
                
            ];
            $this->db->insert("category",$data);
            $this->session->set_flashdata("error","<div class='alert alert-success'>category inserted successfully</div>");
            redirect('home/add_post');
        }
    }
    
    public function search(){
        $search = $_GET['search'];
        $data['products'] = $this->db->like(array("title"=>$search))->get('product')->result();
        $data['category'] = $this->db->get('category')->result();
        $this->load->view('public/include/header',$data);
        $this->load->view('public/index',$data);
        $this->load->view('public/include/footer');
    }

    
}
