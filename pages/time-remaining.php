<?php
$targetDate = strtotime("2058-04-21 08:59:59");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
</head>

<body>

    <div id="countdown"></div>

    <script>
        function updateCountdown() {
            let currentDate = new Date().getTime();
            let difference = <?php echo $targetDate * 1000 ?> - currentDate;

            let days = Math.floor(difference / (1000 * 60 * 60 * 24));
            let hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((difference % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = "Countdown: " + days + " days " + hours + " hours " + minutes + " minutes " + seconds + " seconds remaining.";
        }

        setInterval(updateCountdown, 1000);
    </script>

</body>

</html>