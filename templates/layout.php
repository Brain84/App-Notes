<html lang="pl">

<head>
  <title>Notes App</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" type="text/css" href="/public/style.css">
</head>

<body class="body">
  <div class="wrapper">
    <div class="header">
      <h1><i class="far fa-clipboard"></i>notes</h1>
    </div>

    <div class="container">
      <div class="menu">
        <ul>
          <li><a href="/">Notes list</a></li>
          <li><a href="/?action=create">New note</a></li>
        </ul>
      </div>

      <div class="page">
        <?php require_once("templates/pages/$page.php"); ?>
      </div>
    </div>

    <div class="footer">
      <p>Notes App - project with the use of PHP</p>
    </div>
  </div>
</body>

</html>