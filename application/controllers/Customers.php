<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	private $controller;

	/**
     * __construct: Initialize Construct
     *
     */
	public function __construct()
    {

        parent::__construct();

        $this->controller = strtolower(get_class()) ;

        $this->load->model("Customers_model");
        
	}    

  	/**
     * store: Add Customers
     *
     * @return View
     */
	 
	public function store()
	{
		
		$_post = $this->validate_post();

		$_result =  $this->Customers_model->add($_post );

		if ($_result) 

			_build_json(TRUE,'Customers Add Ok');

		else
			_build_json();	  
        
	}

	private function validate_post()
	{

		$_name = $this->input->post('name',TRUE);
		if (empty($_name)) 
			_build_json(FALSE,'Por favor, ingresar Nombre');
		$data['name'] = $_name; 

		$_last_name = $this->input->post('last_name',TRUE);
		if (empty($_last_name)) 
			_build_json(FALSE,'Por favor, ingresar Apellidos');
		$data['last_name'] = $_last_name; 


		$_dni = $this->input->post('dni',TRUE);
		if (empty($_dni)) 
			_build_json(FALSE,'Por favor, ingresar DNI');
		$data['dni'] = $_dni; 

		return $data;


	}



	/**
     * show: Load List Customers
     *
     * @return View
     */

	public function show()
	{

		$data["controller"] = $this->controller;

		$data['items'] = $this->Customers_model->get();

		$data["view"] = 'master/'.$this->controller.'/load_list';

		$this->load->view('dashboard/layout_index',$data);
		
	}
	 
	/**
     * create: Load Form Add Customers
     *
     * @return View
     */
	public function create()
	{
		$data["controller"] = $this->controller;

		$data["view"] = 'master/'.$this->controller.'/load_add';

		$this->load->view('dashboard/layout_index',$data);

	
	}
	 
	 /**
     * edit: Load Form Edit Customers
     *
     * @return View
     */
	public function edit($id)
	{
		if (!is_numeric($id)) 
			 redirect($this->controller.'/show');


		if (!$this->Customers_model->get_by_id($id))
			 exit(json_encode(array('status'=>FALSE,'message'=>'id no registrado')));


		$data['item'] = $this->Customers_model->get_by_id($id);

		$data["controller"] = $this->controller;

		$data["id"] = $id;

		$data["view"] = 'master/'.$this->controller.'/load_edit';
		
		$this->load->view('dashboard/layout_index',$data);
		
	}
	 /**
     * update: Update Customers
     *
     * @return Json
     */
	 
	public function update()
	{

 		$id = $this->input->post('id',TRUE);
    	
    	$_post = $this->validate_post();

		$_result =  $this->Customers_model->update($_post,$id);
		 
		if ($_result) 

			_build_json(TRUE,'Customers Update Ok');	

		else

			_build_json();	  
        


	}
	 /**
     * destroy: Delete Customers
     *
     * @return Json
     */
	 
	public function destroy($id)
	{
	 
		if (!is_numeric($id)) 
			 exit(json_encode(array('status'=>FALSE,'message'=>'id no valido')));
		
		if (!$this->Customers_model->get_by_id($id))
	 		exit(json_encode(array('status'=>FALSE,'message'=>'id no registrado')));

	 
    	$data['estado'] = 99;

		$_result =  $this->Customers_model->delete($data,$id);
		 
		if ($_result) 

			_build_json(TRUE,'Customers Delete Ok');	

		else

			_build_json();	  
        

	}
	 
	 



}
