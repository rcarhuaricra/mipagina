<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller {

    public function index() {
        $datos['mensaje'] = $this->input->post();        
        $this->load->library('email');
        $this->email->from('ricv_89@hotmail.com', 'ronald Demo');
        $this->email->to('ricv_89@hotmail.com');
        $this->email->subject('contacto desde la Pagina');
        $this->email->message($this->load->view('pages/mensaje', $datos, TRUE));        
        if($this->email->send()){
            echo "mensaje enviado";
        }else{
            echo "mensaje no enviado";
        }
    }

}
