<?php
/**
 * Author: John Michael Porten
 * Date: January 24, 2018
 * Description:
 */
include ('includes/header.php');

$myArray = array (
  "name" => "J. Michael Porten",
  "color" => "blue",
  "movie" => "No Country For Old Men",
  "book" => "Bears of Blue River",
  "website" => "https://www.twitter.com"
);

function myFunction($myArray){
  for ($i=0; $i<5; $i++) {
      if($i == 1){
        $color = $myArray["color"];
      }elseif($i == 2){
        $movie = $myArray["movie"];
      }elseif($i == 3){
        $book = $myArray["book"];
      }elseif($i == 4){
        $website = $myArray["website"];
      }
  }
  $final = "<ul>
              <li>My favorite color is: $color</li>
              <li>My favorite movie is: $movie</li>
              <li>My favorite book is: $book</li>
              <li>My favorite website is: $website</li>
            </ul>";
  return $final;
}
?>
<h1><?php echo $myArray["name"] ?></h1>
<?php echo myFunction($myArray); ?>

<?php
include ('includes/footer.php');
?>
