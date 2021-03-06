<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 $iDontLovePHP = false;
 $iLovePHP = true;


 if($iDontLovePHP) {
	 echo 'i don\'t love php <br>';
 } else if($iLovePHP) {
	echo 'i love php <br>';
 }

 $forCounter = 10;

 for($counter = 0; $counter < $forCounter; $counter++) {
	 echo $counter . '<br>';
 }

 $name = 'Martin';
 switch($name) {
		case 'Jerry':
			echo 'Hello Jerry';
			break;
		case 'Martin':
			echo 'Hello Martin';	
			break;
		default:
			echo 'Not a name';

 }

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>