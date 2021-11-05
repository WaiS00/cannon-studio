<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <title>Cannon Studio</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/chatbot.css">
  <link rel="icon" href="resources/img/cannon_logo.png" />

</head>
<body>
<?php include 'header.php';?>
<div class="chat">
  <div class='wrapper'>
    <div id="dialogue"></div>
    <form onSubmit="return chatbot.sendMessage()">
      <div class="text-box">
        <input type="text" name="message" id="message" autocomplete="off" disabled placeholder="Please wait... loading...">
        <input class="send-button" type="submit" value=">">
      </div>
    </form>
  </div>
</div>
  <?php include 'footer.php';?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/tabletop.js/1.5.1/tabletop.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="https://unpkg.com/rivescript@latest/dist/rivescript.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/idewcomputing/code-chatbot/src/chatbot.js"></script>
  <script src="js/chatbot.js"></script>
</body>
</html>