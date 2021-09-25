$(function () {

    $("#btn_add_destaques").click(function () {
        clearErrors();
        $("#form_destaques")[0].reset();
        $("#destaque_img_path").attr("src", "");
        $("#modal_destaques").modal();
    });

    $("#btn_add_servicos").click(function () {
        clearErrors();
        $("#form_servicos")[0].reset();
        $("#servico_img_path").attr("src", "");
        $("#modal_servicos").modal();
    });

    $("#btn_add_parceiros").click(function () {
        clearErrors();
        $("#form_parceiro")[0].reset();
        $("#parceiro_img_path").attr("src", "");
        $("#modal_parceiros").modal();
    });

    $("#btn_add_membro").click(function () {
        clearErrors();
        $("#form_membro")[0].reset();
        $("#membro_photo_path").attr("src", "");
        $("#modal_membros").modal();
    });

    $("#btn_add_user").click(function () {
        $("#form_user")[0].reset();
        $("#modal_user").modal();
    })

});

$("#btn_upload_destaque_img").change(function () {
    uploadImg($(this), $("#destaque_img_path"), $("#destaque_img"));
});

$("#btn_upload_servico_img").change(function () {
    uploadImg($(this), $("#servico_img_path"), $("#servico_img"));
});

$("#btn_upload_parceiro_img").change(function () {
    uploadImg($(this), $("#parceiro_img_path"), $("#parceiro_img"));
});

$("#btn_upload_membro_photo").change(function () {
    uploadImg($(this), $("#membro_photo_path"), $("#membro_photo"));
});

$("#form_destaques").submit(function () {

    $.ajax({
        type: "POST",
        url: BASE_URL + "restrita/ajax_save_destaque",
        dataType: "json",
        data: $(this).serialize(),
        beforeSend: function () {
            clearErrors();
            $("#btn_save_destaque").siblings(".help-block").html(loadingImg("Verificando..."));

        },
        success: function (response) {
            clearErrors();
            if (response["status"]) {
                $("#modal_destaques").modal("hide");
                swal("Sucesso!","Destaque salvo com sucesso!", "success");
                dt_destaque.ajax.reload();
            } else {
                showErrorsModal(response["error_list"])
            }
        }


    });
    return false;
});

$("#form_servicos").submit(function () {

    $.ajax({
        type: "POST",
        url: BASE_URL + "restrita/ajax_save_servico",
        dataType: "json",
        data: $(this).serialize(),
        beforeSend: function () {
            clearErrors();
            $("#btn_save_servico").siblings(".help-block").html(loadingImg("Verificando..."));

        },
        success: function (response) {
            clearErrors();
            if (response["status"]) {
                $("#modal_servicos").modal("hide");
                swal("Sucesso!","Serviço salvo com sucesso!", "success");
                dt_servico.ajax.reload();
            } else {
                showErrorsModal(response["error_list"])
            }
        }


    });
    return false;
});

$("#form_parceiro").submit(function () {

    $.ajax({
        type: "POST",
        url: BASE_URL + "restrita/ajax_save_parceiro",
        dataType: "json",
        data: $(this).serialize(),
        beforeSend: function () {
            clearErrors();
            $("#btn_save_parceiro").siblings(".help-block").html(loadingImg("Verificando..."));

        },
        success: function (response) {
            clearErrors();
            if (response["status"]) {
                $("#modal_parceiros").modal("hide");
                swal("Sucesso!","Parceiro salvo com sucesso!", "success");
                dt_parceiro.ajax.reload();
            } else {
                showErrorsModal(response["error_list"])
            }
        }


    });
    return false;
});


$("#form_membro").submit(function () {

    $.ajax({
        type: "POST",
        url: BASE_URL + "restrita/ajax_save_membro",
        dataType: "json",
        data: $(this).serialize(),
        beforeSend: function () {
            clearErrors();
            $("#btn_save_membro").siblings(".help-block").html(loadingImg("Verificando..."));

        },
        success: function (response) {
            clearErrors();
            if (response["status"]) {
                $("#modal_membros").modal("hide");
                swal("Sucesso!","Membro salvo com sucesso!", "success");
                dt_membros.ajax.reload();
            } else {
                showErrorsModal(response["error_list"])
            }
        }


    });
    return false;
});

$("#form_user").submit(function () {

    $.ajax({
        type: "POST",
        url: BASE_URL + "restrita/ajax_save_user",
        dataType: "json",
        data: $(this).serialize(),
        beforeSend: function () {
            clearErrors();
            $("#btn_save_user").siblings(".help-block").html(loadingImg("Verificando..."));

        },
        success: function (response) {
            clearErrors();
            if (response["status"]) {
                $("#modal_user").modal("hide");
                swal("Sucesso!","Usuário salvo com sucesso!", "success");
                dt_users.ajax.reload();
            } else {
                showErrorsModal(response["error_list"])
            }
        }


    });
    return false;
});

$("#btn_your_user").click(function () {

    $.ajax({
        type: "POST",
        url: BASE_URL + "restrita/ajax_get_user_data",
        dataType: "json",
        data: {"user_id": $(this).attr("user_id")},
        success: function (response) {
            clearErrors();
            $("#form_user")[0].reset();
            $.each(response["input"], function (id, value) {
                $("#" + id).val(value);
            });
            $("#modal_user").modal();
        }
    });

    return false;
});


function active_btn_destaque() {

    $(".btn-edit-destaque").click(function () {
        $.ajax({
            type: "POST",
            url: BASE_URL + "restrita/ajax_get_destaques_data",
            dataType: "json",
            data: {"destaque_id": $(this).attr("destaque_id")},
            success: function (response) {
                clearErrors();
                $("#form_destaques")[0].reset();
                $.each(response["input"], function (id, value) {
                    $("#" + id).val(value);
                });

                $("#destaque_img_path").attr("src", response["img"]["destaque_img"]);

                $("#modal_destaques").modal();
            }
        })
    });

    $(".btn-del-destaque").click(function(){

        destaque_id = $(this);
        swal({
            title: "Atenção!",
            text: "Deseja excluir esse destaque?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d9534f",
            confirmButtonText: "Sim",
            cancelButtontext: "Não",
            closeOnConfirm: true,
            closeOnCancel: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: BASE_URL + "restrita/ajax_delete_destaques_data",
                    dataType: "json",
                    data: {"destaque_id": destaque_id.attr("destaque_id")},
                    success: function(response) {
                        swal("Sucesso!", "Ação executada com sucesso", "success");
                        dt_destaque.ajax.reload();
                    }
                })
            }
        })

    });

}

function active_btn_servico() {

    $(".btn-edit-servico").click(function () {
        $.ajax({
            type: "POST",
            url: BASE_URL + "restrita/ajax_get_servicos_data",
            dataType: "json",
            data: {"servico_id": $(this).attr("servico_id")},
            success: function (response) {
                clearErrors();
                $("#form_servicos")[0].reset();
                $.each(response["input"], function (id, value) {
                    $("#" + id).val(value);
                });

                $("#servico_img_path").attr("src", response["img"]["servico_img"]);

                $("#modal_servicos").modal();
            }
        });
    });

    $(".btn-del-servico").click(function(){

        servico_id = $(this);
        swal({
            title: "Atenção!",
            text: "Deseja excluir esse serviço?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d9534f",
            confirmButtonText: "Sim",
            cancelButtontext: "Não",
            closeOnConfirm: true,
            closeOnCancel: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: BASE_URL + "restrita/ajax_delete_servicos_data",
                    dataType: "json",
                    data: {"servico_id": servico_id.attr("servico_id")},
                    success: function(response) {
                        swal("Sucesso!", "Ação executada com sucesso", "success");
                        dt_servico.ajax.reload();
                    }
                })
            }
        })

    });

}

function active_btn_parceiro() {

    $(".btn-edit-parceiro").click(function () {
        $.ajax({
            type: "POST",
            url: BASE_URL + "restrita/ajax_get_parceiros_data",
            dataType: "json",
            data: {"parceiro_id": $(this).attr("parceiro_id")},
            success: function (response) {
                clearErrors();
                $("#form_parceiro")[0].reset();
                $.each(response["input"], function (id, value) {
                    $("#" + id).val(value);
                });

                $("#parceiro_img_path").attr("src", response["img"]["parceiro_img"]);

                $("#modal_parceiros").modal();
            }
        });
    });

    $(".btn-del-parceiro").click(function(){

        parceiro_id = $(this);
        swal({
            title: "Atenção!",
            text: "Deseja excluir esse parceiro?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d9534f",
            confirmButtonText: "Sim",
            cancelButtontext: "Não",
            closeOnConfirm: true,
            closeOnCancel: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: BASE_URL + "restrita/ajax_delete_parceiros_data",
                    dataType: "json",
                    data: {"parceiro_id": parceiro_id.attr("parceiro_id")},
                    success: function(response) {
                        swal("Sucesso!", "Ação executada com sucesso", "success");
                        dt_parceiro.ajax.reload();
                    }
                })
            }
        })

    });

}

function active_btn_membros() {

    $(".btn-edit-membro").click(function () {
        $.ajax({
            type: "POST",
            url: BASE_URL + "restrita/ajax_get_membros_data",
            dataType: "json",
            data: {"membro_id": $(this).attr("membro_id")},
            success: function (response) {
                clearErrors();
                $("#form_membro")[0].reset();
                $.each(response["input"], function (id, value) {
                    $("#" + id).val(value);
                });

                $("#membro_photo_path").attr("src", response["img"]["membro_photo"]);

                $("#modal_membros").modal();
            }
        })
    });

    $(".btn-del-membro").click(function(){

        membro_id = $(this);
        swal({
            title: "Atenção!",
            text: "Deseja excluir esse membro?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d9534f",
            confirmButtonText: "Sim",
            cancelButtontext: "Não",
            closeOnConfirm: true,
            closeOnCancel: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: BASE_URL + "restrita/ajax_delete_membros_data",
                    dataType: "json",
                    data: {"membro_id": membro_id.attr("membro_id")},
                    success: function(response) {
                        swal("Sucesso!", "Ação executada com sucesso", "success");
                        dt_membros.ajax.reload();
                    }
                })
            }
        })

    });

}


function active_btn_users() {

    $(".btn-edit-user").click(function () {
        $.ajax({
            type: "POST",
            url: BASE_URL + "restrita/ajax_get_user_data",
            dataType: "json",
            data: {"user_id": $(this).attr("user_id")},
            success: function (response) {
                clearErrors();
                $("#form_user")[0].reset();
                $.each(response["input"], function (id, value) {
                    $("#" + id).val(value);
                });

                $("#modal_user").modal();
            }
        })
    });

    $(".btn-del-user").click(function(){

        user_id = $(this);
        swal({
            title: "Atenção!",
            text: "Deseja excluir esse usuário?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d9534f",
            confirmButtonText: "Sim",
            cancelButtontext: "Não",
            closeOnConfirm: true,
            closeOnCancel: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: BASE_URL + "restrita/ajax_delete_user_data",
                    dataType: "json",
                    data: {"user_id": user_id.attr("user_id")},
                    success: function(response) {
                        swal("Sucesso!", "Ação executada com sucesso", "success");
                        dt_users.ajax.reload();
                    }
                })
            }
        })

    });

}


var dt_destaque = $("#dt_destaques").DataTable({
    "oLanguage": DATATABLE_PTBR,
    "autoWidth": false,
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": BASE_URL + "restrita/ajax_list_destaque",
        "type": "POST",
    },
    "columnDefs": [
        {targets: "no-sort", orderable: false},
        {targets: "dt-center", className: "dt-center"}
    ],
    "drawCallback": function () {
        active_btn_destaque();
    }
});


var dt_servico = $("#dt_servicos").DataTable({
    "oLanguage": DATATABLE_PTBR,
    "autoWidth": false,
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": BASE_URL + "restrita/ajax_list_servicos",
        "type": "POST",
    },
    "columnDefs": [
        {targets: "no-sort", orderable: false},
        {targets: "dt-center", className: "dt-center"}
    ],
    "drawCallback": function () {
        active_btn_servico();
    }
});

let dt_parceiro = $("#dt_parceiros").DataTable({
    "oLanguage": DATATABLE_PTBR,
    "autoWidth": false,
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": BASE_URL + "restrita/ajax_list_parceiros",
        "type": "POST",
    },
    "columnDefs": [
        {targets: "no-sort", orderable: false},
        {targets: "dt-center", className: "dt-center"}
    ],
    "drawCallback": function () {
        active_btn_parceiro();
    }

});

let dt_membros = $("#dt_equipe").DataTable({
    "oLanguage": DATATABLE_PTBR,
    "autoWidth": false,
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": BASE_URL + "restrita/ajax_list_membros",
        "type": "POST",
    },
    "columnDefs": [
        {targets: "no-sort", orderable: false},
        {targets: "dt-center", className: "dt-center"}
    ],
    "drawCallback": function () {
        active_btn_membros();
    }
});


let dt_users = $("#dt_users").DataTable({
    "oLanguage": DATATABLE_PTBR,
    "autoWidth": false,
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": BASE_URL + "restrita/ajax_list_users",
        "type": "POST",
    },
    "columnDefs": [
        {targets: "no-sort", orderable: false},
        {targets: "dt-center", className: "dt-center"},
    ],
    "drawCallback": function () {
        active_btn_users();
    }

});




