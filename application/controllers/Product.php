<?php
class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index()
    {
        $data['title'] = 'Product List';
        $data['products'] = $this->product_model->get_product();
        $this->load->view('product_view', $data);
    }

    public function add_new()
    {
        $this->load->view('add_product_view');
    }

    public function save()
    {
        $product_name = $this->input->post('product_name');
        $product_price = $this->input->post('product_price');
        $this->product_model->save($product_name,$product_price);
        redirect('product');
    }

    public function get_edit()
    {
        $product_id = $this->uri->segment(3);
        $result = $this->product_model->get_product_id($product_id);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(
                'product_id' => $i['product_id'],
                'product_name' => $i['product_name'],
                'product_price' => $i['product_price']
            );
            $this->load->view('edit_product_view',$data);
        } else {
            echo "Data Was not Found";
        }
    }

    public function update()
    {
        $product_id = $this->input->post('product_id');
        $product_name = $this->input->post('product_name');
        $product_price = $this->input->post('product_price');
        $this->product_model->update($product_id,$product_name,$product_price);
        redirect('product');
    }

    public function delete()
    {
        $product_id = $this->uri->segment(3);
        $this->product_model->delete($product_id);
        redirect(product);
    }
}