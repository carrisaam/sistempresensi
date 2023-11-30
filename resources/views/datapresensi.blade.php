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
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item text-[#FFFFFF]"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
        </div>
    </nav>
    <div class="bg-stone-100 h-[90%] gap-5 py-10 flex flex-col">
        <p class="text-center text-stone-500 text-4xl font-bold mb-7">Data Presensi</p>
        <div class="flex flex-col w-[70%] mx-auto gap-10">
            <div class="flex flex-row justify-between">
                <div class="Rectangle3 px-32 py-3 bg-white rounded-lg shadow border border-stone-500">
                    <p class="text-center text-stone-500 text-xl font-regular"><a href="/schedules/{{ $courses[0]->id }}">{{ $courses[0]->name }}</a></p>
                </div>
                <div class="Rectangle3 px-32 py-3 bg-white rounded-lg shadow border border-stone-500">
                    <p class="text-center text-stone-500 text-xl font-regular"><a href="/schedules/{{ $courses[1]->id }}">{{ $courses[1]->name }}</a></p>
                </div>
            </div>
            <div class="flex flex-row justify-between">
                <div class="Rectangle3 px-32 py-3 bg-white rounded-lg shadow border border-stone-500">
                    <p class="text-center text-stone-500 text-xl font-regular"><a href="/schedules/{{ $courses[2]->id }}">{{ $courses[2]->name }}</a></p>
                </div>
                <div class="Rectangle3 px-32 py-3 bg-white rounded-lg shadow border border-stone-500">
                    <p class="text-center text-stone-500 text-xl font-regular"><a href="/schedules/{{ $courses[3]->id }}">{{ $courses[3]->name }}</a></p>
                </div>
            </div>
            <div class="flex flex-row justify-between">
                <div class="Rectangle3 px-32 py-3 bg-white rounded-lg shadow border border-stone-500">
                    <p class="text-center text-stone-500 text-xl font-regular"><a href="/schedules/{{ $courses[4]->id }}">{{ $courses[4]->name }}</a></p>
                </div>
                <div class="Rectangle3 px-32 py-3 bg-white rounded-lg shadow border border-stone-500">
                    <p class="text-center text-stone-500 text-xl font-regular"><a href="/schedules/{{ $courses[5]->id }}">{{ $courses[5]->name }}</a></p>
                </div>
            </div>
        </div>
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