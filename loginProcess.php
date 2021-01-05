<?php
$conn = mysqli_connect("localhost", "root", "Acute3062!", "test");
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email ='{$email}'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$hashedPassword = $row['password'];
$row['id'];

foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}
$passwordResult = password_verify($password, $hashedPassword);
if ($passwordResult === true) {
    session_start();
    $_SESSION['userId'] = $row['id'];
    print_r($_SESSION);
    echo $_SESSION['userId'];
?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "index.php";
    </script>
<?php
} else {
?>
    <script>
        alert("로그인에 실패하였습니다");
    </script>
<?php
}
?>