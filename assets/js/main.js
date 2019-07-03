//helper

// AJAX Herlper for JSON
function ajaxSendJSON(url, type_request, dataObj, before_act, success_act, error_act){
	var error_func = function(errorresponse){
		console.log(errorresponse);
	};
	if(typeof(error_act) === "function"){
		error_func = error_act;
	}
	$.ajax({
		url : url,
		type : type_request,
		crossDomain: true,
		contentType: "application/json",
		dataType : "JSON",
		data : JSON.stringify(dataObj),
		beforeSend : before_act,
		success : success_act,
		error : error_func,
	})
}

// Ajax Helper For Send File
function ajaxSendFile(url, file_data, success, error){
	var error_func = function(response){
		console.log(response);
	};
	var success_func = error_func;
	if(typeof(error) === "function"){
		error_func = error;
	}
	if(typeof(success) === "function"){
		success_func = success;
	}
	$.ajax({
    type : "POST",
    url  : url,
    processData : false,
    dataType : "JSON",
    data : file_data,
    contentType : false,
		success: success_func,
		error : error_func
  });
}

// Open Alert
function openAlert(o){
	var a = o.alertType;
	var b = o.alertTitle;
	var c = o.alertMessage;
	var d = [a,b,c];
	d.forEach(function(e){
		if(e === "undefined"){
			e = "";
		}
	})

	$('.alert-item').addClass('show');
	$('.flat-alert').addClass(a);
	$('.flat-alert-title').text(b);
	$('.flat-alert .message').text(c);
	
	setTimeout(function(){
		$('.alert-item').removeClass('show');
		$('.flat-alert .message').text("");
		$('.flat-alert-title').text("Alert Title");
		setTimeout(function(){
			$('.flat-alert').removeClass(a);
		},500);
	},5000);
}

function flatAlert(){
	$('.flat-alert-close').on("click", function(){
		$(this).parentsUntil(".alert-item").parent().removeClass("show");
	})
}


//function
function sidebarToggle(){
	$('.menu-toggle').click(function(){
		$(this).toggleClass('full')
		$('#site-main').toggleClass('full')
		$('#site-sidebar').toggleClass('full')
		$('#site-header').toggleClass('full')
		$('#site-sidebar .sidebar-inner ul li a .logo-text').animate({opacity:'toggle'},0)
	})
}
function submenuToggle(){
	$('#site-sidebar .sidebar-inner ul li.has-submenu > a').click(function(){
			event.preventDefault();
	    var submenu = $(this).parent().toggleClass('active').find('.submenu');
	    submenu.slideToggle(150);
	})
}

function addAnimateDropdrownBootstrap() {
 // Add slideDown animation to Bootstrap dropdown when expanding.
  $('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
  });
  // Add slideUp animation to Bootstrap dropdown when collapsing.
  $('.dropdown').on('hide.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(150);
  });
}

function googleInputHasValue(){
	$('input.form-control, input, textarea').on('change', function(){
		if($(this).val() != ""){
			$(this).siblings('label').addClass('has-val')
		} else {
			$(this).siblings('label').removeClass('has-val')
		}
	})
}

//document ready
$(document).ready(function(){
	sidebarToggle();
	submenuToggle();
	flatAlert();
	addAnimateDropdrownBootstrap();
	googleInputHasValue();
})