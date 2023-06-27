<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title']="Orah Pharmacy";
		$this->load->view('home',$data);
	}
	
	public function category()
	{
		$data['title']="Category";
		$this->load->view('category',$data);
	}

	public function cart()
	{
		$data['title']="cart";
		$this->load->view('cart',$data);
	}

	
	public function productpage()
	{
		$data['title']="productpage";
		$this->load->view('productpage',$data);
	}

	
	
	public function checkout()
	{
		$data['title']="checkout";
		$this->load->view('checkout',$data);
	}
	public function test(){
		echo "Hello Imran, I am your new Mentor";
	}
	
	public function imran(){
		echo "Hello Ali, I acknowledge yo as my Mentor. pleae guide me in PHP.";
	}


	
}
