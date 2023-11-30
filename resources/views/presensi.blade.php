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
        <div class="Login bg-stone-100 mx-auto my-auto w-[50%]">
            <div class="bg-stone-500 py-2 text-center rounded-t-3xl text-white font border-2 border-stone-500">
                <h1 class="text-xl font-semibold text-[#F3EEEA]">Lorem Ipsum</h1>
            </div>
            <div class="bg-[#EBE3D5] p-5 font-montserra rounded-b-3xl border-2 border-stone-500">
                <p class="text-stone-500 text-base font-semibold">Lorem Ipsum</p>
                <p class="text-stone-500 text-base font-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <!-- <form action="" method="post" class="flex flex-col"> -->
                    <div class="flex flex-row my-auto py-3 gap-5 items-center justify-center my-auto">
                        <input type="radio" id="option0" name="absentType" class="appearance-none" value="option0"/>
                        <label for="option0" class="cursor-pointer w-1/6 flex items-center justify-center truncate uppercase w-28 h-8 bg-white rounded-lg shadow border border-stone-500" value="">
                             option 0
                        </label>
                        <input type="radio" id="option1" name="absentType" class="appearance-none" value="option1"/> 
                        <label for="option1" class="cursor-pointer w-1/6 flex items-center justify-center truncate uppercase w-28 h-8 bg-white rounded-lg shadow border border-stone-500" value="">
                            option 1
                        </label> 
                        <input type="radio" id="option2" name="absentType" class="appearance-none" value="option2"/> 
                        <label for="option2" class="cursor-pointer w-1/6 flex items-center justify-center truncate uppercase w-28 h-8 bg-white rounded-lg shadow border border-stone-500" value="">
                            option 2
                        </label>
                    </div>
                    <div class="flex flex-row items-center justify-center mt-5">
                        <button type="submit" class="w-40 py-2 font-semibold bg-stone-500 rounded-lg shadow border border-stone-500 text-white">Simpan</button>
                    </div>  
                <!-- </form> -->
            </div>
        </div>
    </div>

    <!-- <script>
        function changeLabelColor() {
            // Get all radio buttons with name 'color'
            var radioButtons = document.getElementsByName('absentType');
            // Loop through radio buttons to find the selected one
            for (var i = 0; i < radioButtons.length; i++) {
                if (radioButtons[i].checked) {
                    // Get the corresponding label for the selected radio button
                    var label = document.querySelector('label[for="' + radioButtons[i].id + '"]');
                    // Change the label color based on the selected value
                    label.style.color = '#776B5D'
                }
            }
        }

        var radioButtons = document.getElementsByName('absentType');
        for (var i = 0; i < radioButtons.length; i++) {
            radioButtons[i].addEventListener('change', changeLabelColor);
        }
    </script> -->
</body>
</html>