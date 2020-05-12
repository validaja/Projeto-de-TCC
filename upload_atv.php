<?php
	include_once("conexao.php");
	$nome=$_POST['nome'];
	echo "Nome da atividade: $nome <br>";
	
	$result_atividade = "INSERT INTO atividade (nome) VALUES ('$nome')";
	$resultado_atividade = mysqli_query($conn, $result_atividade);
	$ultimo_id = mysqli_insert_id($conn);
	echo "Ultimo Id Inserido: $ultimo_id <br>";
	
	$_UP['pasta'] = 'envios/'.$ultimo_id.'/';
	
	mkdir($_UP['pasta'], 0777);		
	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

	for ($controle = 0; $controle < count($arquivo['name']); $controle++){		
		$destino = $_UP['pasta']."/".$arquivo['name'][$controle];

		if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
			$nome_arquivo = $arquivo['name'][$controle];
			$result_arquivo = "INSERT INTO arquivo (arquivo, atividade_id) VALUES ('$nome_arquivo', '$ultimo_id')";
			$resultado_arquivo = mysqli_query($conn, $result_arquivo);
			echo "Upload realizado com sucesso - Imagem: $nome_arquivo<br>"; 
		}else{
			echo "Erro ao realizar upload";
		}		
	}

?>