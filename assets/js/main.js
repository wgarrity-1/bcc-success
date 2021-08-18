function plainLogo(){
	var logo_whole = document.getElementById("logo");
	var logo_slanted = document.getElementById("logo-not-to");
	
	var logo_whole_css = "font-family: serif; color: black; background-color: white;";
	
	var logo_slanted_css = "display: inline; border: none; background-color: white; padding: 0px; transform: none; margin: 0px;"
	
	logo_whole.setAttribute("style", logo_whole_css);
	logo_slanted.setAttribute("style", logo_slanted_css);
}

function normalLogo(){
	var logo_whole = document.getElementById("logo");
	var logo_slanted = document.getElementById("logo-not-to");
	
	logo_whole.removeAttribute("style");
	logo_slanted.removeAttribute("style");
}

function openNav() {
	document.getElementById("mobile-nav").style.height = "100%";
}

function closeNav() {
	document.getElementById("mobile-nav").style.height = "0%";
}

function checkQuiz(answer_id) {
	var feedback_element = document.getElementById("feedback");
	
	if (document.getElementById(answer_id).checked == true) {
		feedback_element.innerHTML = "That answer is correct!";
		feedback_element.style.color = "green";
	} else {
		feedback_element.innerHTML = "That answer is incorrect, please try again.";
		feedback_element.style.color = "red";
	}
}