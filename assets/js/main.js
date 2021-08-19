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