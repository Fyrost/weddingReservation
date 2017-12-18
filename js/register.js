function user_check(username)
{
  var msg = "";
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          //msg = this.responseText;
          document.getElementById("pass").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("GET", "user.php?user=" + username, true);
  xmlhttp.send();
  if (username.length < 6)
  {
    msg = "Username must contain atleast 6 characters.";
  }
  document.getElementById("user").innerHTML = msg;
}
