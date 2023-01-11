<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="..\res\Tailwind.js"></script>
    <link rel="stylesheet" href="../res/Custom.css">
</head>

<body>
    <div class="flex flex-col w-screen h-screen justify-center items-center">
        <div class="flex flex-row justify-evenly items-center w-screen h-screen">
            <div class="w-2/12">
                <img src="..\res\img\logo.png">
            </div>
            <div>
                <!-- cr eate a vertical divider here -->
                <div class="border-r-2 border-[#2F6A50] h-80"></div>
            </div>
            <div class="flex flex-col w-4/12 h-11/12 items-start">
                <button onclick="window.location.href = '../';"
                    class="w-36 rounded-xl text-xl font-semibold text-[#1B4332] hover:cursor-pointer mb-5 text-left ml-2">
                    <span><i class="fa-solid fa-angle-left"></i></span>
                    Back
                </button>
                <form action=".\complaintDetails.php" method="POST" class="flex flex-col w-full h-full p-12 rectBox">
                    <h1 class="text-2xl font-semibold text-[#2F6A50] mt-5">Check Status</h1>
                    <input type="text" placeholder="Complaint Number" id="complaintNumber" name="complaintNumber"
                        class="w-full text-xl mt-10 p-5 bg-[#FAFFFA] rounded-lg placeholder-[#43916DCC] text-[#2F6A50]">
                    <input type="submit" value="Check"
                        class="w-full text-xl mt-12 p-5 bg-[#2F6A50] text-[#D8F3DC] font-semibold rounded-lg text-[#2F6A50] hover:cursor-pointer">
                </form>
            </div>
        </div>
    </div>
</body>

</html>