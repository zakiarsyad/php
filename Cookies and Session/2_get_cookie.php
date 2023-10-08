<html>

<head>
    <title>Cookie</title>
</head>

<body>
    <?php
    if (isset($_COOKIE["user"])) {
        echo "Nilai user : " . $_COOKIE["user"];
        echo "<br/>";
        echo "Nilai bahasa : " . $_COOKIE["bahasa"];
        echo "<br/>";

        if ($_COOKIE["bahasa"] == "Indonesia") {
            echo "hai, Selamat datang";
        } else {
            echo "Welcome . . .";
        }
    } else {
        echo "Belum ada nilai cookie";
    }

    ?>
</body>

</html>