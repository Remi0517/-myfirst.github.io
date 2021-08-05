<?php
    $conn = mysqli_connect("localhost", "root", "111111", "jiwoo");
    $sql = "
        DELETE FROM todo WHERE id = {$_POST['id']};
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