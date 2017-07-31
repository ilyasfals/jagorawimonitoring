$(document).ready(function(){
	var width = $(window).width();
	//console.log(width);
	var collapse = '<span class="btn btn-success btn-rounded collapse-sidebar"></span>';
	$(collapse).appendTo('.navbar-header');
	$('.collapse-sidebar').on('click', function(){
		$(this).toggleClass('collapse-sidebar-in');
		$('.sidebar').toggleClass('sidebar-in');
		$('.navbar-header').toggleClass('navbar-header-collapse');
		$('.content').toggleClass('content-collapse');
	})
	$('.sidebar').find('.dropdownmenu').each(function(i, e) {
    	var elemen = $(e);
    	var dropdownitem = elemen.find('a:eq(0)');
    	var collapsed = elemen.find('li:eq(0) > a');
    	var data_href = dropdownitem.attr('href');
    	var data_link = collapsed.attr('href');
    	dropdownitem.attr('data-href', data_href).attr('data-link', data_link);
	})
	var searchBox = $('#nav-search');
	$('#mobile-search').on('click', function(){
	    $(this).toggleClass('active');
	    searchBox.toggleClass('navbar-search-box');
	});
	if(width < 767){
		// $('.navbar-brand img').remove();
		// $('.navbar-brand').append('<i class="fa fa-bars"></i>');
		// var sidebar = $('.sidebar');
		// $('.navbar-brand').on('click',function(){
		// 	$(this).toggleClass('brandActive');
		// 	sidebar.toggleClass('sidebarShow');
		// });

		
	}

	$('.box .box-option a .fa-angle-down, .box .box-option a .fa-angle-up').on('click', function () {
        var el = jQuery(this).parents(".box").children(".box-content");
        if (jQuery(this).hasClass("fa-angle-down")) {
            jQuery(this).removeClass("fa-angle-down").addClass("fa-angle-up");
            el.slideUp(200);
        } else {
            jQuery(this).removeClass("fa-angle-up").addClass("fa-angle-down");
            el.slideDown(200);
        }
    });

	hasActive = $('.dropdownmenu>div>ul>li');

	$('#webcamContainer').hide();
	$('.pemotretan').on('click', function(){
		$('#webcamContainer').toggle('slow', function(){
			if($(this).is(':visible')){
				$('.ambil-foto').hide();
			}else{
				$('.ambil-foto').show();
			}
		});
		return false;
	});

	//ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all
	//if( showOrHide === true){

	//}
	/*
	if(hasActive.hasClass('active')){
		
		hasActive.parent().parent().parent().find('a').removeClass('collapsed');
		hasActive.parent().parent().parent().find('div').removeClass('collapse');
		hasActive.parent().parent().parent().find('div').addClass('in');
	}
*/

});