// Javascript //

// dropdown navigation main nav//
(function($){
	$(document).ready(function(){
		// dropdown
		if ($('.parent').children('ul').length > 0) 
		{
		$('.parent').addClass('dropdown');
		$('.parent > a').addClass('dropdown-toggle');
		$('.parent > a').attr('data-toggle', 'dropdown');
		$('.parent > a').append('<b class="caret"></b>');
		$('.parent > ul').addClass('dropdown-menu');
		}
	});
})(jQuery);

(function($){
	$('.dropdown input').click(function(e) {
	e.stopPropagation();
});
})(jQuery);

(function($){
	$('.dropdown-menu .dropdown-submenu a[data-toggle="dropdown-submenu"]').click(function (e)
	{                   
		e.stopPropagation();
	});
})(jQuery);

