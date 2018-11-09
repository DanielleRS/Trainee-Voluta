<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

    public function index() {
        $this -> load -> view('template/Html-header');
        $this -> load -> view('template/Header');
        $this -> load -> view('Galeria'); //carrega o arquivo home dentro da pasta view
        $this -> load -> view('template/footer');
    }
}
?>