<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {

        $this->load->model("destaques_model");
        $destaques = $this->destaques_model->show_destaques();
        $destaques2 = $this->destaques_model->show_destaques2();
        $cont_destaques = $this->destaques_model->records_total();

        $this->load->model("parceiros_model");
        $parceiros = $this->parceiros_model->show_parceiros();
        $cont_parceiros = $this->parceiros_model->records_total();

        $this->load->model("equipe_model");
        $equipe = $this->equipe_model->show_equipe();
        $cont_equipe = $this->equipe_model->records_total();

        $this->load->model("servicos_model");
        $servicos = $this->servicos_model->show_servicos();
        $cont_servicos = $this->servicos_model->records_total();

        $data = array(
            "scripts" => array(
                "bootstrap.min.js",
                "util.js",
                "login.js"
            ),
            "styles" => array(
                "bootstrap.min.css",
                "style.css"
            ),
            "destaques" => $destaques,
            "destaques2" => $destaques2,
            "cont_destaques" => $cont_destaques,
            "parceiros" => $parceiros,
            "cont_parceiros" => $cont_parceiros,
            "equipe" => $equipe,
            "cont_equipe" => $cont_equipe,
            "servicos" => $servicos,
            "cont_servicos" => $cont_servicos
        );

        $this->template->show("home", $data);
    }
}


