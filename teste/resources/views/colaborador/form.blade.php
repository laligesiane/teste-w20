<!DOCTYPE html>
<html>
<head>
    <title>Teste w2o</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        body {
          font-family: 'Montserrat', sans-serif;
          font-size: 16px;
        }
        label{
          margin: 10px;
        }
        input{
          width: 40%;
          margin: 10px auto;
          font-weight: bold;
        }
        input::placeholder{
          font-style: italic;
          font-weight: normal;
        }
        button{
          width: 40%;
        }
        .btn {
          background-color: #000;
          margin: 10px auto;
          color: white;
        }
        .btn:hover {
          background-color: #808080;
          color: white;
        }
    </style>
</head>
<body>
 
<div class="container">
 
    <h1>Formulário Colaborador</h1>
    <hr/>
    <?php
     
    use App\Models\Empresas;
    use App\Models\Colaboradores;


    $nome_completo = "";
    $telefone = "";
    $email = "";
    $data_nascimento = "";
    
    echo Form::open(array('url' => '/colaboradores')); // por padrão o método é POST

    echo Form::text('nome_completo', $nome_completo, array('class' => 'field required', 'placeholder' => 'Nome Completo (obrigatório)'));
    echo Form::label('nome_completo', 'Nome Completo * ');
    echo '<br/>';

    echo Form::text('telefone', $telefone, array('class' => 'field required', 'placeholder' => 'Telefone (obrigatório)'));
    echo Form::label('telefone', 'Telefone *');
    echo '<br/>';

    echo Form::text('email', $email, array('placeholder' => 'Email (opicional)') );    
    echo Form::label('email', 'E-mail');
    echo '<br/>';    

    echo Form::text('data_nascimento', $data_nascimento, array('class' => 'field required', 'placeholder' => 'Data de Nascimento'));
    echo Form::label('data_nascimento', 'Data de Nascimento');
    echo '<br/>';
    ?>
    
    <button wire:click="listarColaboradores" class="btn">Colaboradores</button>
    <br>
    <button type="submit" class="btn">Salvar</button>

    <?php
      echo Form::close();
    ?>
 
</div>
 
</body>
</html>

