<?php


  $correct = 0;

  echo "Question 1: Where is KU? <br>";
  $guess = $_POST[1];
  echo "Your answer: " .$guess. "<br>";
  echo "Correct answer: Lawrence <br><br>";
  if("Lawrence" == $guess)
    $correct++;

    echo "Question 2: What brand sponsors KU Athletics?  <br>";
    $guess = $_POST[2];
    echo "Your answer: " .$guess. "<br>";
    echo "Correct answer: Adidas <br><br>";
    if("Adidas" == $guess)
      $correct++;

      echo "Question 3: What is the name of KU basketball arena?  <br>";
      $guess = $_POST[3];
      echo "Your answer: " .$guess. "<br>";
      echo "Correct answer: Allen Fieldhouse <br><br>";
      if("Allen Fieldhouse" == $guess)
        $correct++;

         echo "Question 4: Who performed at Late Night in the Phog in 2019?  <br>";
         $guess = $_POST[4];
         echo "Your answer: " .$guess. "<br>";
         echo "Correct answer: Snoop Dog <br><br>";
         if("Snoop Dog" == $guess)
           $correct++;

           echo "Question 5: What sport does Sarah Scott do at KU?  <br>";
           $guess = $_POST[5];
           echo "Your answer: " .$guess. "<br>";
           echo "Correct answer: Track <br><br>";
           if("Track" == $guess)
             $correct++;

  echo "Total correct: " .$correct. "<br>";
  $percent = $correct * 20;
  echo "Percent: " .$percent. "%";

?>
