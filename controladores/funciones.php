<?php

function validar ($datos) {

$errors = [];

      if(empty($datos['name']))
      {
           $errors['name'] = 'Ingresar nombre';
      }
      if(empty($datos['lastname']))
      {
           $errors['lastname'] = 'Ingresar apellido';
      }
      if(empty($datos['email']))
      {
           $errors['email'] = 'El email no tiene formato correcto';
      }
      if(empty($datos['password']))
      {
           $errors['password'] = 'Ingresar Contraseña';
      }

  return $errors;
}



function guardarUsuario($post) {
  if (count($errors) ==0) {
    $usuario = [
     'name'        => $post['name'],
     'lastname'    => $post['lastname'],
     'email'       => $post['email'],
     'password'    => password_hash ($post['password'] , PASSWORD_DEFAULT),
    ];

    $usuarios = file_get_contents('user_data.json');
    $array_data = json_decode($usuarios, true);
    $array_data['usuarios'][] = $usuario;

    $json = json_encode($array_data, JSON_PRETTY_PRINT);
    file_put_contents('user_data.json', $json);
  }

}

function verificarUsuario($verificar) {
  if($verificar) {
    $json = file_get_contents(user_data.json);
    $usuarios = json_decode($json, true);
    foreach($usuarios as $usuario) {
      if(($verificar['email'] === $usuario['email']) && password_verify($verificar['password'], $usuario['password'])) {
        header("location: create_list.php");
      }
    }
  }
}
