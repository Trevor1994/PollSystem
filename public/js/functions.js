/**function myFunction() {
    var x = document.getElementById('multi');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
} **/

// Once the 'add question' button is clicked then it will clone it
function clone() {
  var multi = document.getElementById("multi");
  var clonedQuestion = multi.cloneNode(true);
  clonedQuestion.id = ""; //clear the id property of the cloned table

  var container = document.getElementById("container");
  container.appendChild(clonedQuestion);
}

// Checks the click count for the 'add question' button as once the user clicks the button 4 times
// the user will be alerted with the a pop-up box stating that they have reached the max number of clicks
var ClickCount = 1;
function countClicks() {
	var clickLimit = 4; //Max number of clicks
	if(ClickCount>=clickLimit) {
		alert("You have reached the max number of radio buttons.");
		return false;
	}
	else
	{
		ClickCount++;
		return true;
	}
}
