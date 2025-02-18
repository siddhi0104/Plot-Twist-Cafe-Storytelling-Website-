<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($email) && !empty($password)) {
        $host = "127.0.0.1:3306";
        $dbUsername = "root";
        $dbPassword = "root";
        $dbname = "PTC";

        // Create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $select = "SELECT email FROM register WHERE email = ?";
            $insert = "INSERT INTO register (username, email, password) VALUES (?, ?, ?)";

            $stmt = $conn->prepare($select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($insert);
                $stmt->bind_param("sss", $username, $email, $password);
                $stmt->execute();
                echo "Registered Successfully!";
            } else {
                echo "Already Registered with this email";
            }
            $stmt->close();
            $conn->close();
        }
    } else {
        echo "All fields are required";
    }
}
?>




