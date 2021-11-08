function chat(){
  var know = {
    "how to use the system" : "To ask for the services provided, please enter 'services' and to ask for the price, please enter 'price'. To place order, you will need to enter 'order'.",
    "services" : "The services provided are Wedding and Birthday Photography",
    "order" : "Please contact +60122978732 to plan your order :DD, have a nice day!",
    "price" : "The price range of Wedding Photography is around RM 800 to RM 1000. The price range of Birthday Photography is around RM 300 to RM 500",
    "location" : "Our address is 101, Jalan smtg smtg smtg, KLCC.",
    "thank you" : "Thank you for selecting Cannon Studio, hope to see you again!",
    "bye" : "Thank you for selecting Cannon Studio, hope to see you again!"
  };
  var user = document.getElementById('userBox').value;
    document.getElementById('chatLog').innerHTML = user + "<br>";
  if (user in know) {
    document.getElementById('chatLog').innerHTML = know[user] + "<br>";
  }else{
    document.getElementById('chatLog').innerHTML = "Sorry, The current chatbot is not that smart LOL, type in 'how to use the system' to check the possible question to ask me. :DDDD <br>";
  }
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
