<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background:rgb(255, 255, 255);
        }

        .login-container {
            width: 380px;
            background:rgb(212, 249, 255);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo img {
            width: 200px;
            height: 200px;
            object-fit: contain;
            margin-bottom: 10px;
        }
        
        .logo p {
            color: #888;
            font-size: 14px;
        }

        .input-group {
            margin-bottom: 18px;
        }

        .input-group label {
            display: block;
            margin-bottom: 7px;
            color: #555;
            font-size: 14px;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #6f4e37;
            box-shadow: 0 0 0 3px rgba(111, 78, 55, 0.1);
        }

        button {
            width: 100%;
            padding: 13px;
            margin-top: 8px;
            border: none;
            border-radius: 8px;
            background:rgb(201, 147, 0);
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #5a3e2b;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            font-size: 12px;
            color: #999;
        }
    </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
<div class="login-container">

    <div class="logo">
        <img src="assets/logo.png" alt="Logo kopi">
        <p><b>SILAHKAN MASUKAN AKUN ANDA</b></p>
    </div>

        <form action="api/pengguna/ceklogin.php" method="POST">
            <div class="input-group">
                <label>Username</label>
                <input 
                    name="username" 
                    type="text" 
                    placeholder="Masukkan username"
                    required
                >
            </div>

            <div class="input-group">
                <label>Password</label>
                <input 
                    name="password" 
                    type="password" 
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <button type="submit">Login</button>

        </form>

        <div class="footer">
            © 2026 Coffill. All Rights Reserved.
        </div>

    </div>

</form>
</body>
</html>