<?php
declare(strict_types=1);
require_once __DIR__ . '/functions.php';
header('Content-Type: application/json; charset=utf-8');
if (($_SERVER['REQUEST_METHOD']??'GET')!=='GET'){http_response_code(405);echo json_encode(['success'=>false,'error'=>'Method Not Allowed']);exit;}
$module=strtoupper(trim((string)($_GET['module']??''))); $data=ateliersData();
if($module!=='') $data=isset($data[$module])?[$module=>$data[$module]]:[];
echo json_encode(['success'=>true,'data'=>$data],JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
