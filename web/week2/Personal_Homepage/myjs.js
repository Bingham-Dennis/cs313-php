function loadTime() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('time').innerHTML = new Date(parseInt(this.responseText) + '000');
    }
  };
  xhttp.open("GET", "./getTime.php", true);
  xhttp.send();
}
