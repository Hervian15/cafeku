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
            background: #f5eee6;
        }

        .dashboard {
            text-align: center;
        }

        .dashboard h1 {
            color: #6f4e37;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .dashboard p {
            color: #777;
            margin-bottom: 35px;
        }

        .menu {
            display: flex;
            gap: 25px;
            justify-content: center;
        }

        /* Button */
        .menu a {
            width: 250px;
            height: 180px;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            text-decoration: none;
            background: white;
            color: #6f4e37;

            border-radius: 15px;

            font-size: 21px;
            font-weight: bold;

            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);

            transition: 0.3s;
        }

        /* Image Logo */
        .menu a img {
            width: 65px;
            height: 65px;
            object-fit: contain;
            margin-bottom: 15px;
            transition: 0.3s;
        }

        /* Hover */
        .menu a:hover {
            background: #6f4e37;
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .menu a:hover img {
            filter: brightness(0) invert(1);
        }

        /* Responsive */
        @media (max-width: 600px) {
            .menu {
                flex-direction: column;
            }

            .menu a {
                width: 280px;
            }
        }
    </style>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <div class="dashboard">

        <h1>Coffill Dashboard</h1>

        <p>
            Silakan pilih menu yang ingin Anda buka
        </p>

        <div class="menu">

            <!-- Daftar Pengguna -->
            <a href="pengguna.php">

                <img src="assets/user.png" alt="User">

                <span>
                    Daftar Pengguna
                </span>

            </a>

            <!-- Daftar Produk -->
            <a href="produk.php">

                <img src="assets/package.png" alt="Product">

                <span>
                    Daftar Produk
                </span>

            </a>

        </div>

    </div>

</body>
</html>