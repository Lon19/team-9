    
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "css.css" />
<script type="text/javascript" src="javascript.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav" id="myTopnav">
  <img class="logo" src="images/ProjectAccess.png">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="parallax" >
<?php
    include 'connect.php';
    $conn = OpenCon();
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT course_id,	name,	entry_requirements,	university_id  FROM courses";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "course_id: " . $row["course_id"]. " - Name: " . $row["name"]. " " . $row["entry_requirements"]. " " .$row["university_id"]. "<br>";
    }
    } else {
    echo "0 results";
}
$conn->close();
    
?>

     

</div>

<div class="under">
  <h2>Project Access is a global community of mentors and entrepreneurial students
    </h2><p>At Project Access we believe that the current university 
      community has the power to once and for all solve the access 
      problem. Our mentors have recently been through the application 
      process themselves, and remember what it was like. They help 
      applicants from start to finish and provide support on everything 
      from summer reading lists to their personal reflections on moving 
      away from home.</p>
</div>

<button class="w3-button w3-green" target="_blank" onclick="window.location.href = 'index.html'">Green</button>

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
