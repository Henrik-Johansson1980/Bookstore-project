
// Script som öppnar och stänger sidomenyn
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

//Funktion som gör lite inställningar beroende på vilken sida som visas
function init(){
  var path = window.location.pathname;
  var page = path.split("/").pop();
  //console.log(page);


  if(page == "fantasy.php"){
    //Dölj bokhyllebild
    document.getElementById('imageHeader').style.display="none";
    //Sätt rubriktext beroende på vilken sida det är
    document.getElementById('category').innerHTML = "Fantasy";
  }

  if(page == "horror.php"){
    document.getElementById('imageHeader').style.display="none";
    document.getElementById('category').innerHTML = "Skräck";
  }
  if(page == "scifi.php"){
    document.getElementById('imageHeader').style.display="none";
    document.getElementById('category').innerHTML = "Science Fiction";
  }
  if(page == "tack.php" || page == "item.php"){
    document.getElementById('imageHeader').style.display="none";
  }
}
