<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="..\res\Tailwind.js"></script>
  <link rel="stylesheet" href="../res/Custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <script src="https://kit.fontawesome.com/8ed36584a1.js" crossorigin="anonymous"></script>

  <?php

  session_start();
  if (isset($_POST['submitcompform'])) {
    include('./postdatatodb.php');
  }

  $Complaint_Done = false;
  if (isset($_SESSION['check_post']) && isset($_SESSION['complaintno']) && $_SESSION['complaintno'] != 0) {
    $Complaint_Done = true;
  }

  ?>

  <div class="flex flex-col w-screen h-screen justify-center items-center">
    <div class="flex flex-row justify-evenly items-center w-screen h-screen">
      <div class="w-2/12">
        <img src="..\res\img\logo.png" />
      </div>
      <div>
        <!-- create a vertical divider here -->
        <div class="border-r-2 border-[#2F6A50] h-80"></div>
      </div>
      <div class="flex flex-col w-4/12 h-11/12 items-center animate__animated animate__bounceIn">
        <div class="flex flex-col w-64 h-64 bg-[#d8f3dc] rounded-full justify-center items-center">
          <?php
          if ($Complaint_Done) {
            echo '<i class="fa-solid fa-check text-8xl text-[#1B4332]"></i>';
          } else {
            echo '<i class="fa-solid fa-exclamation-triangle text-8xl text-[#1B4332]"></i>';
          }
          ?>
        </div>
        <div>

          <h1 class="text-2xl text-[#1B4332] w-80 text-center mt-12">
            <?php
            if ($Complaint_Done) {
              echo "You have successfully submitted your complaint";
            }
            ?>
          </h1>
          <div class="flex flex-row w-80 bg-[#d8f3dc] mt-5 items-center justify-center p-3 rounded-xl">
            <h1 class="text-xl text-[#1B4332] w-11/12 text-center">

              <span class="font-semibold text-xl text-[#1B4332]">
                <?php
                if ($Complaint_Done) {
                  echo "Complaint Number : " . $_SESSION['complaintno'];
                } else if (isset($msg)) {
                  echo ".$msg";
                } else {
                  echo "Error.Contact the admin";
                }
                session_unset();
                ?>
              </span>
            </h1>
          </div>
        </div>

        <button onclick="window.location.href='../index.php';"
          class="text-[#2F6A50] w-3/6 p-8 rounded-xl text-xl font-semibold underline hover:cursor-pointer">
          Home
        </button>
      </div>
    </div>
  </div>
</body>

</html>