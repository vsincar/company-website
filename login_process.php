<?php
require_once('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['usrnm'];
    $password = $_POST['psw'];

    // Güvenlik için şifreleme (örneğin, md5 kullanılmamalıdır, güvenli şifreleme yöntemleri tercih edilmelidir)
    $hashedPassword = md5($password);

    // Kullanıcıyı sorgula
    $query = "SELECT * FROM login WHERE usr = '$username' AND pass = '$hashedPassword'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Kullanıcı doğrulandı, sayfa açılabilir
        echo "Giriş başarılı!";
    } else {
        // Kullanıcı doğrulanamadı, hata mesajı verebilir veya başka bir işlem yapabilirsiniz
        echo "Giriş başarısız. Kullanıcı adı veya şifre yanlış.";
    }
}
?>
