<?php 
$cabeceras = get_headers("https://s3-eu-west-1.amazonaws.com/ikeasiwebimages/pdf_articulosweb/".$code);

                if($cabeceras[0] == "HTTP/1.1 200 OK"){
                    $sstring = file_get_contents("https://s3-eu-west-1.amazonaws.com/ikeasiwebimages/pdf_articulosweb/".$code,false,null,-1,1);

                    $error = 1;
                    $pdf = "https://s3-eu-west-1.amazonaws.com/ikeasiwebimages/pdf_articulosweb/".$code;
                    echo json_encode(array("error"=>$error,"pdf"=>$pdf));
                    exit;
                }else{
                    $error = 4;
                    $mensaje = _("Ooops! No tenemos este manual");
                    echo json_encode(array("error"=>$error,"mensaje"=>$mensaje));
                    exit;
                }
?>
