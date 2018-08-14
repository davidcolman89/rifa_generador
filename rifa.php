<?php

$rifa = <<<HTML
<html>
<head>
    <style type="text/css">
        div.content {
            width: 900px;
            position: relative;
        }

        .numero {
            color: #000000;
            background-color: transparent;
            position:absolute;
            top:85%;
        }

        .numero1 {
            left: 41%;
        }
        .numero2 {
            left: 91%;
        }
        
        .hash {
            font-size: small;
            color: grey;
            background-color: transparent;
            position:absolute;
            top:91%;
        }
        
        .hash1{
            left: 11%;
        } 
        .hash2 {
            left: 63%;
        }
        
    </style>
</head>
<body>

<div class="content">
    <img src="20180814.rifa.png" width="100%" >
    <div class="numero numero1">{{NUM}}</div>
    <div class="numero numero2">{{NUM}}</div>
    <div class="hash hash1">{{HASH}}</div>
    <div class="hash hash2">{{HASH}}</div>
    <hr>
</div>

</body>
</html>
HTML;

$total = 2000;
for($i=1001; $i<= $total; $i++) {
    $aux = $rifa;
    $replace = str_pad($i, 4, '0', STR_PAD_LEFT);
    $aux = str_replace("{{NUM}}",$replace, $aux);
    $hash = md5($replace);
    $aux = str_replace("{{HASH}}",$hash, $aux);

    echo $aux;
}
