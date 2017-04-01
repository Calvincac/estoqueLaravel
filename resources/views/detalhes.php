<html>
<head>
  <title>Controle de estoque</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container">

  <h1>Detalhes do produto: <?= $p->nome ?> </h1>
  <ul>
    <li>
      <b>Valor:</b> R$ <?= $p->valor ?> 
    </li>
    <li>
      <b>Descrição:</b> <?= $p->descricao ?> 
    </li>
    <li>
      <b>Quantidade em estoque:</b> <?= $p->quantidade ?>
    </li>
  </ul>

  </div>
</body>
</html>