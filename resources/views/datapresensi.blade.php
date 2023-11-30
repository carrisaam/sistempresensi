<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Presensi</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-100 h-screen">
    <nav class="bg-[#776B5D] border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold text-[#FFFFFF]">Flowbite</span>
            </a>
            <h3 class="text-end text-white text-xl font-semibold">SISTEM AKADEMIK UNIVERSITAS BRAWIJAYA</h3>
        </div>
    </nav>
    <div class="bg-stone-100 h-[90%] gap-5 py-10 flex flex-col">
        <p class="text-center text-stone-500 text-4xl font-bold mb-7">Data Presensi</p>
        <div class="flex flex-col w-[70%] mx-auto gap-10">
        <form action="" class="flex flex-col" method="post">
                <div class="flex flex-row my-auto py-3 gap-5 items-center justify-between my-auto">
                        <input type="radio" id="option0" name="absentType" class="appearance-none" value="option0"/>
                        <label for="option0" class="cursor-pointer w-72 py-7 shadow-lg flex items-center justify-center truncate uppercase w-28 h-8 bg-white rounded-lg shadow border border-stone-500" value="">
                            Pemrograman Dasar
                        </label>
                        <input type="radio" id="option1" name="absentType" class="appearance-none" value="option1"/> 
                        <label for="option1" class="cursor-pointer w-72 py-7 shadow-lg flex items-center justify-center truncate uppercase w-28 h-8 bg-white rounded-lg shadow border border-stone-500" value="">
                            Penambangan Data
                        </label> 
                        <input type="radio" id="option2" name="absentType" class="appearance-none" value="option2"/> 
                        <label for="option2" class="cursor-pointer w-72 py-7 shadow-lg flex items-center justify-center truncate uppercase w-28 h-8 bg-white rounded-lg shadow border border-stone-500" value="">
                            Bahasa Indonesia
                        </label>
                </div>
    </form>

    </div>
</body>
</html>