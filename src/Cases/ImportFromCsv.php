<?php

namespace Doyoque\Coldspaze\Cases;

class ImportFromCsv
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

    public function import()
    {
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbName);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $csvFile = fopen("data.csv", "r");
        fgetcsv($csvFile);

        while(($line = fgetcsv($csvFile)) !== false) {
          $id = $line[0];
          $firstName = $line[1];
          $lastName = $line[2];
          $email = $line[3];
          $phone = $line[4];

          $sql = "INSERT INTO users (id, first_name, last_name, email, phone) VALUES ('$id', '$firstName', '$lastName', '$email', '$phone')";

          mysqli_query($conn, $sql);
        }

        fclose($csvFile);

        mysqli_close($conn);
    }
}
