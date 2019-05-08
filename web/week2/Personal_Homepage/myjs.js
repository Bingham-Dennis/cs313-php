function loadTime() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(new Date(parseInt(this.responseText) * 1000));
      document.getElementById('time').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "./getTime.php", true);
  xhttp.send();
}
