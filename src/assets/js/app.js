var APP = APP || {};

$('article table').addClass('table table-bordered').wrap('<div class="table-responsive"></div>');
$('article iframe').addClass('embed-responsive-item').wrap('<div class="embed-responsive embed-responsive-16by9"></div>');

$.ajaxChimp.translations.pt_BR = {
    'submit': 'Enviando...',
    0: 'Pronto! verifique sua caixa de entrada com o e-mail de confirmação.',
    1: 'Por favor, preencha todos os campos',
    2: 'O endereço de e-mail precisa conter @',
    3: 'O dominio do e-mail é inválida (a parte depois de @:)',
    4: 'O usuário do e-mail é inválido (a parte antes de @:)',
    5: 'Este endereço de e-mail é falso ou inválido. Por favor, introduza um endereço de e-mail real'
};


//config ajaxchimp 
$('.newsletter-headerbar form').ajaxChimp({
	language: 'pt_BR',
	url: '//1motivo.us14.list-manage.com/subscribe/post?u=f8fedc70b7030f204f0815e61&amp;id=c64c56b148',
	callback: function(res){
		console.log(res);
		if(res.result == 'success'){
			$.gDialog.alert(res.msg);
			$('.newsletter-headerbar .input-group .btn').attr('disabled', 'disabled');
		} else {
			$.gDialog.alert("Algo errado... por favor, tente novamente!");
		}
	}
});