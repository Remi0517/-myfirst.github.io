<?php
$conn = mysqli_connect("localhost", "root", "111111", "jiwoo");
$content = $_POST['content'];
$sql = "
    INSERT INTO todo(content, created) VALUES('{$content}', NOW());
";
if($result = mysqli_query($conn,$sql))  {
    header('Location: ./../index.php');
}else{
    echo '
    <script>
        alert("저장실패");
    </script>
    ';
}
?>