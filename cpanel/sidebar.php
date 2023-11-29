<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
//echo $uriSegments[3];
$tabactive = $_GET['tab'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="../assets/css/style.css">

   <style>
      .modal {
         display: none;
         position: fixed;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         padding: 20px;
         background-color: #fff;
         border: 1px solid #ccc;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         z-index: 1;
      }
   </style>
</head>

<body>


   <div class="sidebar-box">
      <div class="sidebar">

         <ul class="nav nav-tabs border-0 row px-2" id="myTabs">
            <li class="nav-item col p-0 mb-0">
               <a class="nav-link active m-0 w-100 d-flex px-2 align-items-center" id="tab1-tab" data-toggle="tab"
                  href="#" data-target="#tab1" onclick="showRoute('link13')">
                  <img src="../assets/images/svg/hamburger.svg" alt="Link 1 Icon" class="tool_img">
                  <p class="text-white ms-2 mt-1 mb-0 my_account">My Account</p>

               </a>
            </li>
            <li class="nav-item col p-0 mb-0">
               <a class="nav-link m-0 w-100 d-flex px-2 align-items-center" id="tab2-tab" data-toggle="tab" href="#"
                  data-target="#tab2" onclick="showRoute('link14')"> <img src="../assets/images/svg/settings.svg"
                     class="tool_img" alt="Link 1 Icon">
                  <p class="text-white ms-2 d-flex mt-1 mb-0 my_account">Tools</p>
               </a>
            </li>
         </ul>
         <div class="tab-content mt-2">
            <div class="tab-pane fade <?php echo $tabactive == '1' ? 'show active' : 'hide'; ?>" id="tab1">
               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'account-overview.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/account-overview.php?tab=1" ?>' onclick="showRoute('link1')"
                  id="mylink1"> <img src="../assets/images/sidebar/image9.svg" alt="Link 1 Icon" class="sidebar-img">
                  <h5 class="text-white ms-3 mt-2 my_account">Account Overview</h5>
               </a>

               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'open-live-account.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/open-live-account.php?tab=1" ?>' onclick="showRoute('link2')"
                  id="mylink2"> <img src="../assets/images/sidebar/image12.svg" alt="Link 1 Icon" class="sidebar-img">
                  <h5 class="text-white ms-3 mt-2 my_account">Open Live Account</h5>
               </a>
               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'open-demo-account.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/open-demo-account.php?tab=1" ?>' onclick="showRoute('link3')"
                  id="mylink3"> <img src="../assets/images/sidebar/image6.svg" alt="Link 1 Icon" class="sidebar-img">
                  <h5 class="text-white ms-3 mt-2 my_account">Open Demo Account</h5>
               </a>
               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'add-existing-account.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/add-existing-account.php?tab=1" ?>' onclick="showRoute('link4')"
                  id="mylink4"> <img src="../assets/images/sidebar/image1.svg" alt="Link 1 Icon" class="sidebar-img">
                  <h5 class="text-white ms-3 mt-2 my_account">Add Existing Account</h5>
               </a>

               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'live-account.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/live-account.php?tab=1" ?>' onclick="showRoute('link5')"
                  id="mylink5"> <img src="../assets/images/sidebar/image11.svg" alt="Link 1 Icon" class="sidebar-img">
                  <h5 class="text-white ms-3 mt-2 my_account">Live Accounts</h5>
               </a>

               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'deposit.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/deposit.php?tab=1" ?>' onclick="showRoute('link6')" id="mylink6">
                  <img src="../assets/images/sidebar/image3.svg" alt="Link 1 Icon" class="sidebar-img">
                  <h5 class="text-white ms-3 ps-1 mt-2 my_account">Deposit</h5>
               </a>

               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'withdraw.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/withdraw.php?tab=1" ?>' onclick="showRoute('link7')" id="mylink7">
                  <img src="../assets/images/sidebar/image4.svg" alt="Link 1 Icon" class="sidebar-img">
                  <h5 class="text-white ms-3 ps-1 mt-2 my_account">Withdraw</h5>
               </a>

               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'internal-transfers.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/internal-transfers.php?tab=1" ?>' onclick="showRoute('link8')"
                  id="mylink8"> <img src="../assets/images/sidebar/image10.svg" alt="Link 1 Icon" class="sidebar-img">
                  <h5 class="text-white ms-3 mt-2 my_account">Internal Transfers</h5>
               </a>

               <a class="d-flex p-0 <?php echo trim($uriSegments[3]) == 'copy-trade.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/copy-trade.php?tab=1" ?>' onclick="showRoute('link9')"
                  id="mylink9">
                  <img src="../assets/images/sidebar/image8.svg" alt="Link 1 Icon" class="my-1 sidebar-img">
                  <h5 class="text-white ms-3 ps-1 mt-2 my_account">Copy Trade</h5>
               </a>

               <a class="d-flex p-0 <?php echo trim($uriSegments[3]) == 'transactional-history.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/transactional-history.php?tab=1" ?>' onclick="showRoute('link10')"
                  id="mylink10"> <img src="../assets/images/sidebar/image10.svg" alt="Link 1 Icon" class="sidebar-img">
                  <h5 class="text-white ms-2 ps-1 mt-2 my_account">Transaction History</h5>
               </a>
               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'referral-system.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/referral-system.php?tab=1" ?>' onclick="showRoute('link11')"
                  id="mylink11"> <img src="../assets/images/sidebar/image2.svg" alt="Link 1 Icon"
                     class="my-1 sidebar-img">
                  <h5 class="text-white ms-3 ps-1 mt-2 my_account">Referral System</h5>
               </a>
               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'my-referral.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/my-referral.php?tab=1" ?>' onclick="showRoute('link12')"
                  id="mylink12"> <img src="../assets/images/sidebar/image7.svg" alt="Link 1 Icon" class="sidebar-img">
                  <h5 class="text-white ms-3 ps-1 mt-2 my_account">My Referrals</h5>
               </a>
               <!-- Add more links as needed -->
            </div>
            <div class="tab-pane fade <?php echo $tabactive == '2' ? 'show active' : 'hide'; ?>" id="tab2">
               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'password-change.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/password-change.php?tab=2" ?>' onclick="showRoute('link15')"> <i
                     class="fa fa-key fa-lg mt-2 ms-2" aria-hidden="true" id="sidebar-img"></i>
                  <h5 class="text-white ms-3 mt-2 my_account">Password Change</h5>
               </a>
               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'download-center.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/download-center.php?tab=2" ?>' onclick="showRoute('link16')"><i
                     class="fa fa-download fa-lg mt-2 ms-2" aria-hidden="true" id="sidebar-img"></i>
                  <h5 class="text-white ms-3 mt-2 my_account">Download Center</h5>
               </a>
               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'ebooks.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/ebooks.php?tab=2" ?>' onclick="showRoute('link17')"><i
                     class="fa fa-book fa-lg mt-2 ms-2" id="sidebar-img"></i>
                  <h5 class="text-white ms-3 mt-2 my_account">Ebooks</h5>
               </a>
               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'economic-calendar.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/economic-calendar.php?tab=2" ?>' onclick="showRoute('link18')"> <i
                     class="fa fa-calendar fa-lg mt-2 ms-2" id="sidebar-img"></i>
                  <h5 class="text-white ms-3 mt-2 my_account">Economic Calendar</h5>
               </a>
               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'pip-calculators.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/pip-calculators.php?tab=2" ?>' onclick="showRoute('link19')"> <i
                     class="fa fa-calculator fa-lg mt-2 ms-2" id="sidebar-img"></i>
                  <h5 class="text-white ms-3 mt-2 my_account">PIP Calculators</h5>
               </a>
               <a class="d-flex p-0 <?php echo $uriSegments[3] == 'forex-heatmap.php' ? 'active' : '' ?>"
                  href='<?php echo $siteurl . "cpanel/forex-heatmap.php?tab=2" ?>' onclick="showRoute('link20')"> <i
                     class="fa fa-fire fa-lg mt-2 ms-2" id="sidebar-img"></i>
                  <h5 class="text-white ms-3 mt-2 my_account">Forex Heatmap</h5>
               </a>
            </div>
         </div>
      </div>
      <div class="slidebar_table" id="display_sidetable1">
         <?php include("../user-tab.php") ?>
      </div>


      <button class="slidebar_table" id="display_sidetable2" onclick="toggleTable()">
         <p>Table</p>
      </button>

      <div class="modal" id="small_slider_modal">
         <span onclick="toggleTable()" style="cursor: pointer;">&times;</span> <!-- Close button -->
         <?php include("../user-tab.php") ?>
      </div>

      <script>
         function toggleTable() {
            var modal = document.getElementById("small_slider_modal");

            // Toggle the display property of the modal
            if (modal.style.display === "none" || modal.style.display === "") {
               modal.style.display = "block";
            } else {
               modal.style.display = "none";
            }
         }
      </script>



      <script>
         // Function to check screen size and toggle visibility
         function toggleTables() {
            var displaySidetable1 = document.getElementById('display_sidetable1');
            var displaySidetable2 = document.getElementById('display_sidetable2');

            if (window.innerWidth >= 700) {
               displaySidetable1.style.display = 'block';
               displaySidetable2.style.display = 'none';
            } else {
               displaySidetable1.style.display = 'none';
               displaySidetable2.style.display = 'block';
            }
         }

         // Initial call to set visibility based on screen size
         toggleTables();

         // Event listener to update visibility on window resize
         window.addEventListener('resize', toggleTables);
      </script>


   </div>

</body>

</html>