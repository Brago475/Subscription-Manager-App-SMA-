<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Subscription Manager App</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #1a1a1a, #3e3e3e);
            color: #fff;
        }

        .container {
            display: flex;
            width: 80%;
            max-width: 1200px;
            justify-content: space-between;
        }

        /* Left Section */
        .left-section {
            flex: 1;
            padding: 20px;
        }

        .left-section h1 {
            font-size: 48px;
            color: #ff0000;
            margin-bottom: 10px;
        }

        .left-section p {
            font-size: 18px;
            margin: 0;
            color: #ccc;
        }

        /* Right Section */
        .right-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background-color: #fff;
            color: #333;
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login-card h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            color: #333;
            font-size: 14px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007bff;
        }

        /* Buttons */
        .login-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            width: 100%;
            padding: 10px 15px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #0056b3;
        }

        .register-link {
            color: #ff0000;
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
            }

            .left-section {
                margin-bottom: 20px;
            }
        }
    </style>
    <script>
        function submitData() {
            const username = document.getElementById("username").value.trim();
            const password = document.getElementById("password").value.trim();

            if (!username || !password) {
                alert("Please fill out all fields.");
                return;
            }

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "function.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onload = function () {
                if (xhr.status === 200) {
                    alert(xhr.responseText);
                    if (xhr.responseText === "Login successful.") {
                        window.location.href = "index.php";
                    }
                } else {
                    alert("An error occurred.");
                }
            };

            xhr.send(`action=login&username=${encodeURIComponent(username)}&password=${encodeURIComponent(password)}`);
        }
    </script>
</head>
<body>
    <div class="container">
        <!-- Left Section -->
        <div class="left-section">
            <h1>Subscription Manager App</h1>
            <p>Track everything, lose track of nothing.</p>
        </div>

        <!-- Right Section (Login Card) -->
        <div class="right-section">
            <div class="login-card">
                <h2>Login</h2>
                <form onsubmit="return false;">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="button" class="login-button" onclick="submitData();">Login</button>
                </form>
                <hr>
                <p>Don't have an account? <a href="register.php" class="register-link">Register</a></p>
            </div>
        </div>
    </div>
</body>
</html>
