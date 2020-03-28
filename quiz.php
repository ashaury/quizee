<?php
include("lib.php");
if (isset($_POST['nim'])) {
    $data = array(
        "ip" => getIP(),
        "nim" => $_POST['nim'],
        "mk" => $_POST['mk']
    );
    if (save($data)) {
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ujian Tengah Semester</title>
            <link rel="stylesheet" href="style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="script.js"></script>
            <script>
                function makeTimer() {
                    <?php $min = 100; ?>
                    endTime = <?php echo time() + $min * 60; ?>;
                    var now = new Date();
                    now = (Date.parse(now) / 1000);
                    var timeLeft = endTime - now;

                    var hours = Math.floor((timeLeft) / 3600);
                    var minutes = Math.floor((timeLeft - (hours * 3600)) / 60);
                    var seconds = Math.floor((timeLeft - (hours * 3600) - (minutes * 60)));

                    if ((hours == 0) && (minutes==0) && (seconds == 0)) {
                        alert("Waktu Telah Habis");
                        window.close();
                        $("body").html("");
                        window.location.href = "index.php";
                    }

                    if (hours < "10") {
                        hours = "0" + hours;
                    }
                    if (minutes < "10") {
                        minutes = "0" + minutes;
                    }
                    if (seconds < "10") {
                        seconds = "0" + seconds;
                    }
                    $("#hours").html(hours + "<span>Hours</span>");
                    $("#minutes").html(minutes + "<span>Minutes</span>");
                    $("#seconds").html(seconds + "<span>Seconds</span>");

                }
                setInterval(function() {
                    makeTimer();
                }, 1000);
            </script>
        </head>

        <body>
            <nav>
            <h3>Percobaan <?php echo attempt($data); ?></h3>
                <div id="timer">
                    <div id="hours"></div>
                    <div id="minutes"></div>
                    <div id="seconds"></div>
                </div>
            </nav>
        </body>

        </html>
<?php
    } else {
        echo "Error ";
    }
} else {
    header("location:index.php");
}
?>