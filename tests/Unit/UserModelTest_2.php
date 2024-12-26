<?php
use PHPUnit\Framework\TestCase;
use App\Models\UserModel;
use PDO;

class UserModelTest_2 extends TestCase
{
    private $userModel;
    private $pdo;

    // Thiết lập trước mỗi bài test
    protected function setUp(): void
    {
        // Tạo đối tượng PDO với thông tin kết nối cơ sở dữ liệu
        $this->pdo = new PDO('mysql:host=localhost;dbname=your_database', 'root', '');
        $this->userModel = new UserModel($this->pdo);
    }

    // Test hàm fetchUser
    public function testFetchUser()
    {
        // Giả sử fetchUser nhận vào một user_id và trả về thông tin người dùng
        $user = $this->userModel->fetchUser(1);

        // Kiểm tra xem thông tin người dùng có đúng không
        $this->assertNotEmpty($user);
        $this->assertEquals(1, $user['id']);
        $this->assertEquals('ngtuong', $user['user_name']);
    }

    // Test hàm login
    public function testLogin()
    {
        $user = $this->userModel->login('ngtuong', '1234');

        // Kiểm tra login hợp lệ
        $this->assertTrue($user);
    }

    // Test trường hợp sai mật khẩu
    public function testLoginInvalid()
    {
        $user = $this->userModel->login('ngtuong', 'wrongpassword');
        
        // Kiểm tra login không hợp lệ
        $this->assertFalse($user);
    }
}

?>