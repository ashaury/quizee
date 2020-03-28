<?php
include("lib.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
</head>

<body>
    <table>
        <tr>
            <th>IP</th>
            <th>NIM</th>
            <th>Mata Kuliah</th>
            <th>Waktu</th>
        </tr>
        <?php
        $res = get();
        while ($data = mysqli_fetch_array($res)) {
            echo "
            <tr>
            <td>$data[0]</td>
            <td>$data[1]</td>
            <td>$data[2]</td>
            <td>$data[3]</td>
            </tr>
            ";
        }
        ?>
    </table>
</body>

</html>