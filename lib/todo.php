<?php
$conn = mysqli_connect("localhost", "root", "111111", "jiwoo");
$sql = 'SELECT * FROM todo';
$result = mysqli_query($conn, $sql);
$todo_list='';
while($row = mysqli_fetch_array($result)){
    $todo_list = $todo_list."
    <li>{$row['content']}</li>
    <form action=\"./lib/delete_todo.php\" method=\"POST\">
        <input type=\"hidden\" name=\"id\" value=\"{$row['id']}\">
        <input type=\"submit\" value=\"O\">
    </form>
    ";
}
?>