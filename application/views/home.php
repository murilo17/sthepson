<!-- Menu Navegação -->
<nav class="navbar navbar-expand-lg navbar-light navegacao" id="menuHeader">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url('public/assets/imagens/outras/logo1.svg') ?>" class="img-fluid"
                 alt="Sthepson - Recursos Humanos">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto menu">
                <li class="nav-item">
                    <a class="nav-link" href="#carousel-example-2"><i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sobre">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#parceiros">Parceiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#equipe">Equipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://drive.google.com/drive/folders/1BYNwJBNij26mj5rv3ifMvP_EBDpgg-hM?usp=sharing" target="_blank">Publicações</a>
                </li>

                <a class="btn btn-outline-secondary ml-3" href="<?php echo base_url('restrita') ?>">Área Restrita</a>

            </ul>
        </div>
    </div>
</nav>
<!-- Final Menu Navegação -->

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade slide" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <?php if ($cont_destaques == 1) { ?>
            
        <?php } ?>
        <?php if ($cont_destaques == 2) { ?>
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <?php } ?>
        <?php if ($cont_destaques > 2) { ?>
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        <?php } ?>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <?php
        if (!empty($destaques)) {
            foreach ($destaques as $destaque) {
                ?>
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block h-25"
                             src="<?= base_url() . $destaque["destaque_img"]; ?>"
                             alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive"><?= $destaque["destaque_titulo"]; ?></h3>
                        <p><?= $destaque["destaque_descricao"]; ?></p>
                    </div>
                </div>

                <?php
            }//Chave Foreach
        }//Chave IF
        ?>
        <?php

        if (!empty($destaques2)) {
            foreach ($destaques2 as $destaque2) {
                ?>
                <div class="carousel-item">
                    <div class="view">
                        <img class="d-block h-25"
                             src="<?= base_url() . $destaque2["destaque_img"]; ?>"
                             alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive"><?= $destaque2["destaque_titulo"]; ?></h3>
                        <p><?= $destaque2["destaque_descricao"]; ?></p>
                    </div>
                </div>

                <?php
            }//Chave Foreach
        }//Chave IF
        ?>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <?php if ($cont_destaques > 1) { ?>
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <?php } ?>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<!-- SESSION SOBRE-->
<section id="sobre" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Sobre Nós</h2>
                    <p>
                        Oferecemos uma estrutura especializada e com valores pautados na Ética, Legalidade, Entusiasmo,
                        Compromisso e Transparência em nossas ações. Somos uma empresa que atua no mercado desde 2009.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php

            if (!empty($servicos)) {
                foreach ($servicos as $servico) {
                    ?>

                    <!-- about module -->
                    <div class="col-md-3 text-center">
                        <div class="mz-module-about">
                            <img class="img-thumbnail mb-3" src="<?= base_url() . $servico["servico_img"]; ?>"
                                 alt="<?= $servico["servico_nome"]; ?>">
                            <h3><?= $servico["servico_nome"]; ?></h3>
                            <p><?= $servico["servico_descricao"]; ?></p>
                        </div>
                    </div>
                    <!-- end about module -->

                    <!-- Fim Pareveiros item -->
                    <?php
                }//Chave Foreach
            }//Chave IF
            ?>

        </div>
    </div>
    <!-- /.container -->
</section>
<!-- FIM SESSION SOBRE-->

<!-- SESSION Numeros -->
<section class="overlay-dark bg-img1 dark-bg short-section">
    <div class="container text-center">
        <div class="row">

            <div class="col-md-4 mb-sm-30">
                <div class="counter-item">
                    <h2 data-count="1054"><?= $cont_parceiros ?></h2>
                    <h6>Parceiros</h6>
                </div>
            </div>
            <div class="col-md-4 mb-sm-30">
                <div class="counter-item">
                    <h2 data-count="34"><?= $cont_equipe ?></h2>
                    <h6>Equipe</h6>
                </div>
            </div>
            <div class="col-md-4 mb-sm-30">
                <div class="counter-item">
                    <h2 data-count="154"><?= $cont_servicos ?></h2>
                    <h6>Serviços</h6>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- FIM SESSION Numeros -->

<!-- SESSION Parceiros -->
<section id="parceiros" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Parceiros</h2>
                    <p>Nossos parceiros são a melhor maneira de mostrar nosso trabalho,</p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php

            if (!empty($parceiros)) {
                foreach ($parceiros as $parceiro) {
                    ?>
                    <!-- Parceiros item -->
                    <div class="col-md-4">
                        <div class="ot-portfolio-item">
                            <figure class="effect-bubba">
                                <img src="<?= base_url() . $parceiro["parceiro_img"]; ?>"

                                     alt="img02"
                                     class="img-responsive center-block"/>
                                <figcaption>
                                    <a href="#" data-toggle="modal"
                                       data-target="#parceiro_<?= $parceiro["parceiro_id"] ?>">Veja Mais</a>
                                </figcaption>
                            </figure>
                        </div>

                        <!-- Modal Parceiros -->
                        <div class="modal fade" id="parceiro_<?= $parceiro["parceiro_id"] ?>" tabindex="-1"
                             role="dialog" aria-labelledby="Modal-label-1">

                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="Modal-label-1"><?= $parceiro["parceiro_nome"]; ?>
                                            &nbsp;</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?= base_url() . $parceiro["parceiro_img"]; ?>" alt="img01"
                                             class="img-responsive"/>
                                        <span><a href="<?= $parceiro["parceiro_url"]; ?>" target="_blank"
                                                 class="btn btn-warning center-block m-2">Ir para página</a> </span>
                                        <p><?= $parceiro["parceiro_descricao"]; ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Fim Pareveiros item -->
                    <?php
                }//Chave Foreach
            }//Chave IF
            ?>
        </div>
    </div><!-- end container -->
</section>
<!-- FIM SESSION PARCEIROS -->


<!-- SESSION Equipe -->
<section id="equipe" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Nossa Equipe</h2>
                    <p>Trazemos como diferencial para o mercado, profissionais qualificados que buscam a excelência no
                        desenvolvimento de suas atividades, agregando a capacidade e adequando-se nas reais necessidades
                        de nossos clientes</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php

            if (!empty($equipe)) {
                foreach ($equipe as $membro) {
                    ?>
                    <!-- team member item -->
                    <div class="col-md-3">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="<?= base_url() . $membro["membro_photo"]; ?>"
                                     class="img-responsive img-thumbnail mb-2" alt="author">
                            </div>
                            <div class="team-text">
                                <h3><?= $membro["membro_nome"]; ?></h3>
                                <p><?= $membro["membro_descricao"]; ?>.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end team member item -->
                    <!-- Fim Pareveiros item -->
                    <?php
                }//Chave Foreach
            }//Chave IF
            ?>

        </div>
    </div>
</section>
<!-- FIM SESSION Equipe -->

<!-- SESSION Contato -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Contatos</h2>
                    <p>Se você tiver alguma dúvida ou precisar de ajuda! Por favor, entre em contato conosco!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Nosso escritório de trabalho</h3>
                <p>Rua João Batista Ferreira, 15</p>
                <p>CEP: 58970-000 Conceição - PB</p>
                <p><i class="fa fa-phone"></i> (83) 3453-1091</p>
                <p><i class="fa fa-phone"></i> (83) 99668-0554</p>
                <p><i class="fa fa-envelope"></i> administracao@sthepson.com.br</p>
            </div>
            <div class="col-md-3">
                <h3>Horário comercial</h3>
                <p><i class="fa fa-clock-o"></i> <span class="day">Dias úteis:</span><span>8:00 as 18:00</span></p>
                <p><i class="fa fa-clock-o"></i> <span class="day">Sábados:</span><span>Fechado</span></p>
                <p><i class="fa fa-clock-o"></i> <span class="day">Domingos:</span><span>Fechado</span></p>
            </div>
            <div class="col-md-6">
                <form action="https://formspree.io/murilo.eta@gmail.com" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control" placeholder="Seu Nome *" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="telefone" class="form-control" placeholder="Seu Telefone *"
                                       required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Seu Email *"
                                       required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="mensagem" class="form-control" placeholder="Sua Messagem *"
                                          required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <input type="text" name="_gotcha" style="display:none"/>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-dark">Enviar Menssagem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- FIM SESSION Contato -->

<p id="back-top" class="box">
    <a href="#carousel-example-2"><i class="fa fa-angle-up"></i></a>
</p>

<script type="text/javascript">
    $("#telefone").mask("(00) 00000-0000");
</script>
