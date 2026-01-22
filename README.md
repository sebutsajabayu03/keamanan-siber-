LANGKAH PENYERANGAN SQL INJECTION 
Penyerang membuka halaman login
http://localhost/keamanan_siber/index.php
Penyerang memasukkan payload SQL Injection
Pada form login:
Username: 
' OR 1=1 --
Password:
bebas
Query yang terjadi jika tidak aman
Jika kode login tanpa prepared statement: 
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
Maka query menjadi: 
SELECT * FROM users WHERE username='' OR 1=1 --' AND password='xxx';
Hasil di Sistem Kamu (Aman) 
$stmt = $conn->prepare("SELECT * FROM users WHERE username=?");

LANGKAH PENYERANGAN UNAUTHORIZED ACCESS (AKSES TANPA LOGIN)
Penyerang langsung akses dashboard
http://localhost/keamanan_siber/dashboard.php
Jika sistem tidak ada session check
Penyerang langsung melihat dashboard tanpa login.
Hasil di Sistem Kamu
Kode kamu:
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
LANGKAH PENYERANGAN PASSWORD THEFT (DATABASE LEAK) 
Penyerang berhasil mendapatkan database dump
Misalnya lewat celah server atau admin lemah. 
Penyerang melihat tabel users 
Jika sistem tidak aman:
username	password
admin	admin123 
Password langsung diketahui.
Penyerang login ke sistem
Username: admin
Password: admin123
Hasil di Sistem Kamu
Password disimpan sebagai hash: 
$password = password_hash("admin123", PASSWORD_DEFAULT); 
Pada database terlihat seperti:
$2y$10$uJxk9.......




