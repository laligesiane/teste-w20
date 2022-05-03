<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        th{
          width: 40%;
          margin: 10px auto;
          font-weight: bold;
        }
        td{
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
  <div>
    @yield('content')
  </div>
</body>
@livewireStyles
</html>