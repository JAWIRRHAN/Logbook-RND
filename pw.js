function showHide() {
    var inputan = document.getElementById("passwordKu");
    if (inputan.type === "password") {
      inputan.type = "text";
    } else {
      inputan.type = "password";
    }
  } 