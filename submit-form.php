// <?php
// // Database connection settings
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "fireflixdb"; // Your database name

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Get POST values
// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];
// $request_type = $_POST['request_type'];
// $email = $_POST['email'];
// $additional_info = $_POST['additional_info'];

// // Insert into database
// $sql = "INSERT INTO contact_requests (first_name, last_name, request_type, email, additional_info)
//         VALUES ('$first_name', '$last_name', '$request_type', '$email', '$additional_info')";

// if ($conn->query($sql) === TRUE) {
//     echo "<h2>Thank you for contacting FireFlix, $first_name! We will get back to you soon.</h2>";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// // Close connection
// $conn->close();
// ?>
