<?php
require_once 'db_connect.php';

$sql = "SELECt * FROM TVSHOWS";
$result = mysqli_query($connect, $sql);

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
