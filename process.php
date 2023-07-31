<?php
      // Process the form data here and generate the diet chart
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $healthCondition = $_POST['health-condition'];
        // Code to generate the diet chart
        // ...
        // Display the diet chart image
        echo '<img src="dietchart.jpg" alt="Diet Chart">';
      }
    ?>
  
    <?php
      // Define an associative array of images and their corresponding age, weight, and health condition ranges
      $images = array(
        "image1.jpg" => array("age" => array("0-10"), "weight" => array("0-30"), "health-condition" => array("none")),
        "image2.jpg" => array("age" => array("10-20"), "weight" => array("30-60"), "health-condition" => array("diabetes")),
        "image3.jpg" => array("age" => array("20-30"), "weight" => array("60-90"), "health-condition" => array("none")),
        "image4.jpg" => array("age" => array("30-40"), "weight" => array("90-120"), "health-condition" => array("hypertension")),
        "image5.jpg" => array("age" => array("40-50"), "weight" => array("120-150"), "health-condition" => array("Obesity")),
        "image6.jpg" => array("age" => array("40-50"), "weight" => array("120-150"), "health-condition" => array("heart-disease")),
      );
      
      // Process the form data
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $healthCondition = $_POST['health-condition'];
        
        // Search for the appropriate image based on the user's input
        $selectedImage = "";
        foreach ($images as $image => $ranges) {
          if (in_array($age, $ranges['age']) && in_array($weight, $ranges['weight']) && in_array($healthCondition, $ranges['health-condition'])) {
            $selectedImage = $image;
            break;
          }
        }
        
        // Display the selected image
        if ($selectedImage !== "") {
          echo '<img src="' . $selectedImage . '" alt="Diet Chart">';
        } else {
          echo 'Sorry, no image is available for your input.';
        }
      }
    ?>
  </body>
</html>
