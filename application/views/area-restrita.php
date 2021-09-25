<!-- Menu Navegação -->
<nav class="navbar navbar-default navegacao2">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url('public/assets/imagens/outras/logo.svg') ?>" class="img-fluid"
                     alt="Sthepson - Recursos Humanos">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-right form-group" style="margin-top: 20px;">
            <a href="https://sthepson.com.br:2096/" target="_blank" class="btn btn-default">Acessar E-mail</a>
            <a href="#" id="btn_your_user" class="btn btn-default" user_id="<?=$user_id ?>"><i class="fa fa-user"></i>&nbsp; Usuário </a>
            <a href="<?php echo base_url() ?>restrita/logoff" class="btn btn-default"><i class="fa fa-sign-out"></i>&nbsp;
                Sair </a>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- Final Menu Navegação -->

<!-- SESSION Tabs-->
<section style="min-height: calc(100vh - 163px); " class="light-bg">
    <div class="container">

        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_destaques" role="tab" data-toggle="tab">Destaques</a></li>
            <li><a href="#tab_servicos" role="tab" data-toggle="tab">Serviços</a></li>
            <li><a href="#tab_parceiros" role="tab" data-toggle="tab">Parceiros</a></li>
            <li><a href="#tab_equipe" role="tab" data-toggle="tab">Membros da Equipe</a></li>
            <li><a href="#tab_user" role="tab" data-toggle="tab">Usuários</a></li>
        </ul>

        <div class="tab-content">
            <div id="tab_destaques" class="tab-pane active">
                <div class="container-fluid">
                    <h2 class="text-center"><strong>Gerenciar Destaques</strong></h2>
                    <p><a id="btn_add_destaques" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Destaque</i></a></p>
                    <table id="dt_destaques" class="table table-striped table-bordered">
                        <thead>
                        <tr class="tableheader">
                            <th class="dt-center">Titulo </th>
                            <th class="no-sort">Descrição </th>
                            <th class="dt-center no-sort">Imagem </th>
                            <th class="dt-center no-sort">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab_servicos" class="tab-pane">
                <div class="container-fluid">
                    <h2 class="text-center"><strong>Gerenciar Serviços</strong></h2>
                    <p><a id="btn_add_servicos" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Serviço</i></a></p>
                    <table id="dt_servicos" class="table table-striped table-bordered">
                        <thead>
                        <tr class="tableheader">
                            <th class="dt-center">Nome </th>
                            <th class="no-sort">Descrição </th>
                            <th class="dt-center no-sort">Imagem </th>
                            <th class="dt-center no-sort">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab_parceiros" class="tab-pane">
                <div class="container-fluid">
                    <h2 class="text-center"><strong>Gerenciar Parceiros</strong></h2>
                    <p><a id="btn_add_parceiros" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Parceiro</i></a></p>
                    <table id="dt_parceiros" class="table table-striped table-bordered">
                        <thead>
                        <tr class="tableheader">
                            <th class="dt-center">Nome </th>
                            <th class="dt-center no-sort">Imagem </th>
                            <th class="no-sort">Descrição </th>
                            <th class="no-sort">URL</th>
                            <th class="dt-center no-sort">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab_equipe" class="tab-pane">
                <div class="container-fluid">
                    <h2 class="text-center"><strong>Gerenciar Equipe</strong></h2>
                    <p><a id="btn_add_membro" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Membro</i></a></p>
                    <table id="dt_equipe" class="table table-striped table-bordered">
                        <thead>
                        <tr class="tableheader">
                            <th class="dt-center">Nome</th>
                            <th class="dt-center no-sort">Foto</th>
                            <th class="no-sort">Descrição</th>
                            <th class="dt-center no-sort">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab_user" class="tab-pane">
                <div class="container-fluid">
                    <h2 class="text-center"><strong>Gerenciar Usuários</strong></h2>
                    <p><a id="btn_add_user" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Usuário</i></a></p>
                    <table id="dt_users" class="table table-striped table-bordered">
                        <thead>
                        <tr class="tableheader">
                            <th>Login</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th class="dt-center no-sort">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.container -->

</section><!-- FIM SESSION Tabs-->

<!-- Modal Destaques -->
<div id="modal_destaques" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">Adicionar Destaque</h4>
            </div>

            <div class="modal-body">
                <form id="form_destaques" method="post">

                    <input id="destaque_id" name="destaque_id" hidden>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Titulo: </label>
                        <div class="col-lg-10">
                            <input id="destaque_titulo" name="destaque_titulo" class="form-control" maxlength="255">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Imagem: </label>
                        <div class="col-lg-10">
                            <img id="destaque_img_path" src="" style="max-height: 400px;">
                            <label class="btn btn-block btn-info">
                                <i class="fa fa-upload"></i>&nbsp;&nbsp;Importar imagem
                                <input type="file" id="btn_upload_destaque_img" accept="image/*" style="display: none;">
                            </label>
                            <input id="destaque_img" name="destaque_img" hidden>
                            <span class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 control-label">Descrição: </label>
                        <div class="col-lg-10">
                            <textarea id="destaque_descricao" name="destaque_descricao" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_destaque" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Serviços -->
<div id="modal_servicos" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">Adicionar Serviço</h4>
            </div>

            <div class="modal-body">
                <form id="form_servicos">

                    <input id="servico_id" name="servico_id" hidden>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome: </label>
                        <div class="col-lg-10">
                            <input id="servico_nome" name="servico_nome" class="form-control" maxlength="255">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Imagem: </label>
                        <div class="col-lg-10">
                            <img id="servico_img_path" src="" style="max-height: 400px;">
                            <label class="btn btn-block btn-info">
                                <i class="fa fa-upload"></i>&nbsp;&nbsp;Importar imagem
                                <input type="file" id="btn_upload_servico_img" accept="image/*" style="display: none;">
                            </label>
                            <input id="servico_img" name="servico_img" hidden>
                            <span class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 control-label">Descrição: </label>
                        <div class="col-lg-10">
                            <textarea id="servico_descricao" name="servico_descricao" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_servico" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Parceiros -->
<div id="modal_parceiros" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">Adicionar Parceiro</h4>
            </div>

            <div class="modal-body">
                <form id="form_parceiro">

                    <input id="parceiro_id" name="parceiro_id" hidden>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome: </label>
                        <div class="col-lg-10">
                            <input id="parceiro_nome" name="parceiro_nome" class="form-control" maxlength="255">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Imagem: </label>
                        <div class="col-lg-10">
                            <img id="parceiro_img_path" src="" style="max-height: 400px;">
                            <label class="btn btn-block btn-info">
                                <i class="fa fa-upload"></i>&nbsp;&nbsp;Importar imagem
                                <input type="file" id="btn_upload_parceiro_img" accept="image/*" style="display: none;">
                            </label>
                            <input id="parceiro_img" name="parceiro_img" hidden>
                            <span class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 control-label">Descrição: </label>
                        <div class="col-lg-10">
                            <textarea id="parceiro_descricao" name="parceiro_descricao" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">URL: </label>
                        <div class="col-lg-10">
                            <input id="parceiro_url" name="parceiro_url" class="form-control" maxlength="255">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_parceiro" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Equipe -->
<div id="modal_membros" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">Adicionar Membro</h4>
            </div>

            <div class="modal-body">
                <form id="form_membro">

                    <input id="membro_id" name="membro_id" hidden>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome: </label>
                        <div class="col-lg-10">
                            <input id="membro_nome" name="membro_nome" class="form-control" maxlength="255">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Foto: </label>
                        <div class="col-lg-10">
                            <img id="membro_photo_path" src="" style="max-height: 400px;">
                            <label class="btn btn-block btn-info">
                                <i class="fa fa-upload"></i>&nbsp;&nbsp;Importar foto
                                <input type="file" id="btn_upload_membro_photo" accept="image/*" style="display: none;">
                            </label>
                            <input id="membro_photo" name="membro_photo" hidden>
                            <span class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 control-label">Descrição: </label>
                        <div class="col-lg-10">
                            <textarea id="membro_descricao" name="membro_descricao" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_membro" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Usuário -->
<div id="modal_user" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">Adicionar Usuário</h4>
            </div>

            <div class="modal-body">
                <form id="form_user">

                    <input id="user_id" name="user_id" hidden>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Login</label>
                        <div class="col-lg-10">
                            <input id="user_login" name="user_login" class="form-control" maxlength="30">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome Completo</label>
                        <div class="col-lg-10">
                            <input id="user_full_name" name="user_full_name" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">E-mail</label>
                        <div class="col-lg-10">
                            <input id="user_email" name="user_email" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Confirmar E-mail</label>
                        <div class="col-lg-10">
                            <input id="user_email_confirm" name="user_email_confirm" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Senha</label>
                        <div class="col-lg-10">
                            <input type="password" id="user_password" name="user_password" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Confirmar Senha</label>
                        <div class="col-lg-10">
                            <input type="password" id="user_password_confirm" name="user_password_confirm" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_user" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


