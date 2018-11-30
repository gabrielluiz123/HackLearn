
/* ==== Loader ==== */

$(document).ready(function(){
	setTimeout(function(){
		$("body, html").removeClass("no-scroll");
		$(".spinner").fadeOut();
		$(".spinner-ctn").fadeOut(600);
	},700);

});


$(document).ready(function(){


	if (top.location.pathname === '/home')
	{
		iziToast.success({
			timeout: 6000, 
			message: 'Seja bem vindo à página principal!',
			color: '#111',
			backgroundColor: '#82D9A5',
			animateInside: true,
			drag: true,
			progressBarColor: '#666',
		});
	}

	if (top.location.pathname === '/quizzes')
	{
		iziToast.success({
			timeout: 5000, 
			message: 'Escolha um quiz para responder!',
			color: '#111',
			backgroundColor: '#82D9A5',
			animateInside: true,
			drag: true,
			progressBarColor: '#666',
		});
	}

		if (top.location.pathname === '/search')
	{
		iziToast.success({
			timeout: 5000, 
			message: 'Pesquisa realizada com sucesso!',
			color: '#111',
			backgroundColor: '#82D9A5',
			animateInside: true,
			drag: true,
			progressBarColor: '#666',
		});
	}
	

});

$('.semConteudo').click(function () {
	iziToast.warning({
		message: 'Infelizmente está sem conteúdo!',
	});

});