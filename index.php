<?php
    $document = "1098600000";
    $usuario = "USER-NAME";
    $clave = "PASSWD";
    $codigoFuente = "20036582";
    $tipoDocumento = "01";
    $pais = "co";
    $hho = "";
    $hgu = "";

    $url = "http://test.konivin.com:32564/konivin/servicio/persona/consultar?lcy=".$usuario."&vpv=".$clave."&jor=".$codigoFuente."&icf=".$tipoDocumento."&thy=".$pais."&klm=".$document."&hho=".$hho."&hgu=".$hgu;
    $conexion = curl_init();
    curl_setopt($conexion, CURLOPT_URL,$url);
    curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
    curl_setopt($conexion, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
    curl_setopt($conexion, CURLOPT_RETURNTRANSFER, 1);
    $respuesta=curl_exec($conexion);
    curl_close($conexion);

    echo $respuesta;

?>