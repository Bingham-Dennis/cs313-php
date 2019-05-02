function myAlert() {
  alert("Clicked!");
}

function changeColor() {
  var boxColor = document.getElementById('color').value;
  document.getElementById('box1').style.backgroundColor = boxColor;
  document.getElementById('box1').style.opacity = .6;
  document.getElementById('color').value = '';
}
