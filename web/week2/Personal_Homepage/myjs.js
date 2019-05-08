function loadTime() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      document.getElementById().innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "./getTime.php", true);
  xhttp.send();
}
