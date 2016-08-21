
<?php	
	include ("config.php");

	// pegando o ultimo elemento (nó) do xml	
	$result = $xml->xpath("dados[last()]");
			
	// foreach para pegar somente o id
	foreach ($result as $sendId)
	{
		$recId = $sendId['id'];
	}
			
	// atribuindo os dados via post
	$id		= $recId+1;
	$nome	= $_POST["tnome"];
	$area	= $_POST["area"];
	$curso	= $_POST["curso"];
	$prox_area = $_POST["prox_area"];

	// criando um novo nó com seus atributos
	$dados = $xml->addChild('dados');
	$dados->addAttribute('id', $id);			
	$dados->addAttribute('nome', $nome);
	$dados->addAttribute('area', $area); 				
	$dados->addAttribute('curso', $curso); 
	$dados->addAttribute('prox_area', $prox_area); 

	// inserindo os dados no arquivo xml
	file_put_contents('agenda.xml',$xml->asXML() );
								
	// mensagem de sucesso								
	echo "<br /><br />Dados Inseridos Corretamente!";
	
	// refresh para retornar a página principal (tempo: 2 segundos)
	echo "<meta HTTP-EQUIV='refresh' CONTENT='$tempo;URL=index.php'>";
?>            

