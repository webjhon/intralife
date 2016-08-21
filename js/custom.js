
$(document).ready(function (e) {
  // ################# FORMULÁRIO DE LOGIN AJAX #################

  $("#login_envia").click(function (e) { //Quando clicar no botão de enviar.

    e.preventDefault(); //O evento padrão não será ativado.
    username = $("#login").val(); //Os valores digitados serão armazenados nestas variáveis
    password = $("#senha").val();
    $("#msg_sucesso").hide(); //Essas divs, ficarão escondidas ao iniciar o sistema
    $("#msg_erro").hide();
    $.ajax({
      type: "POST",
      url: "./autenticar/validaLogin.php", //Os valores serão enviados para essa pagina
      data: "login=" + username + "&pwd=" + password, //Como POSTS com seus nomes entre aspas
      success: function (resposta) { //No caso de sucesso na leitura
        if (resposta == "1") { //E se a resposta enviada pelo validaLogin for 1
          $("#msg_sucesso").show();
          setTimeout(function (){window.location = "./sistemaRH/index.php"}, 1000);
        }
        else { //Ou se a resposta for 2
          $("#msg_erro").show();

        }
      }
    });
    return false; //CABOU.
  });

  // ################# CADASTRAR ESTAGIÁRIO - VALIDAR TIPO DE ARQUIVO #################

  $("#img_fail").hide();

  $('#foto_estagiario').bind('change', function() {
    // this.files[0].size gets the size of your file.
    //alert(this.files[0].size);
    var fileName = $(this).val();
    var arrExt = fileName.split('.');
    var position = (arrExt.length)-1;
    var ext = arrExt[position];
    if(ext != 'jpg' || ext.length == 0 ){
      $(this).val('');
      $("#img_fail").slideDown();

    }
    else {
      $("#img_fail").slideUp();
    }
  });
  // ################# CADASTRAR ESTAGIÁRIO - VALIDAÇÃO DE FORMULÁRIO #################
  //####### VALIDANDO FORMULÁRIO #######
  var valida = 0;
  $("#nome_estagiario").focusout(function(){
    if (nome = $("#nome_estagiario").val()== ""){
      $("#nome_vazio").show();
      valida = 0;
    }
    else {
      $("#nome_vazio").hide();
      valida =1;
    }
  });
  $("#email_estagiario").focusout(function(){
    if (nome = $("#email_estagiario").val()== ""){
      $("#email_vazio").show();
      valida = 0;
    }
    else {
      $("#email_vazio").hide();
      valida =1;
    }
  });
  $("#login_estagiario").focusout(function(){
    if (nome = $("#login_estagiario").val()== ""){
      $("#login_vazio").show();
      valida = 0;
    }
    else {
      $("#login_vazio").hide();
      valida =1;
    }
  });
  $("#senha_estagiario").focusout(function(){
    if (nome = $("#senha_estagiario").val()== ""){
      $("#senha_vazio").show();
      valida = 0;
    }
    else {
      $("#senha_vazio").hide();
      valida =1;
    }
  });



  // ################# CADASTRAR ESTAGIÁRIO - FORMULÁRIO DE CADASTRO AJAX #################

  $("#enviar_cadastro").click(function (e) { //Quando clicar no botão de enviar.
    e.preventDefault(); //O evento padrão não será ativado.


    curso = $("#seleciona_curso").val();
    turno = $("#seleciona_turno").val();
    login = $("#login_estagiario").val();
    senha = $("#senha_estagiario").val();
    email = $("#email_estagiario").val();
    foto_estagiario = $("#foto_estagiario").val();

    $("#cadastro_ok").hide(); //Essas divs, ficarão escondidas ao iniciar o sistema
    $("#cadastro_vazio").hide();

    //####### ENVIANDO DADOS #######
    $.ajax({
      type: "POST",
      //data: "nome=" + nome + "&curso=" + curso + "&turno=" + turno + "&login=" + login + "&senha=" + senha + "&email=" + email  + "&foto_estagiario=" + foto_estagiario,
      contentType: false,
      processData: false,
      mimeType: 'multipart/form-data',
      url: "../banco_de_dados/cadastraEstagiarios.php", //Os valores serão enviados para essa pagina
      data: new FormData(document.getElementById("cad_estagiario")),
      success: function (resposta) { //No caso de sucesso na leitura
        if (resposta == "1") { //E se a resposta enviada pelo validaLogin for 1
          $("#cadastro_ok").slideDown();
          $("#enviar_cadastro").html("Aguarde...");
          setTimeout(function (){window.location = "../sistemaRH/estagiarios_cadastrar.php"}, 1000);

        }
        else { //Ou se a resposta for 2
          $("#cadastro_vazio").slideDown()();
        }   //alert(data);

      }
    });
    return false; //CABOU.
  });

  // ################# GERAR CRONOGRAMA - SELECIONAR DATA #################

$(function() {
    /*$("#data_saida").datepicker({
        dateFormat: 'yy/mm/dd   ',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
        nextText: 'Próximo',
        prevText: 'Anterior'        
    });*/
    $("#data_saida").timepicker({
        'scrollDefault': 'now' 
        
    });
    $("#data_entrada").datepicker({
        dateFormat: 'yy/mm/dd   ',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
        nextText: 'Próximo',
        prevText: 'Anterior'        
    });
  });
  
  
  // ################ BUSCAR ESTAGIARIO CRONOGRAMA - AJAX LIVE SEARCH ################
  
  
  	// Icon Click Focus
	$('div.icon').click(function(){
		$('input#search').focus();
	});

	// Live Search
	// On Search Submit and Get Results
	function search() {
		var query_value = $('input#search').val();
		$('b#search-string').text(query_value);
		if(query_value !== ''){
			$.ajax({
				type: "POST",
				url: "../banco_de_dados/search.php",
				data: { query: query_value },
				cache: false,
				success: function(html){
					$("ul#results").html(html);
				}
			});
		}return false;    
	}

	$("input#search").on("keyup", function(e) {
		// Set Timeout
                $("input#search").addClass("carregando");
		clearTimeout($.data(this, 'timer'));
		// Set Search String
		var search_string = $(this).val();
		// Do Search
		if (search_string == '') {
			$("ul#results").fadeOut();
			$('h4#results-text').fadeOut();
		}else{
			$("ul#results").fadeIn();
			$('h4#results-text').fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		};
	});
        
      $("input#search").focusout(function(){
          $("input#search").removeClass("carregando");
      });  
      
        
      $('.clockpicker').clockpicker();   


});
