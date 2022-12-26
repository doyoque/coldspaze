<?php

namespace Doyoque\Coldspaze\Cases;

class MysqliRetriveRecord
{
    protected $hostname;
    protected $username;
    protected $password;
    protected $dbName;

    public function __construct($hostname, $username, $password, $dbName)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
    }

    public function RetriveUser()
    {
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbName);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT id, first_name, last_name, email, phone FROM users";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row['id'] . " - first_name: " . $row['first_name'] . 
                  " - last_name: " . $row['last_name'] . " - email: " . $row['email'] . 
                  " - phone: " . $row['phone'] . "<br>";
            }
        } else {
            echo "0 result";
        }

        mysqli_close($conn);
    }
}
