<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=mydb", "root", "pass");
    $sql = "SELECT * FROM non_existent_table";
    $result = $conn->query($sql);
    foreach ($result as $row) {
        echo $row['column_name'] . "\n";;
    }
} catch (PDOException $e) {
    echo "Kesalahan koneksi atau query: " . $e->getMessage();
}












// try {
//     $conn = new PDO("mysql:host=localhost;dbname=mydb", "root", "");
//     $sql = "SELECT * FROM mytable";
//     $result = $conn->query($sql);
//     foreach ($result as $row) {
//         echo $row['name'] . "\n";;
//     }
// } catch (PDOException $e) {
//     echo "Kesalahan koneksi atau query: " . $e->getMessage();
// }