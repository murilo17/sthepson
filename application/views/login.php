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
            <a href="<?php echo base_url() ?>" class="btn btn-default">Voltar ao Site</a>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- Final Menu Navegação -->

<!-- Conteudo Login -->
<!-- SESSION SOBRE-->
<section style="min-height: calc(100vh - 163px); " class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                <div class="section-title">
                    <h2>Faça o login!</h2>

                    <form id="login_form" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="fa fa-user"></span>
                                        </div>
                                        <input type="text" placeholder="Usuário" name="username" id="username" class="form-control">
                                    </div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="fa fa-lock"></span>
                                        </div>
                                        <input type="password" placeholder="Senha" name="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit" id="btn_login" class="btn  btn-block btn-default">Login
                                    </button>
                                </div>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- FIM SESSION SOBRE-->
<!-- Fim Conteudo Login -->
