<?php

function idcontinue() {
    static $userid = 1;
    return $userid++;
}

class member {
    private $fullname;
    private $email;
    private $idmember;

    public function __construct($fullname, $email) {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->idmember = idcontinue();
    }

    public function get_fullname() {
        return $this->fullname;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_id() {
        return $this->idmember;
    }

    // ... Other methods
}

// Ví dụ sử dụng lớp
$member1 = new member("Nguyen Van A", "email1@example.com");
echo $member1->get_id(); // Xuất ra ID 1

$member2 = new member("Tran Van B", "email2@example.com");
echo $member2->get_id(); // Xuất ra ID 2

?>