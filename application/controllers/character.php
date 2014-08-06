<?php
class Character extends CI_Controller {

	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$data = array('descriptors' => $this->firebase->get('/rules/descriptors'),
					'foci' => $this->firebase->get('/rules/focus'),
					'types' => $this->firebase->get('/rules/types'));
		$data['optionsPartial'] = "partials/options";

		$this->load->vars($data);

		$this->form_validation->set_rules('descriptor', 'Descriptor', 'trim|required|xss_clean');
		$this->form_validation->set_rules('type', 'Type', 'trim|required|xss_clean');
		$this->form_validation->set_rules('focus', 'Focus', 'trim|required|xss_clean');

		if($this->form_validation->run() === FALSE) {
			$this->load->view('characterForm');
		} else {
			$segments = array(
				'descriptor' => $this->input->post('descriptor'),
				'type' => $this->input->post('type'),
				'focus' => $this->input->post('focus')
				);
			$urlSegment = $this->uri->assoc_to_uri($segments);
			redirect('/character/sheet/' .  $urlSegment, "refresh");
		}
	}

	public function sheet()
	{

		$data = $this->uri->uri_to_assoc();
		
		$this->load->view('characterView',$data);
	}
}
?>