<?php 

	require 'lib/WideImage.php';
	
	////////// IMAGENS PEQUENAS

	$img = WideImage::load('img/backgrouImage.jpg');
	//REDIMENCIONAR IMAGEM
	$red = $img->resize(200,200);
	//SALVANDO EM QUALQUER FORMATO
	$red->saveToFile('uploads/small/imagemSmall1.png');



	////////// IMAGENS MÉDIA
	$img = WideImage::load('img/backgrouImage.jpg');
	//REDIMENCIONAR IMAGEM
	$red = $img->resize(350,350);
	//SALVANDO EM QUALQUER FORMATO
	$red->saveToFile('uploads/medium/imagemMedium1.png');


	////////// IMAGENS GRANDE
	$img = WideImage::load('img/backgrouImage.jpg');
	//REDIMENCIONAR IMAGEM
	$red = $img->resize(450,450);
	//SALVANDO EM QUALQUER FORMATO
	$red->saveToFile('uploads/large/imagemLarge1.png');


?>