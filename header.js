function funheader(){
  var parent = document.getElementsByClassName("rainbow");

  for (var element = 0; element < parent.length; element++) {
    var string = parent.item(element).innerHTML;
    parent.item(element).innerHTML = "";


    for (var i = 0; i < string.length; i++) {
        parent.item(element).innerHTML += "<span style='--n:"+ (100 * i - 10000 + 'ms') + ";'>" + string[i] + "</span>";
    }
  }
}

funheader()
