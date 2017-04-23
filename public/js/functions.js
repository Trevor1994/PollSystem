function myFunction() {
    var x = document.getElementById('multi');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

// Once the 'add question' button is clicked then it will clone it
function clone() {
  var multi = document.getElementById("multi");
  var clonedQuestion = multi.cloneNode(true);
  clonedQuestion.id = ""; //clear the id property of the cloned table

  var container = document.getElementById("container");
  container.appendChild(clonedQuestion);
}
