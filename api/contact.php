<?php
declare(strict_types=1);
require_once __DIR__ . '/functions.php';
header('Content-Type: application/json; charset=utf-8');
if (($_SERVER['REQUEST_METHOD']??'GET')!=='POST'){http_response_code(405);echo json_encode(['success'=>false,'message'=>'Méthode non autorisée.']);exit;}
$payload=$_POST; if(!$payload){$raw=file_get_contents('php://input');$decoded=json_decode($raw?:'',true);if(is_array($decoded))$payload=$decoded;}
if(!empty($payload['website'])){echo json_encode(['success'=>true,'message'=>'Message reçu.']);exit;}
if(!hash_equals((string)($_SESSION['csrf_token']??''),(string)($payload['csrf_token']??''))){http_response_code(403);echo json_encode(['success'=>false,'message'=>'Session expirée. Rechargez la page puis réessayez.']);exit;}
$now=time();$last=(int)($_SESSION['last_contact_at']??0);if($last&&$now-$last<15){http_response_code(429);echo json_encode(['success'=>false,'message'=>'Merci de patienter quelques secondes avant un nouvel envoi.']);exit;}
$name=trim((string)($payload['name']??''));$email=trim((string)($payload['email']??''));$subject=trim((string)($payload['subject']??''));$message=trim((string)($payload['message']??''));$errors=[];
if(mb_strlen($name)<2||mb_strlen($name)>80)$errors[]='Nom invalide.';if(!filter_var($email,FILTER_VALIDATE_EMAIL)||mb_strlen($email)>160)$errors[]='Email invalide.';if(mb_strlen($subject)<3||mb_strlen($subject)>120)$errors[]='Sujet invalide.';if(mb_strlen($message)<10||mb_strlen($message)>3000)$errors[]='Message invalide.';
if($errors){http_response_code(422);echo json_encode(['success'=>false,'message'=>implode(' ',$errors)]);exit;}
$record=['created_at'=>date(DATE_ATOM),'name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message,'ip_hash'=>hash('sha256',(string)($_SERVER['REMOTE_ADDR']??'unknown'))];$encoded=json_encode($record,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
if($encoded===false||file_put_contents(CONTACT_STORAGE,$encoded.PHP_EOL,FILE_APPEND|LOCK_EX)===false){http_response_code(500);echo json_encode(['success'=>false,'message'=>'Le serveur n’a pas pu enregistrer le message.']);exit;}
$_SESSION['last_contact_at']=$now; echo json_encode(['success'=>true,'message'=>'Merci. Ton message a bien été enregistré.']);
