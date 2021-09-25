<?php

class Restrita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }

    public function index()
    {
        if ($this->session->userdata("user_id")) {
            $data = array(
                "scripts" => array(
                    "sweetalert2.all.min.js",
                    "bootstrap.js",
                    "dataTables.bootstrap.min.js",
                    "datatables.min.js",
                    "util.js",
                    "login.js",
                    "restrita.js"
                ),
                "styles" => array(
                    "bootstrap.css",
                    "style.css",
                    "dataTables.bootstrap.min.css",
                    "datatables.min.css"
                ),

                "user_id" => $this->session->userdata("user_id")
            );
            $this->template->show("area-restrita", $data);
        } else {
            $data = array(
                "scripts" => array(
                    "util.js",
                    "login.js"
                ),
                "styles" => array(
                    "bootstrap.css",
                    "style.css"
                )
            );
            $this->template->show("login", $data);
        }
    }

    public function logoff()
    {
        $this->session->sess_destroy();
        header("Location: " . base_url() . "restrita");
    }

    public function ajax_login()
    {
        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["error_list"] = array();

        $username = $this->input->post("username");
        $password = $this->input->post("password");

        if (empty($username)) {
            $json["status"] = 0;
            $json["error_list"]["#username"] = "Usuário não pode ser vazio!";
        } else {
            $this->load->model("users_model");
            $result = $this->users_model->get_user_data($username);
            if ($result) {
                $user_id = $result->user_id;
                $password_hash = $result->password_hash;
                if (password_verify($password, $password_hash)) {
                    $this->session->set_userdata("user_id", $user_id);
                } else {
                    $json["status"] = 0;
                }
            } else {
                $json["status"] = 0;
            }
            if ($json["status"] == 0) {
                $json["error_list"]["#btn_login"] = "Usuário e/ou senha incorretos!";
            }
        }

        echo json_encode($json);

    }

    public function ajax_import_image()
    {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $config["upload_path"] = "./tmp/";
        $config["allowed_types"] = "gif|png|jpg";
        $config["overwrite"] = TRUE;

        $this->load->library("upload", $config);

        $json = array();
        $json["status"] = 1;

        if (!$this->upload->do_upload("image_file")) {
            $json["status"] = 0;
            $json["error"] = $this->upload->display_errors("", "");
        } else {
            if ($this->upload->data()["file_size"] <= 5120) {
                $file_name = $this->upload->data()["file_name"];
                $json["img_path"] = base_url() . "tmp/" . $file_name;
            } else {
                $json["status"] = 0;
                $json["error"] = "Arquivo não deve ser maior que 5 MB!";
            }

        }

        echo json_encode($json);
    }

    public function ajax_save_destaque()
    {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["error_list"] = array();

        $this->load->model("destaques_model");

        $data = $this->input->post();

        if (empty($data["destaque_titulo"])) {
            $json["error_list"]["#destaque_titulo"] = "Titulo é obrigatório!";
        } else {
            if ($this->destaques_model->is_duplicated("destaque_titulo", $data["destaque_titulo"], $data["destaque_id"])) {
                $json["error_list"]["#destaque_titulo"] = "Titulo já existente!";
            }
        }

        if (!empty($json["error_list"])) {
            $json["status"] = 0;
        } else {

            if (!empty($data["destaque_img"])) {

                $file_name = basename($data["destaque_img"]);
                $old_path = getcwd() . "/tmp/" . $file_name;
                $new_path = getcwd() . "/public/assets/imagens/carousel/" . $file_name;
                rename($old_path, $new_path);

                $data["destaque_img"] = "/public/assets/imagens/carousel/" . $file_name;

            } else {
                unset($data["destaque_img"]);
            }

            if (empty($data["destaque_id"])) {
                $this->destaques_model->insert($data);
            } else {
                $destaque_id = $data["destaque_id"];
                unset($data["destaque_id"]);
                $this->destaques_model->update($destaque_id, $data);
            }
        }

        echo json_encode($json);
    }

    public function ajax_save_servico()
    {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["error_list"] = array();

        $this->load->model("servicos_model");

        $data = $this->input->post();

        if (empty($data["servico_nome"])) {
            $json["error_list"]["#servico_nome"] = "Nome do Serviço é obrigatório!";
        } else {
            if ($this->servicos_model->is_duplicated("servico_nome", $data["servico_nome"], $data["servico_id"])) {
                $json["error_list"]["#servico_nome"] = "Serviço já existente!";
            }
        }

        if (!empty($json["error_list"])) {
            $json["status"] = 0;
        } else {

            if (!empty($data["servico_img"])) {

                $file_name = basename($data["servico_img"]);
                $old_path = getcwd() . "/tmp/" . $file_name;
                $new_path = getcwd() . "/public/assets/imagens/servicos/" . $file_name;
                rename($old_path, $new_path);

                $data["servico_img"] = "/public/assets/imagens/servicos/" . $file_name;

            } else {
                unset($data["servico_img"]);
            }

            if (empty($data["servico_id"])) {
                $this->servicos_model->insert($data);
            } else {
                $servico_id = $data["servico_id"];
                unset($data["servico_id"]);
                $this->servicos_model->update($servico_id, $data);
            }
        }

        echo json_encode($json);
    }

    public function ajax_save_parceiro()
    {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["error_list"] = array();

        $this->load->model("parceiros_model");

        $data = $this->input->post();

        if (empty($data["parceiro_nome"])) {
            $json["error_list"]["#parceiro_nome"] = "Nome do Parceiro é obrigatório!";
        } else {
            if ($this->parceiros_model->is_duplicated("parceiro_nome", $data["parceiro_nome"], $data["parceiro_id"])) {
                $json["error_list"]["#parceiro_nome"] = "Parceiro já existente!";
            }
        }

        if (!empty($json["error_list"])) {
            $json["status"] = 0;
        } else {

            if (!empty($data["parceiro_img"])) {

                $file_name = basename($data["parceiro_img"]);
                $old_path = getcwd() . "/tmp/" . $file_name;
                $new_path = getcwd() . "/public/assets/imagens/parceiros/" . $file_name;
                rename($old_path, $new_path);

                $data["parceiro_img"] = "/public/assets/imagens/parceiros/" . $file_name;

            } else {
                unset($data["parceiro_img"]);
            }

            if (empty($data["parceiro_id"])) {
                $this->parceiros_model->insert($data);
            } else {
                $parceiro_id = $data["parceiro_id"];
                unset($data["parceiro_id"]);
                $this->parceiros_model->update($parceiro_id, $data);
            }
        }

        echo json_encode($json);
    }

    public function ajax_save_membro()
    {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["error_list"] = array();

        $this->load->model("equipe_model");

        $data = $this->input->post();

        if (empty($data["membro_nome"])) {
            $json["error_list"]["#membro_nome"] = "Nome do membro é obrigatório!";
        }

        if (!empty($json["error_list"])) {
            $json["status"] = 0;
        } else {

            if (!empty($data["membro_photo"])) {

                $file_name = basename($data["membro_photo"]);
                $old_path = getcwd() . "/tmp/" . $file_name;
                $new_path = getcwd() . "/public/assets/imagens/equipe/" . $file_name;
                rename($old_path, $new_path);

                $data["membro_photo"] = "/public/assets/imagens/equipe/" . $file_name;

            } else {
                unset($data["membro_photo"]);
            }

            if (empty($data["membro_id"])) {
                $this->equipe_model->insert($data);
            } else {
                $membro_id = $data["membro_id"];
                unset($data["membro_id"]);
                $this->equipe_model->update($membro_id, $data);
            }
        }

        echo json_encode($json);
    }

    public function ajax_save_user() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["error_list"] = array();

        $this->load->model("users_model");

        $data = $this->input->post();

        if (empty($data["user_login"])) {
            $json["error_list"]["#user_login"] = "Login é obrigatório!";
        } else {
            if ($this->users_model->is_duplicated("user_login", $data["user_login"], $data["user_id"])) {
                $json["error_list"]["#user_login"] = "Login já existente!";
            }
        }

        if (empty($data["user_full_name"])) {
            $json["error_list"]["#user_full_name"] = "Nome Completo é obrigatório!";
        }

        if (empty($data["user_email"])) {
            $json["error_list"]["#user_email"] = "E-mail é obrigatório!";
        } else {
            if ($this->users_model->is_duplicated("user_email", $data["user_email"], $data["user_id"])) {
                $json["error_list"]["#user_email"] = "E-mail já existente!";
            } else {
                if ($data["user_email"] != $data["user_email_confirm"]) {
                    $json["error_list"]["#user_email"] = "";
                    $json["error_list"]["#user_email_confirm"] = "E-mails não conferem!";
                }
            }
        }

        if (empty($data["user_password"])) {
            $json["error_list"]["#user_password"] = "Senha é obrigatório!";
        } else {
            if ($data["user_password"] != $data["user_password_confirm"]) {
                $json["error_list"]["#user_password"] = "";
                $json["error_list"]["#user_password_confirm"] = "Senha não conferem!";
            }
        }

        if (!empty($json["error_list"])) {
            $json["status"] = 0;
        } else {

            $data["password_hash"] = password_hash($data["user_password"], PASSWORD_DEFAULT);

            unset($data["user_password"]);
            unset($data["user_password_confirm"]);
            unset($data["user_email_confirm"]);

            if (empty($data["user_id"])) {
                $this->users_model->insert($data);
            } else {
                $user_id = $data["user_id"];
                unset($data["user_id"]);
                $this->users_model->update($user_id, $data);
            }
        }

        echo json_encode($json);
    }

    public function ajax_get_user_data() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["input"] = array();

        $this->load->model("users_model");

        $user_id = $this->input->post("user_id");
        $data = $this->users_model->get_data($user_id)->result_array()[0];
        $json["input"]["user_id"] = $data["user_id"];
        $json["input"]["user_login"] = $data["user_login"];
        $json["input"]["user_full_name"] = $data["user_full_name"];
        $json["input"]["user_email"] = $data["user_email"];
        $json["input"]["user_email_confirm"] = $data["user_email"];
        $json["input"]["user_password"] = $data["password_hash"];
        $json["input"]["user_password_confirm"] = $data["password_hash"];


        echo json_encode($json);
    }

    public function ajax_delete_user_data() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;

        $this->load->model("users_model");

        $user_id = $this->input->post("user_id");
        $this->users_model->delete($user_id)->result_array()[0];


        echo json_encode($json);
    }

    public function ajax_list_destaque() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $this->load->model("destaques_model");
        $destaques = $this->destaques_model->get_datatable();

        $data = array();
        foreach ($destaques as $destaque) {

            $row = array();
            $row[] = $destaque->destaque_titulo;

            $row[] = '<div class="description">'.$destaque->destaque_descricao.'</div>';

            if ($destaque->destaque_img) {
                $row[] = '<img src="'.base_url().$destaque->destaque_img.'" style="max-height: 100px; max-width: 100px;">';
            } else {
                $row[] = "";
            }

            $row[] = '<div style="display: inline-block;">
						<button class="btn btn-primary btn-edit-destaque" destaque_id="'.$destaque->destaque_id.'">
							<i class="fa fa-edit"></i>
						</button>
						<button class="btn btn-danger btn-del-destaque" destaque_id="'.$destaque->destaque_id.'">
							<i class="fa fa-times"></i>
						</button>
					</div>';

            $data[] = $row;

        }

        $json = array(
            "draw" => $this->input->post("draw"),
            "recordsTotal" => $this->destaques_model->records_total(),
            "recordsFiltered" => $this->destaques_model->records_filtered(),
            "data" => $data,
        );

        echo json_encode($json);
    }

    public function ajax_list_servicos() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $this->load->model("servicos_model");
        $servicos = $this->servicos_model->get_datatable();

        $data = array();
        foreach ($servicos as $servico) {

            $row = array();
            $row[] = $servico->servico_nome;

            $row[] = '<div class="description">'.$servico->servico_descricao.'</div>';

            if ($servico->servico_img) {
                $row[] = '<img src="'.base_url().$servico->servico_img.'" style="max-height: 100px; max-width: 100px;">';
            } else {
                $row[] = "";
            }

            $row[] = '<div style="display: inline-block;">
						<button class="btn btn-primary btn-edit-servico" servico_id="'.$servico->servico_id.'">
							<i class="fa fa-edit"></i>
						</button>
						<button class="btn btn-danger btn-del-servico" servico_id="'.$servico->servico_id.'">
							<i class="fa fa-times"></i>
						</button>
					</div>';

            $data[] = $row;

        }

        $json = array(
            "draw" => $this->input->post("draw"),
            "recordsTotal" => $this->servicos_model->records_total(),
            "recordsFiltered" => $this->servicos_model->records_filtered(),
            "data" => $data,
        );

        echo json_encode($json);
    }

    public function ajax_list_parceiros() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $this->load->model("parceiros_model");
        $parceiros = $this->parceiros_model->get_datatable();

        $data = array();
        foreach ($parceiros as $parceiro) {

            $row = array();
            $row[] = $parceiro->parceiro_nome;


            if ($parceiro->parceiro_img) {
                $row[] = '<img src="'.base_url().$parceiro->parceiro_img.'" style="max-height: 100px; max-width: 100px;">';
            } else {
                $row[] = "";
            }

            $row[] = '<div class="description">'.$parceiro->parceiro_descricao.'</div>';

            $row[] = $parceiro->parceiro_url;

            $row[] = '<div style="display: inline-block;">
						<button class="btn btn-primary btn-edit-parceiro" parceiro_id="'.$parceiro->parceiro_id.'">
							<i class="fa fa-edit"></i>
						</button>
						<button class="btn btn-danger btn-del-parceiro" parceiro_id="'.$parceiro->parceiro_id.'">
							<i class="fa fa-times"></i>
						</button>
					</div>';

            $data[] = $row;

        }

        $json = array(
            "draw" => $this->input->post("draw"),
            "recordsTotal" => $this->parceiros_model->records_total(),
            "recordsFiltered" => $this->parceiros_model->records_filtered(),
            "data" => $data,
        );

        echo json_encode($json);
    }


    public function ajax_list_membros() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $this->load->model("equipe_model");
        $equipe = $this->equipe_model->get_datatable();

        $data = array();
        foreach ($equipe as $membro) {

            $row = array();
            $row[] = $membro->membro_nome;


            if ($membro->membro_photo) {
                $row[] = '<img src="'.base_url().$membro->membro_photo.'" style="max-height: 100px; max-width: 100px;">';
            } else {
                $row[] = '<img src="'.base_url()."public/assets/imagens/outras/nophoto.jpg".'" style="max-height: 100px; max-width: 100px;">';
            }

            $row[] = '<div class="description">'.$membro->membro_descricao.'</div>';


            $row[] = '<div style="display: inline-block;">
						<button class="btn btn-primary btn-edit-membro" membro_id="'.$membro->membro_id.'">
							<i class="fa fa-edit"></i>
						</button>
						<button class="btn btn-danger btn-del-membro" membro_id="'.$membro->membro_id.'">
							<i class="fa fa-times"></i>
						</button>
					</div>';

            $data[] = $row;

        }

        $json = array(
            "draw" => $this->input->post("draw"),
            "recordsTotal" => $this->equipe_model->records_total(),
            "recordsFiltered" => $this->equipe_model->records_filtered(),
            "data" => $data,
        );

        echo json_encode($json);
    }

    public function ajax_list_users() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $this->load->model("users_model");
        $users = $this->users_model->get_datatable();

        $data = array();
        foreach ($users as $user) {

            $row = array();
            $row[] = $user->user_login;
            $row[] = $user->user_full_name;
            $row[] = $user->user_email;

            $row[] = '<div style="display: inline-block;">
						<button class="btn btn-primary btn-edit-user" 
							user_id="'.$user->user_id.'">
							<i class="fa fa-edit"></i>
						</button>
						<button class="btn btn-danger btn-del-user" 
							user_id="'.$user->user_id.'">
							<i class="fa fa-times"></i>
						</button>
					</div>';

            $data[] = $row;

        }

        $json = array(
            "draw" => $this->input->post("draw"),
            "recordsTotal" => $this->users_model->records_total(),
            "recordsFiltered" => $this->users_model->records_filtered(),
            "data" => $data,
        );

        echo json_encode($json);
    }

    public function ajax_get_destaques_data() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["input"] = array();

        $this->load->model("destaques_model");

        $destaque_id = $this->input->post("destaque_id");
        $data = $this->destaques_model->get_data($destaque_id)->result_array()[0];
        $json["input"]["destaque_id"] = $data["destaque_id"];
        $json["input"]["destaque_titulo"] = $data["destaque_titulo"];
        $json["input"]["destaque_descricao"] = $data["destaque_descricao"];

        $json["img"]["destaque_img"] = base_url().$data["destaque_img"];

        echo json_encode($json);
    }

    public function ajax_delete_destaques_data() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;

        $this->load->model("destaques_model");

        $destaque_id = $this->input->post("destaque_id");
        $this->destaques_model->delete($destaque_id)->result_array()[0];

        echo json_encode($json);
    }

    public function ajax_get_servicos_data() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["input"] = array();

        $this->load->model("servicos_model");

        $servico_id = $this->input->post("servico_id");
        $data = $this->servicos_model->get_data($servico_id)->result_array()[0];
        $json["input"]["servico_id"] = $data["servico_id"];
        $json["input"]["servico_nome"] = $data["servico_nome"];
        $json["input"]["servico_descricao"] = $data["servico_descricao"];

        $json["img"]["servico_img"] = base_url().$data["servico_img"];

        echo json_encode($json);
    }

    public function ajax_delete_servicos_data() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;

        $this->load->model("servicos_model");

        $servico_id = $this->input->post("servico_id");
        $this->servicos_model->delete($servico_id)->result_array()[0];

        echo json_encode($json);
    }

    public function ajax_get_parceiros_data() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["input"] = array();

        $this->load->model("parceiros_model");

        $parceiro_id = $this->input->post("parceiro_id");
        $data = $this->parceiros_model->get_data($parceiro_id)->result_array()[0];
        $json["input"]["parceiro_id"] = $data["parceiro_id"];
        $json["input"]["parceiro_nome"] = $data["parceiro_nome"];
        $json["input"]["parceiro_descricao"] = $data["parceiro_descricao"];
        $json["input"]["parceiro_url"] = $data["parceiro_url"];

        $json["img"]["parceiro_img"] = base_url().$data["parceiro_img"];

        echo json_encode($json);
    }

    public function ajax_delete_parceiros_data() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;

        $this->load->model("parceiros_model");

        $parceiro_id = $this->input->post("parceiro_id");
        $this->parceiros_model->delete($parceiro_id)->result_array()[0];

        echo json_encode($json);
    }

    public function ajax_get_membros_data() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["input"] = array();

        $this->load->model("equipe_model");

        $membro_id = $this->input->post("membro_id");
        $data = $this->equipe_model->get_data($membro_id)->result_array()[0];
        $json["input"]["membro_id"] = $data["membro_id"];
        $json["input"]["membro_nome"] = $data["membro_nome"];
        $json["input"]["membro_descricao"] = $data["membro_descricao"];

        $json["img"]["membro_photo"] = base_url().$data["membro_photo"];

        echo json_encode($json);
    }

    public function ajax_delete_membros_data() {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["input"] = array();

        $this->load->model("equipe_model");

        $membro_id = $this->input->post("membro_id");
        $this->equipe_model->delete($membro_id)->result_array()[0];

        echo json_encode($json);
    }

}