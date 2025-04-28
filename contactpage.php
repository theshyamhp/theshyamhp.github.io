<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fireflixdb"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST values
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$request_type = $_POST['request_type'];
$email = $_POST['email'];
$additional_info = $_POST['additional_info'];

// Insert into database
$sql = "INSERT INTO contact_requests (first_name, last_name, request_type, email, additional_info)
        VALUES ('$first_name', '$last_name', '$request_type', '$email', '$additional_info')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Thank you for contacting FireFlix, $first_name! We will get back to you soon.</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FireFlix - Stream the hottest new releases, highly rated movies, and fan favorites. Contact us for more information!">
    <meta name="keywords" content="FireFlix, movies, new releases, fan favorites, highly rated, streaming, entertainment">
    <meta name="author" content="FireFlix Team">
    <link rel="stylesheet" href="styles.css">
    <title>FireFlix</title>
</head>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-1J6J5XYDCE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-1J6J5XYDCE');
</script>

<body>
    <header>
        <img src="images/fireflixlogo.jpeg" alt="FireFlix Logo">
        <h1>FireFlix</h1>
        <nav>
            <ul>
                <li><a href="https://theshyamhp.github.io">Home</a></li>
                <li><a href="/highlyrated.html">Highly Rated</a></li>
                <li><a href="#">New Releases</a></li>
                <li><a href="#">Fan Favorites</a></li>
                <li><a href="/contactpage.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Contact Us</h2>
        <form action="submit-form.php" method="POST">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" required>

            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" required>

            <label for="request-type">Request Type:</label>
            <select id="request-type" name="request_type" required>
                <option value="">Select a Request Type</option>
                <option value="general">General Inquiry</option>
                <option value="support">Support Request</option>
                <option value="feedback">Feedback</option>
                <option value="other">Other</option>
            </select>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="additional-info">Additional Information:</label>
            <textarea id="additional-info" name="additional_info" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
