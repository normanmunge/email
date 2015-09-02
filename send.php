<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class send extends CI_Controller {

	public function contactus()
	{       
          
		$this->data['content'] = 'contact';
		$this->data['title'] = 'Home | Kidosho';
		$this->_load_view();
	}
	

	public function send(){
        //validation rules        
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
        
        $this->form_validation->set_message('name', 'Please fill in this field');
        $this->form_validation->set_message('email', 'Fill in a valid email');
        $this->form_validation->set_message('message', 'Please fill in this field');
        
        if($this->form_validation->run() == TRUE){
            
                $name = $this->input->post('name');
                $message = $this->input->post('message');
                $email = $this->input->post('email');
               
                $this->email->from($email, $name);
                $this->email->to('sending_email@you.com', 'To name');
                $this->email->subject('Subject');
                $this->email->message($message);
                
                $send = $this->email->send();
		if(/*!$mail->send()*/ !$send) {
                    echo "Mailer Error: " . $this->email->print_debugger();
			//redirect(base_url().'send/contactus','refresh');
		} else {

			$this->data['content'] = 'success';
			$this->data['title'] = 'Email Successfully Sent';
			$this->contactus();
		}
                }else{
                    $this->contactus();
                }
	
       
        }
}
