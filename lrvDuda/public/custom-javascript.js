function valUsername() {
    var msg;
    var element = document.getElementById("username");
    var x = document.getElementById("username").value;
    var L =  x.length;

    if(L <= 4){
      msg = "Username minimal 4 huruf";
      element.classList.add("border-danger");
    }else{
      msg = "";
      element.classList.remove("border-danger");
    }
    document.getElementById("UsernameMessage").innerHTML = msg;
  }
  function valInvoice() {
    var msg;
    var element = document.getElementById("invoice");
    var x = document.getElementById("invoice").value;
    var L =  x.length;

    if(L == 6){
      msg = "";
      element.classList.remove("border-danger");
    }else{
      msg = "Nomor Invoice memiliki 6 Digit";
      element.classList.add("border-danger");
    }
    document.getElementById("InvoiceMessage").innerHTML = msg;
  }
  function valEmail() {
    var msg;
    var result
    var element = document.getElementById("email");
    var x = document.getElementById("email").value;
    var patt = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    result = x.match(patt);
    if (!result) {
      msg = x + " Bukanlah email yang valid";
      element.classList.add("border-danger");
    }else{
      msg = "";
      element.classList.remove("border-danger");
    }
    document.getElementById("EmailMessage").innerHTML = msg;
  }