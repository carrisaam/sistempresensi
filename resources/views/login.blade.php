<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F3EEEA] ">
    <div class="h-screen bg-stone-100 flex items-center justify-center h-100 ">
        <div class="Login bg-stone-100 mx-auto my-auto">
            <div class="bg-stone-500 py-3 text-center rounded-t-3xl text-white font border-2 border-stone-500">
                <h1 class="text-xl font-semibold text-[#F3EEEA]">LOGIN</h1>
            </div>
            <div class="bg-[#EBE3D5] p-5 font-montserra rounded-b-3xl border-2 border-stone-500">
                <form action="/loginattempt" method="post" class="flex flex-col">
                    @csrf
                    <div class="flex flex-col mb-5">
                        <label for="" class="text-[#776B5D] text-l font-semibold">Username</label>
                        <input type="text" name="nim" id="" class="w-96 h-9 bg-white rounded-lg shadow border border-stone-500 ps-2">
                        @error('nim')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="" class="text-[#776B5D] text-l font-semibold">Password</label>
                        <input type="password" name="password" id="" class="w-96 h-9 bg-white rounded-lg shadow border border-stone-500 ps-2">
                    </div>
                    @if(session()->has('loginError'))
                    <p class="text-red-600 text-base font-medium text-end">Username atau password salah</p> <!-- atur pake visibility aja ntar -->
                    @endif

                    <div class="flex flex-row items-center justify-center mt-5">
                        <button type="submit" class="w-40 py-2 font-semibold bg-stone-500 rounded-lg shadow border border-stone-500 text-white">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>