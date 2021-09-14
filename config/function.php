<?php

function show($data){
    echo  '<pre>'.print_r($data,1).'</pre>';
}

function load($data){
    foreach ($_POST as $k => $v){
        if(array_key_exists($k, $data)){
            $data[$k]['value'] = htmlspecialchars(trim($v));
        }
    }
    return $data;
}

function validate($data){
    $errors = '';
    foreach ($_POST as $k => $v){
        if($data[$k]['required'] && empty($data[$k]['value'])){
            $errors .= "<div class='error'>
                <p>Вы не заполнили поле {$data[$k]['field_name']} </p>
              </div>";
        }
        return $errors;
    }

    function redirect(){
        header('location: index.php');
        exit();
    }
}