
<?php
echo "<div>Esto es contact</div>";
echo "<br/>";
echo '<button onclick="window.location.href=\'../pages/contact.php\'">Go to Index</button>';
?>

<?php
echo "<h3>KATA FIZZ-BUZZ</h3>";
?>

<?php
$let = 100;

for ($i = 1; $i < $let; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0 && $i != 0) {
        echo "<div>FIZZBUZZ</div>";
    } elseif ($i % 5 == 0 && $i != 0) {
        echo "<div>BUZZ</div>";
    } elseif ($i % 3 == 0 && $i != 0) {
        echo "<div>FIZZ</div>";
    } else {
        echo "<div>$i</div>";
    }
}

?>