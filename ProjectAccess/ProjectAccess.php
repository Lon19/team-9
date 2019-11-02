    
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "css.css" />
<script type="text/javascript" src="javascript.js"></script>
<meta charset="UTF-8">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav" id="myTopnav">
  <img class="logo" src="images/ProjectAccess.png">
  <a href="https://projectaccess.org/our-teams" class="active">Who we are</a>
  <a href="https://projectaccess.org/our-teams">Our Teams</a>
  <a href="https://projectaccess.org/what-we-do">What we do</a>
  <a href="https://projectaccess.org/for-applicants">For applicants</a>
  <a href="https://projectaccess.org/blog">Blog</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="parallax"></div>

<div class="under">
  <h2>Project Access is a global community of mentors and entrepreneurial students</h2>
   <p>At Project Access we believe that the current university 
      community has the power to once and for all solve the access 
      problem. Our mentors have recently been through the application 
      process themselves, and remember what it was like. They help 
      applicants from start to finish and provide support on everything 
      from summer reading lists to their personal reflections on moving 
      away from home.Find more information about applying to colleges in Ireland
      <a href = "https://moving2ireland.com/international-students-in-ireland-how-to-apply">Here</a></p>
</div>

<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					COURSE SEARCH
				</span>
				<div class="wrap-input100 input100-select bg1">
						<span class="label-input100">Country *</span>
						<div>
							<select class="js-select2" name="service">
									<option>Please choose one</option>
									<option>Ireland</option>
									<option>UK</option>
									<option>USA</option>
							</select>
							<div class="dropDownSelect2"></div>
						</div>
					</div>
				<div class="w-full dis-none js-show-service">
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">Do you have any colleges in mind </span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
							<label class="label-radio100" for="radio1">
								No
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
							<label class="label-radio100" for="radio2">
								University College Dublin (UCD)
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
							<label class="label-radio100" for="radio3">
								Trinity College Dublin (TCD)
							</label>
						</div>

						<div class="contact100-form-radio">
								<input class="input-radio100" id="radio3" type="radio" name="type-product" value="digital">
								<label class="label-radio100" for="radio3">
									University of Limerick (UL)
								</label>
							</div>
					</div>
				</div>
				<div class="container-contact100-form-btn">
					<button  class="contact100-form-btn" >
						<span>
							<a href ="ProjectAccess.php" style="color:white; font-size : 20px;" >Submit</a>
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<div class="data">

<?php
    include 'connect.php';
    $conn = OpenCon();
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT course_id,	name,	entry_requirements,	university_id  FROM courses WHERE university_id = 1" ;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table><tr>
      <th>Course ID</th>
      <th>Name</th>
      <th>Entry Requirements</th>
      <th>University ID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo "<tr><td>" .$row["course_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["entry_requirements"]. "</td><td>" .$row["university_id"]. "<br/></td></tr>";
        }
        echo "</table>"; 
    }
    else {
    echo "0 results";
  

}
$conn->close();
    
?>
</div>

<div class="footer">
    <p><a href="https://projectaccess.org/contact-us">contact us</a>|
      <a href="https://www.instagram.com/projectaccess.intl/">instagram</a>|
      <a href="https://twitter.com/projectaccess_/">twitter</a>|
      <a href="https://www.facebook.com/projectaccess.intl/">facebook</a>|
      <a href="https://www.linkedin.com/in/projectaccess">linkedin</a>|
      <a href="https://www.youtube.com/channel/UCgyGgt6l17sLAvXTFoaQOdA">youtube</a>|
      <a href="https://projectaccess.org/internal">internal</a>
      <a class="translate_box" id="google_translate_element"></a>
    </p>
  </div>

  	
<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
  

</body>
</html>
