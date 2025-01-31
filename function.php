<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$conn = mysqli_connect("localhost:3310", "root", "", "SMA");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["action"])) {
    if ($_POST["action"] === "register") {
        register();
    } elseif ($_POST["action"] === "login") {
        login();
    }
}

function register() {
    global $conn;

    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    if (empty($firstName) || empty($lastName) || empty($email) || empty($username) || empty($password)) {
        echo "Please fill out all fields.";
        exit;
    }

    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        echo "Invalid email format.";
        exit;
    }

    if (!preg_match("/^[a-zA-Z0-9]{3,20}$/", $username)) {
        echo "Username must be alphanumeric and between 3-20 characters long.";
        exit;
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/", $password)) {
        echo "Password must be at least 8 characters long, with at least one uppercase letter, one lowercase letter, and one digit.";
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM Users WHERE UserName = ? OR Email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username or email is already taken.";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO Users (UserName, Email, Password, FirstName, LastName) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $email, $hashedPassword, $firstName, $lastName);

    if ($stmt->execute()) {
        $_SESSION["login"] = true;
        $_SESSION["id"] = $conn->insert_id; 
        $_SESSION["name"] = $firstName;

        echo "Registration successful.";
    } else {
        echo "Registration failed: " . $stmt->error;
    }
}

// Login an existing user
function login() {
    global $conn;

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (empty($username) || empty($password)) {
        echo "Please fill out all fields.";
        exit;
    }

    if (!preg_match("/^[a-zA-Z0-9]{3,20}$/", $username)) {
        echo "Username must be alphanumeric and between 3-20 characters long.";
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM Users WHERE UserName = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row["Password"])) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["UserID"]; 
            $_SESSION["name"] = $row["FirstName"]; 

            echo "Login successful.";
        } else {
            echo "Wrong password.";
            exit;
        }
    } else {
        echo "User not registered.";
        exit;
    }
}
?>
