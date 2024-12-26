<?php
use PHPUnit\Framework\TestCase;
use App\Models\UserModel;
use PDO;

class UserModelTest_2 extends TestCase
{
    private $userModel;
    private $pdo;

    protected function setUp(): void
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=your_database', 'root', '');
        $this->userModel = new UserModel($this->pdo);
    }

    public function testFetchUser()
    {
        $user = $this->userModel->fetchUser(1);

        $this->assertNotEmpty($user);
        $this->assertEquals(1, $user['id']);
        $this->assertEquals('ngtuong', $user['user_name']);
    }

    public function testLogin()
    {
        $user = $this->userModel->login('ngtuong', '1234');

        $this->assertTrue($user);
    }

    public function testLoginInvalid()
    {
        $user = $this->userModel->login('ngtuong', 'wrongpassword');
        $this->assertFalse($user);
    }
}

?>