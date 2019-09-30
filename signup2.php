<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Hunk Nutrition</title>
		<link rel='shortcut icon' href='images/logo.ico' type='image/x-icon' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/header-footer.css">
		<link rel="stylesheet" href="css/style-signup.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	</head>




	<body background="login/bg.jpg">
		<form autocomplete="off" id="regForm" method="" action="index.php">
			<h1>Register:</h1>
			<!-- One "tab" for each step in the form: -->
			<div class="tab">Name:
				<p><input type="text" placeholder="First name..." oninput="this.className = ''" name="fname"></p>
				<p><input type="text" placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
			</div>
			<div class="tab">Contact Info:
				<p><input type="email" placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
				<p><input type="text" placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
			</div>
			<div class="tab">Birth Date:
				<p><input placeholder="Date 'DD'" oninput="this.className = ''" name="day 'DD'"></p>
				<p><input placeholder="Month 'MM'" oninput="this.className = ''" name="Month 'MM'"></p>
				<p><input placeholder="Year 'YYYY'" oninput="this.className = ''" name="Year 'YYYY'"></p>
			</div>
			<div class="tab">Login Info:
				<p><input placeholder="Username..." oninput="this.className = ''" name="Username"></p>
				<p><input placeholder="Password..." oninput="this.className = ''" name="Password" type="password"></p>
			</div>
			<div style="overflow:auto;">
				<div style="float:right;">
					<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
					<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
				</div>
			</div>

			<div style="text-align:center;margin-top:40px;">
				<span class="step"></span>
				<span class="step"></span>
				<span class="step"></span>
				<span class="step"></span>
			</div>
		</form>

		<script>
			var currentTab = 0; // Current tab is set to be the first tab (0)
			showTab(currentTab); // Display the current tab

			function showTab(n) {
			// This function will display the specified tab of the form...
			var x = document.getElementsByClassName("tab");
			x[n].style.display = "block";
			//... and fix the Previous/Next buttons:
			if (n == 0) {
				document.getElementById("prevBtn").style.display = "none";
			} else {
				document.getElementById("prevBtn").style.display = "inline";
			}
			if (n == (x.length - 1)) {
				document.getElementById("nextBtn").innerHTML = "Submit";
			} else {
				document.getElementById("nextBtn").innerHTML = "Next";
			}
			//... and run a function that will display the correct step indicator:
			fixStepIndicator(n)
			}

			function nextPrev(n) {
			// This function will figure out which tab to display
			var x = document.getElementsByClassName("tab");
			// Exit the function if any field in the current tab is invalid:
			if (n == 1 && !validateForm()) return false;
			// Hide the current tab:
			x[currentTab].style.display = "none";
			// Increase or decrease the current tab by 1:
			currentTab = currentTab + n;
			// if you have reached the end of the form...
			if (currentTab >= x.length) {
				// ... the form gets submitted:
				document.getElementById("regForm").submit();
				return false;
			}
			// Otherwise, display the correct tab:
			showTab(currentTab);
			}

			function validateForm() {
			// This function deals with validation of the form fields
			var x, y, i, valid = true;
			x = document.getElementsByClassName("tab");
			y = x[currentTab].getElementsByTagName("input");
			// A loop that checks every input field in the current tab:
			for (i = 0; i < y.length; i++) {
				// If a field is empty...
				if (y[i].value == "") {
				// add an "invalid" class to the field:
				y[i].className += " invalid";
				// and set the current valid status to false
				valid = false;
				}
			}
			// If the valid status is true, mark the step as finished and valid:
			if (valid) {
				document.getElementsByClassName("step")[currentTab].className += " finish";
			}
			return valid; // return the valid status
			}

			function fixStepIndicator(n) {
			// This function removes the "active" class of all steps...
			var i, x = document.getElementsByClassName("step");
			for (i = 0; i < x.length; i++) {
				x[i].className = x[i].className.replace(" active", "");
			}
			//... and adds the "active" class on the current step:
			x[n].className += " active";
			}
		</script>
	</body>
</html>
