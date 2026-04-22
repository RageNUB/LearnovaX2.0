<?php
// ============================================
// LearnovaX - Reset Admin Password
// Run ONCE in browser: localhost/LearnovaX/config/reset_admin.php
// Then DELETE this file for security!
// ============================================
require_once 'db.php';

$password = 'admin123';
$hashed   = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = 'admin@learnovax.com'");
$stmt->execute([$hashed]);

echo "<h3>✅ Admin password updated successfully!</h3>";
echo "<p>Email: <strong>admin@learnovax.com</strong></p>";
echo "<p>Password: <strong>admin123</strong></p>";
echo "<br><p style='color:red;'><strong>⚠️ DELETE this file immediately after use!</strong></p>";
