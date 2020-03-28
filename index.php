<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Form Quiz Timer</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="box-body">
            <form action="quiz.php" method="post">
                <h1>UJIAN MATA KULIAH</h1>
                NIM : <input type="number" class="form-control" name="nim" required placeholder="NIM">
                <br>
                <p class="alert alert-warning">
                    Anda hanya bisa mencoba sekali, jika sudah siap, tekan tombol Mulai.
                </p>
                <input type="submit" class="btn btn-primary form-control" value="Mulai">
                <input type="hidden" name="mk" value="tekweb">
            </form>
        </div>
    </div>
</body>

</html>