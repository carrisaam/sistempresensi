<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
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
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item text-[#FFFFFF]"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
        </div>
    </nav>
    <div class="bg-stone-100 h-[90%] flex flex-col gap-9 items-center justify-center h-100 my-auto">
        <div class="flex flex-row bg-[#B0A695] w-[60%] border-2 border-stone-500 p-3 rounded-3xl gap-4">
            <img src="ryujin.jpg" class="w-40 h-48 rounded-3xl" alt="">
            <div class="flex w-[100%] flex-col justify-center gap-3">
                <p class="text-white text-left text-3xl font-semibold">SELAMAT DATANG, {{ auth()->user()->name }}</p>
                <div class="Line1 w-[100%] h-[2px] border-[3px] border-white"></div>
                <div>
                    <p class="text-white text-2xl font-medium font-thin">Lorem Ipsum</p>
                    <p class="text-white text-2xl font-medium font-thin">Lorem Ipsum</p>
                    <p class="text-white text-2xl font-medium font-thin">Lorem Ipsum</p>
                </div>
            </div>
        </div>
        <div class="divide-y divide-solid divide-stone-500 divide-2 w-[60%] flex flex-col gap-3 border-y-stone-500 border-2">
            <p class="text-stone-500 text-xl font-bold">> Lorem Ipsum</p>
            <p class="text-stone-500 text-xl font-bold">> Lorem Ipsum</p>
            <p class="text-stone-500 text-xl font-bold">> Lorem Ipsum</p>
            <p class="text-stone-500 text-xl font-bold">> Lorem Ipsum</p>
            <p class="text-stone-500 text-xl font-bold">> Lorem Ipsum</p>
        </div>
        <p class="text-stone-500 text-xl font-bold"><a href="/courses">> Courses</a></p>
        <!-- <div class="Login bg-stone-100 mx-auto my-auto">
            <div class="bg-stone-500 py-3 text-center rounded-t-3xl text-white font border-2 border-stone-500">
                <h1 class="text-xl font-semibold text-[#F3EEEA]">LOGIN</h1>
            </div>
            <div class="bg-[#EBE3D5] p-5 font-montserra rounded-b-3xl border-2 border-stone-500">
                <form action="" method="post" class="flex flex-col">
                    <div class="flex flex-col mb-5">
                        <label for="" class="text-[#776B5D] text-l font-semibold">Username</label>
                        <input type="text" name="" id="" class="w-96 h-9 bg-white rounded-lg shadow border border-stone-500 ps-2">
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="" class="text-[#776B5D] text-l font-semibold">Password</label>
                        <input type="password" name="" id="" class="w-96 h-9 bg-white rounded-lg shadow border border-stone-500 ps-2">
                    </div>
                    <p class="text-red-600 text-base font-medium text-end">Username atau password salah</p> atur pake visibility aja ntar 
                    
                    <div class="flex flex-row items-center justify-center mt-5">
                        <button type="submit" class="w-40 py-2 font-semibold bg-stone-500 rounded-lg shadow border border-stone-500 text-white">Login</button>
                    </div>  
                </form>
            </div>
        </div> -->
    </div>
</body>

</html>