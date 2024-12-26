<?php
use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase {
    private $db;

    protected function setUp(): void {
        $this->db = new PDO('mysql:host=localhost;dbname=fashionconnect_test', 'root', '');
    }

    public function testFetchUser() {
        $stmt = $this->db->prepare("SELECT * FROM `users` WHERE id = ? " );
        $stmt->execute([17]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->assertNotEmpty($user, "User with ID 1 should exist in the database");

        $this->assertArrayHasKey('name', $user, "Field 'name' should exist");
        $this->assertArrayHasKey('user_name', $user, "Field 'user_name' should exist");
        $this->assertArrayHasKey('password', $user, "Field 'password' should exist");

        $this->assertEquals('ngtuong', $user['name'], "User name does not match expected value");
        $this->assertEquals('ngtuong', $user['user_name'], "User username does not match expected value");
        $this->assertEquals('1234', $user['password'], "User password does not match expected value");
    }

    protected function tearDown(): void {
        $this->db = null;
    }
}

?>