<?php


class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->layout->setLayout("template");
    }

    function listaproductos() {
   
        $this->layout->view('listaproductos');
    }

    function agregar_carrito() {
        $opciones = array();
        if($this->input->post('opciones')) {
            $opciones = $this->input->post('opciones');
        }
        $data = array(
            'id' => $this->input->post('id_producto'),
            'qty' => $this->input->post('cantidad'),
            'price' => $this->input->post('precio_producto'),
            'name' => $this->input->post('nombre_producto'),
            'options' => $opciones
        );
        $this->cart->insert($data);
        redirect('product/carrito');
    }
    
    function carrito() {
     
        $this->layout->view('carrito');
    }
    
    function vaciar_carrito() {
        $this->cart->destroy();
        redirect('product/carrito');
    }
    
    function actualizar_carrito() {
        $rows = $this->input->post('rowid');
        $cantidades = $this->input->post('qty');
        $data = array();
        
        for ($i = 0; $i < sizeof($rows); $i++) {
            $data[] = array(
                'rowid' => $rows[$i],
                'qty' => $cantidades[$i]
            );
        }
        
        $this->cart->update($data);
        redirect('product/carrito');
    }

}