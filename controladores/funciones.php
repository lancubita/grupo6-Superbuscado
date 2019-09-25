<?php

// ------------- Validar campos vacios (Registro) -------------

function validar_campos_vacios_registro ($datos) {

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

  return $errors;

}

// ------------- Validar campos vacios (Login) -------------

function validar_campos_vacios_login ($datos) {

  $error = [];

  if(empty($datos['email']))
  {
    $error['email'] = 'El campo de email está vacío';
  }
  if(empty($datos['password']))
  {
    $error['password'] = 'El campo de contraseña está vacío';
  }

  return $error;

}


// ------------- Validar password -------------

function validar_password($datos) {

  $error_clave = [];

  if(empty($datos['password']))
  {
    $error_clave['password'] = 'Ingresar contraseña';
  }
  else if(strlen($datos['password']) < 6)
  {
    $error_clave['password'] = "La clave debe tener al menos 6 caracteres";
  }
  else if(strlen($datos['password']) > 16)
  {
    $error_clave['password'] = "La clave no puede tener más de 16 caracteres";
  }
  else if (!preg_match('`[a-z]`',$datos['password']))
  {
    $error_clave['password'] = "La clave debe tener al menos una letra minúscula";
  }
  else if (!preg_match('`[A-Z]`',$datos['password']))
  {
    $error_clave['password'] = "La clave debe tener al menos una letra mayúscula";
  }
  else if (!preg_match('`[0-9]`',$datos['password']))
  {
    $error_clave['password'] = "La clave debe tener al menos un caracter numérico";
  }

  return $error_clave;

}

// ------------- Guardar usuarios en json -------------

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

// ------------- Verificar si el usuario ya existe (login) -------------

function verificarUsuario($verificar) {

  if($verificar) {

    $json = file_get_contents('user_data.json');

    $usuarios = json_decode($json, true);

    foreach($usuarios['usuarios'] as $usuario) {
      if(($verificar['email'] === $usuario['email']) && password_verify($verificar['password'], $usuario['password'])) {
        return $usuario;
      }
    }

  }

  return false;
}
