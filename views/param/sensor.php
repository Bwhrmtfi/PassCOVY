<?php
class Post
{
    // DB stuff
    public $tem;
    private $conn;
    // Post Properties

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function upDate()
    {
        $query = 'INSERT INTO user_meetes (Uid, feature, image, orther, status,createAt) VALUES (?,?,?,?,1,NOW())';
        $stmt = $this->conn->prepare($query);
        if ($stmt) {
            $stmt->bind_param('ssss', $this->Uid, $this->feature, $this->image, $this->other);
            $stmt->execute();
            return true;
        } else {
            return false;
        }
    }
    public function readSensor()
    {
        $sql = 'SELECT tem FROM sensor';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $hasil = $stmt->get_result();
        $row = $hasil->fetch_array(MYSQLI_ASSOC);

        if ($row != null) {
            $this->tem = $row['tem'];
        } else {
            $this->success = false;
        }
    }
}
