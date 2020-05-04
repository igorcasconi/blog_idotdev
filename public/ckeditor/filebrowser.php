<?php /**
* Essa é a pasta onde ficarão os arquivos que o usuário poderá ver e também onde será feito o upload
* @var string
*/
$folder = '../images';

/**
* Recuperamos a ação desejada pelo usuário
* @var string
*/
$action =& $_GET[ 'action' ];

switch ( $action ){
/**
* Foi solicitado a exibição dos arquivos
*/
case 'browse':
require 'browser.php';
break;
case 'upload':
if ( isset( $_FILES[ 'upload' ] ) ){
$nome = preg_replace( '/[^\w\d\.]/' , '' , $_FILES[ 'upload' ][ 'name' ] );
move_uploaded_file( $_FILES[ 'upload' ][ 'tmp_name' ] , sprintf( '%s/%s' , $folder , $nome ) );
$request->file('photo')->move(public_path("/uploads"), $newfilename);

break;
}
default:
//Informamos ao usuário que a requisição é inválida
header( sprintf( '%s 400 Bad Request' , $_SERVER[ 'SERVER_PROTOCOL' ] ) , true , 400 );
readfile( 'views/errobadrequest.html' );
} ?>
