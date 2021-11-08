<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat Bot</title>
    <link rel="stylesheet" href="css/chatbot.css">
  </head>
  <body>

    <button class="open-button" onclick="openForm()">Chat</button>

    <div class="chat-popup" id="myForm">
      <button type="button" class="btn-close1" onclick="closeForm()">Close</button>
      <div class="top">
        <h1>Ask Your Questions</h1>
      </div>
      <div class="mid">
        <div class="chat">
          <p id="chatLog"> Hello welcome to Cannon Studio, the best place to shop for Photography related item/ services. </p>
        </div>
      </div>
      <div class="input">
        <input type="text" id="userBox" onkeydown="if(event.keyCode == 13){ chat()}" placeholder="Type your Question">
      </div>
    </div>

    <script type="text/javascript" src="js/chatbot.js"></script>
  </body>
</html>
