function burguer_navbar_sup () {
	
	var state = document.getElementById("navbar_sup");

	if (state.style.display == "block") {
		state.style.display = "none";
	} else {
		state.style.display = "block";
	}

}