<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		$number1 = 10;
		$number2 = 20;

		$sum = $number1 + $number2;

		echo "The Sum of Number1 And Number2 = " . $sum . "<br>";

		$array1 = [1, 2, 3, 4];

		$array2 = array(10, 20, 30, 40, 50);

		$array = array("first_value" => "100", "second_value" => "200");


		echo "First value of array1 = " . $array1[0] . "<br>";
		echo "Second value array1 = " . $array1[1] . "<br>";
		echo "Third value array1 = " . $array1[2] . "<br>";
		echo "First value array2 = " . $array2[0] . "<br>";
		echo "Second value array2  = " . $array2[1] . "<br>";
		echo "Third value array2  = " . $array2[2] . "<br>";
		echo "First value = " . $array["first_value"] . "<br>";
		// print_r(array);
		

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

					  Step 2: Add the two variables and display the sum with echo:


					  Step3: Make 2 Arrays with the same values, one regular and the other associative

					 
						 */




		?>



	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>