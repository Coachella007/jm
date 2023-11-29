<?php if(!isset($_SESSION['sessionuser']))session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <style>
        .wel {
            font-style: Poppins;
            font-size: 20px;
            font-weight: 400;
            text-align: right;
        }

        .fsa {
            border: 1px solid blue;

            width: 23%;
            background-color: #053B9E;
            border-radius: 8px;
            margin-top: 5%
        }

        .log {
            padding-left: 5%;
            padding-top: 5%;
        }

        .pl {
            padding-left: 5%;
        }

        .min {
            color: #FFFFFF;
            font-family: Inter;
        }

        .usd {
            font-size: 29px;
            font-family: Inter;
            margin-top: 2%;
            margin-bottom: 2%;
            color: #FFBF10;
        }

        .fs {
            font-size: 12px;
            font-family: Inter;
            margin-top: 2%;
            margin-bottom: 2%;
            color: #FFBF10;

        }

        .be {
            color: #D2D2D2;
            margin-top: 2%;
            margin-bottom: 2%;
            font-size: 8px;
        }

        .li {
            margin-top: 2%;
            margin-bottom: 2%;
            border: 1px solid #FFFFFF;
        }

        li {
            margin-top: 2%;
            margin-bottom: 2%;
            color: #FFFFFF;
            font-size: 12px;
        }

        ul {
            padding-left: 5%;
        }

        .button1 {
            padding: 7%;
            border: 1px solid #FFBF10;
            margin-top: 6%;
            margin-bottom: 6%;
            border-radius: 8px;
            background-image: linear-gradient(to right, #FEDC18, #FFF7C5);
        }

        label {
            color: #000000;
            float: left;
            margin-left: 80px;
            margin-bottom: 40px;
        }

        .caa {
            border: 1px solid #07348F;
            background-color: #07348F;
            border-radius: 8px;
        }

        .p11 {
            font-family: Poppins;

            font-weight: bold;
            font-size: 24px;
            color: #FFFFFF;
            padding: 10px;
        }

        .foo {
            width: 98%;
            background-color: #FFFFFF;
        }

        .buttonprimary {
            background-color: #07348F;
            color: white;
        }

        .pl .usd {
            background: linear-gradient(to right, #FEDC18,
                    #FEDC18, #FFF7C5, #FFF7C5);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            font-weight: bold;
        }

        .pl .fs {
            color: #FEDC18;
            font-weight: bold;
            opacity: 70%;
        }

        .box_list {
            list-style-type: disc;
            font-size: 12px;
            line-height: 18px;
        }
    </style>
</head>

<body>
<?php include("../includes/header.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
    <div>
        <div class="d-flex mb-3">
            <h2 class="fs-4">Open Live Account</h2>
            <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
                <p class="mt-1 ms-2">Welcome,
                    <?php echo $_SESSION['sessionusername']; ?>
                </p>
            </div>
        </div>
        <div class="d-flex gap-2">
            <div class="fsa fm">
                <div class="pl">
                    <img src="assets/images/group.png" alt="" class="log">
                    <h1 class="min">MINIMUM FUNDING</h1>
                    <h1 class="usd">100 USD</h1>
                    <h1 class="fs">FIXED SPREAD ACCOUNT</h1>
                    <p class="be">Benefit from industry-leading entry prices</p>
                    <p class="li"></p>
                    <ul class=" p-3 box_list">
                        <li>1 PIP fixed spread</li>
                        <li>Up To 1:500 Leverage</li>
                        <li>100$ Minimum funding</li>
                        <li>USD is the main currency</li>
                        <li>Islamic account - No Swap</li>
                        <li>Minimum lot 0.01</li>
                        <li>Expert advisor</li>
                        <li>Heading is available</li>
                        <li>4 Digits</li>
                        <li>Scalping is not available</li>
                    </ul>

                <button class="button1">Buy Package</button>
            </div>
        </div>

        <div class="fsa fm">
            <div class="pl">
                <img src="assets/images/group.png" alt="" class="log">
                <h1 class="min">MINIMUM FUNDING</h1>
                <h1 class="usd">500 USD</h1>
                <h1 class="fs">VARIABLE SPREAD ACCOUNT</h1>
                <p class="be">Benefit from industry-leading entry prices</p>
                <p class="li"></p>

                    <ul class=" p-3 box_list">
                        <li>0.1 PIP spread</li>
                        <li>Up To 1:200 Leverage</li>
                        <li>500$ Minimum funding</li>
                        <li>USD is the main currency</li>
                        <li>Islamic account - No Swap</li>
                        <li>Minimum lot 0.01</li>
                        <li>Expert advisor</li>
                        <li>Heading is available</li>
                        <li>5 Digits</li>
                        <li>Scalping is not available</li>
                    </ul>

                <button class="button1">Buy Package</button>
            </div>
        </div>



        <div class="fsa fm">
            <div class="pl">
                <img src="assets/images/group.png" alt="" class="log">
                <h1 class="min">MINIMUM FUNDING</h1>
                <h1 class="usd">1000 USD</h1>
                <h1 class="fs">SCALPING ACCOUNT</h1>
                <p class="be">Benefit from industry-leading entry prices</p>
                <p class="li"></p>
                    <ul class=" p-3 box_list">
                    <li>1.7 PIP</li>
                    <li>Up to 1:100 Leverage</li>
                    <li>1000$ Minimum funding</li>
                    <li>USD is the main currency</li>
                    <li>Islamic account - No Swap</li>
                    <li>Minimum lot 0.01</li>
                    <li>Expert advisor</li>
                    <li>Heading is available</li>
                    <li>5 Digits</li>
                    <li>Scalping is not available</li>
                </ul>

                <button class="button1">Buy Package</button>
            </div>
        </div>



        <div class="fsa fm">
            <div class="pl">
                <img src="assets/images/group.png" alt="" class="log">
                <h1 class="min">MINIMUM FUNDING</h1>
                <h1 class="usd">100 USD</h1>
                <h1 class="fs">BONUS ACCOUNT</h1>
                <p class="be">Benefit from industry-leading entry prices</p>
                <p class="li"></p>
                    <ul class=" p-3 box_list">
                    <li>1 PIP fixed spread</li>
                    <li>Up To 1:500 Leverage</li>
                    <li>100$ Minimum funding</li>
                    <li>USD is the main currency</li>
                    <li>Islamic account - No Swap</li>
                    <li>Minimum lot 0.01</li>
                    <li>Expert advisor</li>
                    <li>Heading is available</li>
                    <li>4 Digits</li>
                    <li>Scalping is not available</li>
                </ul>

                <button class="button1">Buy Package</button>
            </div>

            </div>
        </div>
        <div style="float:left;margin-top:8%;margin-bottom:5%">
            <form action="">
                <div class="row border-0">
                    <div class="col border-0">
                        <label for="">Account Type:</label>
                        <select class="form-select mt-2" id="sel1" name="sellist1">
                            <option>-Select-</option>
                            <option>Individual</option>
                            <option>IB</option>
                        </select>
                    </div>
                    <div class="col border-0">
                        <label for="">Account Group::</label>
                        <select class="form-select mt-2" id="sel1" name="sellist1">
                            <option>-Select-</option>
                            <option>Fixed Spread Account</option>
                            <option>Scalping Account</option>
                            <option>Variable Spread Account</option>
                            <option>Bonus Account</option>
                        </select>
                    </div>
                    <div class="col border-0">
                        <label for="">Currency base:</label>
                        <select class="form-select mt-2" id="sel1" name="sellist1">
                            <option>USD</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <button class="caa my-3">
            <p class="p11">Customer Account Agreement</p>
        </button>
        <div class="foo rounded">
            <div class="p-4">
                <p class="fw-bold mb-2">JMI Brokers LTD is licensed broker from Vanuatu Financial Services Commission as
                    Dealers in Securities under license number 15010</p>
                <p class="fw-bold mb-2 text-primary">Risk Disclosure Statement</p>
                <p class="mb-2" style="color:grey">Before engaging in the products offered by JMI Brokers LTD you should
                    be aware of the risks which may be involved in such trading.</p>
                <p class="fw-bold">You should not enter into a transaction unless you fully understand:...</p>
                <p class="p11">Customer Account Agreement</p>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
            <label class="form-check-label mt-1" for="check1">I agree the terms and conditions</label>
        </div>
    </div>
    <button type="button" class="buttonprimary rounded py-2 w-25 mt-4">Open Account</button>
    </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>