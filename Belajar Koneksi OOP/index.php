<?php

require_once 'classes/Auth.php';

$auth = new Auth("localhost", "root", "", "student_2025");

$auth->register("Arief", "arief123", "rahasia");

$data = $auth->getAllUsers();
echo "<pre>";
print_r($data);
echo "</pre>";

$auth->update(1, [
    'name' => 'Arief Diperbarui',
    'username' => 'arief_updated',
    'password' => password_hash('arief123', PASSWORD_BCRYPT)
]);

?>