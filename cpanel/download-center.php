<?php if(!isset($_SESSION['sessionuser']))session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <style>
        

        .card {
            border-radius: 10px;
        }

        .account_circle {
            height: 30px;
            width: 30px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .grid-item {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }

        .row-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .row-item {
            margin: 10px;
        }

        .button {
            background-color: #007BFF !important;
            /* Primary color */
            color: #fff !important;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #FFC107 !important;
            color: #000000 !important;
            /* Yellow hover color */
        }
    </style>
</head>

<body>
<?php include("../includes/header.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
        <div class="d-flex">
            <h2 class="fs-4">Downloaad Center</h2>
            <div class="d-flex ml-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
                <p class="mt-1 ms-2">Welcome, <?php echo $_SESSION['sessionusername']; ?></p>
            </div>
        </div>
        <div class="grid-container mt-5">
            <!-- Dynamically generate grid items here -->
            <?php
            // Sample data (replace this with data fetched from your source)
            $data = [
                ['image' => '../assets/images/mt4-windows.jpg', 'texthed' => 'MT4 for Windows', 'textpara' => 'Supported OS: Windows 98, 98SE, 2000, XP, Windows Vista, Windows 7', 'button_text' => 'Downloaad Now'],
                ['image' => '../assets/images/mt4-iphone.png', 'texthed' => 'MT4 for IPhone', 'textpara' => 'Supported OS: iPhone 3GS, 4, 4S, iOS 4.0 and later', 'button_text' => 'Downloaad Now'],
                ['image' => '../assets/images/mt4-ipad.png', 'texthed' => 'MT4 for IPad', 'textpara' => 'Supported OS: iPod touch, iPad1, iOS 4.0 and later','button_text' => 'Downloaad Now'],
                ['image' => '../assets/images/mt4-android.png', 'texthed' => 'MT4 for Android', 'textpara' => 'Supported OS: Touchscreen smartphone or tablet, Android 2.1 and', 'button_text' => 'Downloaad Now'],
                // Add more data as needed
            ];
            foreach ($data as $item) {
                ?>
                <div class="grid-item card bg-white  rounded box mx-auto">
                    <div class="w-100 h-100 px-5 py-4">
                        <img src="<?php echo $item['image']; ?>" class="mx-auto" alt="Image">
                    </div>
                    <p class="text-center fs-3 mt-2">
                        <?php echo $item['texthed']; ?>
                    </p>
                    <p class="text-center mt-2">
                        <?php echo $item['textpara']; ?>
                    </p>
                    <button class='btn button mt-3 '>
                        <?php echo $item['button_text']; ?>
                    </button>
                </div>
                <?php
            }
            ?>
        </div>
        </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>