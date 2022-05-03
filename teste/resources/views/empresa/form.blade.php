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
 
    <h1>Formulário Empresa</h1>
    <hr/>
    <?php
     
    use App\Models\Empresas;
    use App\Models\Colaboradores;


      $razao_social = "";
      $cnpj = "";
      $endereco = "";
      $telefone = "";
      $email = "";
      
      echo Form::open(array('url' => '/validation')); // por padrão o método é POST

      echo Form::text('razao_social', $razao_social, array('class' => 'field required', 'placeholder' => 'Razão Social (obrigatório)'));
      echo Form::label('razao_social', 'Razão Social * ');
      echo '<br/>';

      echo Form::text('cnpj', $cnpj, array('class' => 'field required', 'placeholder' => 'CNPJ (obrigatório)', 'id' => 'cnpj'));
      echo Form::label('cnpj', 'CNPJ *');
      echo '<br/>';

      echo Form::text('telefone', $telefone, array('class' => 'field required', 'placeholder' => 'Telefone (obrigatório)'));
      echo Form::label('telefone', 'Telefone *');
      echo '<br/>';

      echo Form::text('email', $email, array('placeholder' => 'Email (opicional)') );    
      echo Form::label('email', 'E-mail');
      echo '<br/>';    

      echo Form::text('endereco', $endereco, array('placeholder' => 'Endereço (opcional)'));
      echo Form::label('endereco', 'Endereço');
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

