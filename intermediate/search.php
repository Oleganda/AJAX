<?php
require_once 'db_connect.php';

$value = $_GET["search"];
$sql = "SELECT * FROM TVSHOWS WHERE title LIKE '$value%'";    //check if the title is similar from what user types in search. value%-checks if value start from same letters
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result)) {                                 //if query return result
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
        <th>{$row["id"]}</th>
        <td>{$row["title"]}</td>
        <td>{$row["genre"]}</td>
        <td>{$row["year"]}</td>
        <td>{$row["country"]}</td>
        </tr>
    ";
    }
}
