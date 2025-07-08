<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Welcome | EcoCityAdapt</title>
  <link rel="icon" href="img/logo.png" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="180x180" href="img/logo.png" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html">EcoCityAdapt</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html#topics">Topics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="playground.html">Play Ground</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about-us.html">About Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <img class="d-block w-100" src="img/a1.png"/>

  <!-- Beautifying the result page and adding a badge on with user score -->
  <?php
  // Define the correct answers for each question
  $correctAnswers = array(
    'q1' => 'a',
    'q2' => 'c',
    'q3' => 'c',
    'q4' => 'c',
    'q5' => 'c',
    'q6' => 'c',
    'q7' => 'b',
    'q8' => 'c',
    'q9' => 'c',
    'q10' => 'b',
  );

  // Initialize the score
  $score = 0;

  // Loop through each question and check if the submitted answer is correct
  foreach ($correctAnswers as $question => $correctAnswer) {
    if (isset($_POST[$question]) && $_POST[$question] === $correctAnswer) {
      $score++;
    }
  }
  ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-5">
          <div class="card-header">
            <h4>Result</h4>
          </div>
          <div class="card-body">
            <h1 class="text-center"><?php if ($score >= 7) {
                                      echo "Congratulations! 🎉";
                                    } else {
                                      echo "Sorry!";
                                    } ?></h1>
            <h2 class="text-center">You have <?php if ($score >= 7) {
                                                echo "PASSED";
                                              } else {
                                                echo "FAILED";
                                              } ?> the quiz</h2>
            <h3 class="text-center">Your Score is: <?php echo $score; ?>/10</h3>
            <!-- You won a badge -->
            <?php if ($score >= 7) {
              echo "<hr><center>You have won a badge!</center>";
              echo "<center><img src='img/media-badge.png' alt='badge' width='150px' height='150px'></center>";
            }
          else{
            echo "<hr><center>Atleast <b>70%</b> to Pass :(</center>";
          } ?>
            <br>

            <?php
            if ($score >= 7) {
              // If the score is greater than or equal to 7, go to the next page
              echo '<center><a href="quiz-adapt.html" class="btn btn-primary">Take Again</a> <a href="index.html#topics" class="btn btn-primary">Go to a new Topic</a></center>';
            } else {
              // If the score is less than 7, allow the user to try the quiz again
              echo '<center><a href="quiz-adapt.html" class="btn btn-primary">Try Again</a></center>';
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer starts -->
  <footer class="footer-distributed">
        <div class="footer-left">
          <h3>Eco<span>CityAdapt</span></h3><br>
          <p class="footer-links">
            <a href="index.html">Home</a>
            ·
            <a href="index.html#topics">Topics</a>
            ·
            <a href="playground.html">Play Ground</a>
            ·
            <a href="about-us.html">About Us</a>
          </p>
          <p class="footer-company-name">EcoCityAdapt &copy; 2023</p>
        </div>
        <div class="footer-center">
          <div>
            <i class="fa fa-map-marker"></i>
            <span>EcoCityAdapt</span><br /><br />
          </div>
          <div>
            <i class="fa fa-phone"></i>
            (+91) 9108553983<br /><br />
          </div>
          <div>
            <i class="fa fa-envelope"></i>
            <a color: white;" href="mailto:hiluxfokou33@gmail.com">hiluxfokou33@gmail.com</a>
          </div>
        </div>
        <div class="footer-right">
          <p class="footer-company-about">
            <span>About EcoCityAdapt</span>
            EcoCityAdapt is a platform dedicated to fostering Media and Information Literacy (MIL), Cyber Security Awareness (CSA), and Climate Change Education. We believe in empowering individuals to navigate the digital landscape responsibly, ensuring online safety, and promoting awareness and action for environmental sustainability. Join us on our mission to create a world where everyone is equipped with the knowledge and skills to make informed decisions in the digital era while contributing to a greener and more sustainable future.
          </p>
  
          <div class="footer-icons">
            <a href="https://www.facebook.com/citymil" target="_blank"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a href="https://twitter.com/citymil" target="_blank"
              ><i class="fab fa-twitter"></i
            ></a>
            <a href="https://www.instagram.com/citymil/" target="_blank"
              ><i class="fab fa-instagram"></i
            ></a>
            <a
              href="https://www.youtube.com/channel/UCZ3Z6Z6Z2ZqQ4Z9XZ9Z9Z9Q"
              target="_blank"
              ><i class="fab fa-youtube"></i
            ></a>
          </div>        <form>
            <select>
              <option>English</option>
              <option>Français</option>
              <option>Swahili</option>
              <option>हिन्दी</option>
              <option>বাংলা</option>
            </select>
          </form>
        </div>
      </footer>

 <!-- Bootstrap core JavaScript for the cross-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>