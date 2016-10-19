<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		/* $human = intval($_POST['human']); */
		$from = 'Amazing Gracies Contact Form';
		$to = 'agabybarrios@gmail.com';
		$subject = 'Message from Contact Web Form ';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		/* if (!$_POST['name']) {
			$errName = 'Please enter your name';
		} */

		// Check if email has been entered and is valid
		/* if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		} */

		//Check if message has been entered
		/* if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		} */
		/*Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		} */

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage /*&& !$errHuman*/) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The Amazing Gracies FC</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-wraper">
      <section class="jumbotron" id="jumbotron1">
        <div class="container-fluid">

          <img src="img/logo.png" class="col-xs-6 logo img-responsive" alt="The Amazing Gracies Logo" />

          <nav class="navbar navbar-default hidden-sm hidden-md hidden-lg navbar-fixed-top" role="navigation">
            <div class="container-fluid">
              <div class="navbar-heder">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <div class="collapse navbar-collapse pull-right" id="main-nav-collapse">
                <ul class="nav navbar-nav">
                  <li><a href="#get-to-know-us">Get to know us</a></li>
                  <li><a href="#can-i-join">Can I join?</a></li>
                  <li><a href="#where-and-when">Where and when</a></li>
                  <li><a href="#what-to-bring">What to bring</a></li>
                  <li><a href="#any-questions">Any questions</a></li>
                </ul>
              </div>
            </div>
          </nav>
          <!--end navigattion-->


          <div class="container">
            <div class="row">
              <div class="col-xs-13 pull-right football-girl">
                <img  src="img/football-girl-lg.png" class="img-responsive" alt="illustration" />
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-xs-7 heading">
                <h2><i>Ready for a</i></h2>
                <h1>Kick about?</h1>

                <div class="jumbotron-btn">
                  <a role="button" href="#get-to-know-us" class="btn btn-blue btn-block">Get to Know us</a>
                  <img src="img/blue-triangle.png" class="img-responsive triangle-block center-block" alt="blue triangle" />
                </div>
              </div>
            </div>
          </div>

        </div> <!--end container-fluid-->
      </section>
      <!--End jumbotron-->

      <section class="about" id="get-to-know-us">
        <div class="container-fluid">
          <img src="img/football.png" class="icon img-responsive center-block" alt="football icon" />
          <p>
            Glad to see you here! <br>
            We are The Amazing Gracies, Edinburgh’s friendly women’s football club.
          </p>
          <p>
            No matter the Scottish weather, we usually gather once a week for a kick about of 5 a side footy.
          </p>
          <div class="button">
            <a role="button" href="#can-i-join"class="btn btn-yellow">Can I Join?</a>
            <img src="img/yellow-triangle.png" class="triangle-btns img-responsive center-block" alt="yellow triangle" />
          </div>
        </div>
      </section>
      <!--End about-->

      <section class="join" id="can-i-join">
        <div class="container-fluid">
          <img src="img/goal.png" class="icon img-responsive center-block" alt="goal icon" />
          <p>
            Can you kick a football? Do you want to try? <br> If so, we are looking for you!
            We gather for some fun and exercise, with all abilities welcome.
          </p>
          <div class="button">
            <a role="button" href="#where-and-when" class="btn btn-blue">Where and when</a>
            <img src="img/blue-triangle.png" class="triangle-btns img-responsive triangle-block center-block" alt="blue triangle" />
          </div>
        </div>
      </section>
      <!--End join-->

      <section class="info" id=where-and-when>
        <div class="container-fluid">
          <div class="map-holder text-center" id="map">
            &nbsp
          </div>
          <h4>Where:</h4>
          <p>
            Drummond Community High School, <br> 41 Bellevue Place, <br> Edinburgh EH7 4BS
          </p>
          <p class="directions-text">
            The pitch is right in front of the school and visible from the road. <br>Walk down Bellevue Place and go in the school gates.
          </p>
          <h4>When:</h4>
          <p>
            At 7 pm every Wednesday during school term. <br>Check Edinburgh school’s calendar <a href="http://www.edinburgh.gov.uk/info/20074/schools/20/term_dates" target="_blank" class="school-calendar">here</a>.
          </p>
          <div class="button">
            <a role="button" href="#what-to-bring" class="btn btn-yellow">What to bring</a>
            <img src="img/yellow-triangle.png" class="triangle-btns img-responsive triangle-block center-block" alt="yellow triangle" />
          </div>
        </div>
      </section>
      <!--End where-and-when-->

      <section class="bring" id="what-to-bring">
        <div class="container-fluid">
          <img src="img/boots.png" class="icon img-responsive center-block" alt="boots icon" />
          <p>
            £3 to play each week.
            Clothing suited to weather conditions.
            Trainers are fine but can be a bit slippy! Astroturf football boots are best.
          </p>
          <p>
            There are changing rooms inside the school. Ask at the janitor's office just on your right as you go into the school, and he/she will direct you.
          </p>
          <div class="button">
            <a role="button" href="#any-questions" class="btn btn-blue">Any questions?</a>
            <img src="img/blue-triangle.png" class="triangle-btns img-responsive triangle-block center-block" alt="blue triangle" />
          </div>
        </div>
      </section>
      <!--End what-to-bring-->

      <section class="contact" id="any-questions">
        <div class="container-fluid">
          <img src="img/envelope.png" class="icon img-responsive center-block" alt="envelope icon" />
          <p>
            Get in touch via <a class="email" href="#">amazinggraciesfc@hotmail.com</a>, or by filling the contact form below.
          </p>
          <form action="#any-questions" method="post" role="form" class="text-center">

            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Name" required value="<?php echo htmlspecialchars($_POST['name']); ?>"/>
            </div>

            <div class="form-group">
              <input type="email" name="email" class="form-control" id="email" placeholder="Email" required value="<?php echo htmlspecialchars($_POST['email']); ?>"/>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" id="message" required placeholder="Your message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            </div>

            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-default send" value="Send"/>
            </div>

            <div class="form-group">
              <?php echo $result; ?>
            </div>

          </form>

          <div class="button">
            <a role="button" href="#one-last-thing" class="btn btn-yellow">One last thing</a>
            <img src="img/yellow-triangle.png" class="triangle-btns img-responsive triangle-block center-block" alt="yellow triangle" />
          </div>
        </div>
      </section>
      <!--End questions-->

      <section class="quote" id="one-last-thing">
        <div class="container-fluid">
          <img src="img/quotes.png" class="icon img-responsive center-block" alt="quotes icon" />
          <h1 class="quote-text">If you want to score,<br> take the shot.</h1>
          <h2 class="wednesday-text">See you on Wednesday!</h2>
        </div>
      </section>
      <!--End quote-->

      <footer>
        <div class="container-fluid text-center">
          <small class="copy-right">&copy; 2016 The Amazing Gracies FC</small>
          <small>Website by Gaby Barrios</small>
        </div>
      </footer>
      <!--End footer-->

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <!--Google Maps JS script-->
      <script>
        function myMap() {
          var myCenter = new google.maps.LatLng(55.961105, -3.189693);
          var mapCanvas = document.getElementById("map");
          var mapOptions = {
            center: myCenter, zoom: 15
          };
          var map = new google.maps.Map(mapCanvas, mapOptions);
          var marker = new google.maps.Marker({position: myCenter});
          marker.setMap(map);
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
    </div>
  </body>
</html>
