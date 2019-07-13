function userAddAction() {
    var url = 'api/warga/createUser';
    var type = 'POST';
    var userData = {
        t_user_type: $('[name="t_user_type"]').val(),
        t_nama: $('[name="t_nama"]').val(),
        t_tempat_lahir: $('[name="t_tempat_lahir"]').val(),
        t_tgl_lahir: $('[name="t_tgl_lahir"]').val(),
        t_agama: $('[name="t_agama"]').val(),
        t_pekerjaan: $('[name="t_pekerjaan"]').val(),
        t_alamat: $('[name="t_alamat"]').val(),
        t_email: $('[name="t_email"]').val(),
        t_password: $('[name="t_password"]').val()
    }
    console.log(userData);
    var beforeSendAction = function() {
        $("#addUser").text("Loading").attr('disabled', '');
    }
    var successAction = function(response) {
        if (response.status === true) {
            var message = response.message
            var dataAlert = {
                alertType: "success",
                alertTitle: "Sukses!!",
                alertMessage: message,
            }
            openAlert(dataAlert);
            userListShow();
            $("#addUser").text("Add User").removeAttr('disabled');
        } else {
            var message = response.status
            console.log(response);
            var dataAlert = {
                alertType: "danger",
                alertTitle: "Gagal!!",
                alertMessage: message,
            }
            $("#addUser").text("Add User").removeAttr('disabled');
            openAlert(dataAlert);
        }
    }
    var errorAction = function(response) {
        var message = response.responseJSON.message
        console.log(response)
        var dataAlert = {
            alertType: "danger",
            alertTitle: "Gagal!!",
            alertMessage: message,
        }
        openAlert(dataAlert);
        userListShow();
        $("#addUser").text("Add User").removeAttr('disabled');
    }
    if ($('[name="t_id"]').val() == "" || $('[name="t_nama"]').val() == "") {
        openAlert({
            alertType: "warning",
            alertTitle: "Warning",
            alertMessage: "Tidak bisa mengirim form kosong",
        });
    } else {
        // send ajax
        ajaxSendJSON(url, type, userData, beforeSendAction, successAction, errorAction);
    }
}

function AddUser() {
    $("#addUser").on("click", function() {
        userAddAction();
    })
}

function editUserAction(t_id) {
    var url = 'api/warga';
    var type = 'PUT';
    var userData = {
        t_id: t_id,
        t_user_type: $('[name="t_user_type"]').val(),
        t_nama: $('[name="t_nama"]').val(),
        t_tempat_lahir: $('[name="t_tempat_lahir"]').val(),
        t_tgl_lahir: $('[name="t_tgl_lahir"]').val(),
        t_agama: $('[name="t_agama"]').val(),
        t_pekerjaan: $('[name="t_pekerjaan"]').val(),
        t_alamat: $('[name="t_alamat"]').val(),
        t_email: $('[name="t_email"]').val(),
        t_password: $('[name="t_password"]').val()
    }

    var successAction = function(response) {
        if (response.status === true) {
            var message = response.message
            var dataAlert = {
                alertType: "success",
                alertTitle: "Sukses!!",
                alertMessage: message,
            }
            openAlert(dataAlert);
            userListShow();
            $('#userEdit').removeAttr('disabled');
        }
    }

    var beforeSendAction = function() {
        console.log('Loading Fetching..')
    }

    var errorAction = function(response) {
        var message = response.responseJSON.message
        console.log(response);
        var dataAlert = {
            alertType: 'danger',
            alertTitle: 'Gagal!!',
            alertMessage: message
        }
        $('#userEdit').removeAttr('disabled');
        openAlert(dataAlert);
    }

    if ($('[name="t_id"]').val() == "" || $('[name="t_nama"]').val() == "") {
        openAlert({
            alertType: "warning",
            alertTitle: "Warning",
            alertMessage: "Tidak bisa mengirim form kosong",
        });
    } else {
        // send ajax
        ajaxSendJSON(url, type, userData, beforeSendAction, successAction, errorAction);
    }
}

function editUser() {
    $('#editUser').on("click", function() {
        var t_id = $(this).attr("data-id");
        editUserAction(t_id);
        $(this).attr('disabled', '');
    })
}


function userListShowAction() {
    var url = "api/warga";
    var data = {};
    var type = "GET";
    var successAction = function(response) {
        console.log(response);
        var status = response.status;
        var data = response.data;
        var htmlDOM = "";
        var tableHeadArray = ["No", "Nama", "TTL", "Agama", "Pekerjaan", "Alamat", "email", "Action"];
        var targetDOM = $("#userListShow");

        if (status === true) {
            htmlDOM += "<table class='play-data-table table-hover table table-border'><thead class='bg-tabel'>";
            htmlDOM += "<tr style='color:#222;text-align:center'>"
            for (var i = 0; i < tableHeadArray.length; i++) {
                htmlDOM += "<th>" + tableHeadArray[i] + "</th>";
            }
            htmlDOM += "</tr></thead>";
            htmlDOM += "<tbody>";
            var j = 1;
            for (var i = 0; i < data.length; i++) {
                htmlDOM += "<tr class='editable-row' data-id='" + data[i].t_id + "'>";
                htmlDOM += "<td class='text-center'>" + j + "</td>";
                htmlDOM += "<td><span><div class='truncate'>" + data[i].t_nama + "</div></span></td>";
                htmlDOM += "<td><span><div class='truncate'>" + data[i].t_tempat_lahir + " , " + data[i].t_tgl_lahir + "</div></span></td>";
                htmlDOM += "<td><span><div class='truncate'>" + data[i].t_agama + "</div></span></td>";
                htmlDOM += "<td><span><div class='truncate'>" + data[i].t_pekerjaan + "</div></span></td>";
                htmlDOM += "<td><span><div class='truncate'>" + "VILLA MUTIARA GADING 2 BLOK B.1 NO. " + data[i].t_alamat + " RT.010/008, KEL.KARANGSATRIA. KEC.TAMBUN UTARA" + "</div></span></td>";
                htmlDOM += "<td><span><div class='truncate'>" + data[i].t_email + "</div></span></td>";
                htmlDOM += "<td><button title='delete' class='btn btn-sm deleteUSER' data-id='" + data[i].t_id + "'>Delete</button></td>";
                htmlDOM += "</tr>";
                j++
            }
            htmlDOM += "</tbody></table>";
            targetDOM.html(htmlDOM);
            $('.play-data-table').DataTable({
                "paging": false,
                "ordering": true,
                "paging": true,
                "info": false,
                targets: [0, 1, 2],
                render: function(data) {
                    return data.substr(0, 10);
                }
            })
            setTimeout(selectUser(), 500);
            setTimeout(deleteUSER(), 500)
        } else {
            openAlert({
                alertType: "error",
                alertTitle: "Error",
                alertMessage: response.responseJSON.message
            });
        }
    };
    var errorAction = function(response) {
        openAlert({
            alertType: "error",
            alertTitle: "Error",
            alertMessage: response.responseJSON.message
        });
    };
    var beforeSendAction = function(response) {
        console.log("loading fetch..");
    };
    ajaxSendJSON(url, type, data, beforeSendAction, successAction, errorAction);
}

function userListShow() {
    userListShowAction();
}

function selectUserAction(t_id) {
    var url = "api/warga?t_id=" + t_id;
    var type = "GET";
    var data = {};
    var successAction = function(response) {
        console.log(response);
        // console.log('masuk')
        var status = response.status;
        if (status === true) {
            var data = response.data[0];
            console.log(data)
            $.fn.hasValue = function() {
                if (this.val() != "") {
                    this.siblings("label").addClass("has-val");
                }
            }
            $("[name='t_id']").val(data.t_id).hasValue();
            $('[name="t_user_type"]').val(data.t_user_type).hasValue();
            $('[name="t_nama"]').val(data.t_nama).hasValue();
            $('[name="t_tempat_lahir"]').val(data.t_tempat_lahir).hasValue();
            $('[name="t_tgl_lahir"]').val(data.t_tgl_lahir).hasValue();
            $('[name="t_agama"]').val(data.t_agama).hasValue();
            $('[name="t_pekerjaan"]').val(data.t_pekerjaan).hasValue();
            $('[name="t_alamat"]').val(data.t_alamat).hasValue();
            $('[name="t_email"]').val(data.t_email).hasValue();
            $('[name="t_password"]').val(data.t_password).hasValue();
            $('#editUser').attr('data-id', t_id).show().removeClass('d-none');
            $('#addUser').hide();

            $('html, body').animate({
                scrollTop: 0
            }, 500)
        } else {
            console.log(response)
        }
    };
    var beforeSendAction = function() {
        console.log("loading");
    }
    var errorAction = function(response) {
        console.log('error', response);
    };

    ajaxSendJSON(url, type, data, beforeSendAction, successAction, errorAction);
}

function selectUser() {
    $(".editable-row").on("dblclick", function() {
        var t_id = $(this).attr('data-id');
        selectUserAction(t_id);
    })
}

// reset form
function resetFormAction() {
    data = {};
    (function() {
        $.fn.hasValue = function() {
            this.siblings("label").removeClass("has-val");
        }
    })()
    $('[name="t_user_type"]').val(data.t_user_type).hasValue();
    $('[name="t_nama"]').val(data.t_nama).hasValue();
    $('[name="t_tempat_lahir"]').val(data.t_tempat_lahir).hasValue();
    $('[name="t_tgl_lahir"]').val(data.t_tgl_lahir).hasValue();
    $('[name="t_agama"]').val(data.t_agama).hasValue();
    $('[name="t_pekerjaan"]').val(data.t_pekerjaan).hasValue();
    $('[name="t_alamat"]').val(data.t_alamat).hasValue();
    $('[name="t_email"]').val(data.t_email).hasValue();
    $('[name="t_password"]').val(data.t_password).hasValue();
    $('#editUser').hide();
    $('#addUser').show();
}

function resetForm() {
    $("#resetUser").on("click", function() {
        resetFormAction();
    })
}

function deleteUSERaction(t_id) {
    var type = "DELETE";
    var url = "api/warga?t_id=" + t_id;
    var successAction = function(response) {
        if (response.status === true) {
            openAlert({
                alertType: "success",
                alertTitle: "Sukses!!",
                alertMessage: "User berhasil dihapus"
            });
            userListShowAction($('#deleteUSER').val());
        } else {
            console.log(response);
            openAlert({
                alertType: "danger",
                alertTitle: "Gagal!!",
                alertMessage: "Tidak bisa menghapus, Cek konsol"
            });
        }
    }
    var beforeSendAction = function() {
        console.log("Loading untuk penghapusan..")
    }
    var errorAction = function(response) {
        console.log(response)
        openAlert({
            alertType: "danger",
            alertTitle: "Gagal!!",
            alertMessage: "Tidak bisa menghapus, Cek konsol"
        });
    }

    ajaxSendJSON(url, type, {}, beforeSendAction, successAction, errorAction);
}

function deleteUSER() {
    $(".deleteUSER").on('click', function() {
        // console.log("clik")
        var t_id = $(this).attr("data-id");
        var a = confirm("Yakin Dihapus ?");
        if (a === true) {
            deleteUSERaction(t_id);
        } else {
            return false;
        }

    })
}

$(document).ready(function() {
    userListShow();
    selectUser();
    resetForm();
    AddUser();
    editUser();
    deleteUSER();
});