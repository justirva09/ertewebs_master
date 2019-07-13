function galeriInstagramAction() {
    var url = "https://api.instagram.com/v1/users/self/media/recent?access_token=5849738439.e078e31.f3f6838a1b804a679bd73677a08f799f";
    // var type = "GET";
    var data = {};

    var successAction = function(response) {
        console.log("Fetch Instagram", response);
    }
    ajaxSendJSON(url, type, data, successAction);
}

function galeriInstagram() {
    galeriInstagramAction();
}

function galeriShowAction() {
    var url = "api/galeri";
    var data = [];
    var type = "GET";

    var successAction = function(response) {
        console.log("fetch data galeri: ", response);
        var status = response.status;
        var data = response.data;
        var btnDOM = "";
        var targetBTN = $("#showBTN");
        btnDOM += "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalGaleri'>Add Photos</button>";
        var htmlDOM = "";
        var targetDOM = $("#galeriShow");
        if (status == true) {
            htmlDOM += "<div class='row'>";
            for (var i = 0; i < data.length; i++) {
                htmlDOM += "<div class='col-12 col-sm-6 col-md-4 col-lg-2 mb-4'><div class='item-content cp-card-galeri'><div class='card-wrap-img'>";
                htmlDOM += "<img class='cp-img' src='http://localhost/ertewebs/" + data[i].g_path_gambar + "' />";
                htmlDOM += "</div>";
                htmlDOM += "<div class='card-body'>";
                htmlDOM += "<div class='item-action'><span class='fa fa-edit'></span></div>";
                htmlDOM += "</div></div></div>";
            }
            htmlDOM += "</div>";
            targetDOM.html(htmlDOM);
        }
        targetBTN.html(btnDOM);
    };
    var errorAction = function(response) {
        openAlert({
            alertType: "error",
            alertTitle: "Error",
            alertMessage: "CHECK CONSOLE!"
        });
    };
    var beforeSendAction = function(response) {
        console.log("loading fetch..");
    };
    ajaxSendJSON(url, type, data, beforeSendAction, successAction, errorAction);
}


function galeriShow() {
    galeriShowAction();
}

function addGaleriAction() {
    var url = "api/galeri";
    var type = "POST";
    var galeriData = {
        g_title: $('[name="g_title"]').val(),
        g_desc: $('[name="g_desc"]').val(),
        g_path_gambar: $('[name="g_path_gambar"]').val()
    };

    var successAction = function(response) {

    }

    ajaxSendJSON(url, type, galeriData, successAction);
}

function addGaleri() {
    addGaleriAction();
}

$(document).ready(function() {
    galeriShow();
    // addGaleri();
});