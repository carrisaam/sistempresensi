<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Presensi</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-100 h-screen">
    <nav class="bg-[#776B5D] border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{url('/home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold text-[#FFFFFF]">PRESENSI</span>
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
            <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">Nama</th>
              <th scope="col" class="px-6 py-4">Status</th>
              <th scope="col" class="px-6 py-4">Waktu Presensi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($presences as $presence)
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4">{{$presence->user->name}}</td>
              <td class="whitespace-nowrap px-6 py-4">{{$presence->status}}</td>
              <td class="whitespace-nowrap px-6 py-4">{{$presence->created_at->locale('id_ID')->isoFormat('LLLL')}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
            
        </div>
    </div>
    <!-- <div class="bg-stone-100 h-[90%] gap-5 py-10 flex flex-col">
        <p class="text-center text-stone-500 text-4xl font-bold mb-7">Data Presensi</p>
        <div class="Login bg-stone-100 mx-auto my-auto w-[50%]">
            <div class="bg-stone-500 py-2 text-center rounded-t-3xl text-white font border-2 border-stone-500">
                <h1 class="text-xl font-semibold text-[#F3EEEA]">Lorem Ipsum</h1>
            </div>
            <div class="bg-[#EBE3D5] p-5 font-montserra rounded-b-3xl border-2 border-stone-500">
                <p class="text-stone-500 text-base font-semibold">Lorem Ipsum</p>
                <p class="text-stone-500 text-base font-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <form action="" method="post" class="flex flex-col">
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
                </form>
            </div>
        </div>
    </div> -->

</body>

</html>