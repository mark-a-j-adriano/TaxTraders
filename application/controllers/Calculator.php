<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {

	 public function index()
    {
		$this->compute_sum();
    }
	 
		public function compute_sum()
    {
      
        $form_data = $this->input->post();
        $value = $this->input->post("input");
		$code = (string) $value;
		$len = strlen($code);
		$digits =  "";
		$sum = 0;

		$index = ($this->input->post('sbm') == "even") ? 1 : 0;
		$inc = ($this->input->post('sbm') == "all") ? 1 : 2;

			
		for ($x = $index; $x < $len; $x += $inc) {
			$num = (int) $code{$x};
			$digits = $digits . $num . ",";
			$sum += $num;
		}	

		$result = "Your input : " . $code . "<br>". $this->input->post('sbm') . "-indexed digits are [" . rtrim($digits,",");
		$data['sum'] =  is_null($value) ? "" : $result. "] <br> SUM : " . $sum; 
		$this->load->view('calculator', $data);    

    }
}
