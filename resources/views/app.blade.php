<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    
</head>

<body class="bg-gray-200 " >
        <div class=" container mx-auto relative">
            <div class="flex justify-between items-center p-5 bg-cyan-800 text-white border border-cyan-200 rounded-sm">
                <div>
                    <h2>Logo</h2>
                </div>
                <div class="hidden md:block space-x-4">
                    <a href="#">Clubs</a>
                    <a href="#">Players</a>
                    <a href="#">Parties</a>
                    <a href="#">Feed</a>
                </div>
                <div class="hidden md:block space-x-2">
                    <input type="search" name="" id="" class=" py-1 rounded border border-gray-400 bg-transparent focus:outline-none " >
                    <a href="#" class="py-2 px-3 bg-cyan-500 rounded-sm clipy1">LOG In</a>
                </div>
                <!-- Hamburger Icone -->
                <button id="menu-btn" class=" block hamburger md:hidden foucus:outline-none">
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
                  </button>
    
            </div>
            <div class="md:hidden">
                <div id="menu" class="absolute  flex-col items-center self-end hidden py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                    <a href="#">Clubs</a>
                    <a href="#">Players</a>
                    <a href="#">Parties</a>
                    <a href="#">Feed</a>
                </div>
             </div>
        </div>
        <div class="container mx-auto">
            <div class="flex flex-col md:w-1/2 md:flex-row">
                <div class=" bg-sky-900 max-w-md mx-auto mt-10 md:ms-10 items-center px-7  rounded-md text-white ">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
            
                        <div class="flex justify-center ">
                            <a href="#" class="border-0 border-b-2 border-sky-500 w-1/2 text-center mt-3 py-2">LOG IN </a>
                            <a href="#" class="border-0 border-b-2 border-sky-500 w-1/2 text-center mt-3 py-2">SIGN UP</a>
                        </div>
                        <div>
                            <h3 class="text-center text-xl my-3">SIGN UP METHOD</h3>
                        </div>
                        <div class="flex justify-center text-center bg-sky-700 p-1 rounded-sm">
                            <button class="bg-sky-500 w-1/2 py-2 rounded-sm">EMAIL</button>
                            <button class="w-1/2 py-2 rounded-sm">PHONE</button>
                        </div>
                        <div class="my-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="  w-full my-1 py-1 rounded border border-gray-500 bg-transparent focus:outline-none">
                            @error('email')
                                <small class="text-red-700">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex flex-col justify-between md:flex-row md:justify-between md:space-x-2">
                            <div>
                                <label class="block" for="firstName">FirstName</label>
                                <input type="text" name="f_name" id="firstName"class=" w-full my-1 py-1 rounded border border-gray-500 bg-transparent focus:outline-none ">
                                @error('f_name')
                                    <small class="text-red-700">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <label class="block" for="lastName">LastName</label>
                                <input type="text" name="l_name" id="lastName" class=" w-full my-1 py-1 rounded border border-gray-500 bg-transparent focus:outline-none">
                                @error('l_name')
                                    <small class="text-red-700">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label class="block " for="userName">UserName</label>
                            <input type="text" name="u_name" id="userName" class=" w-full my-1 py-1 rounded border border-gray-500 bg-transparent focus:outline-none">
                            @error('u_name')
                                <small class="text-red-700">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label class="block " for="password">Password</label>
                            <input type="password" name="password" id="password" class=" w-full my-1 py-1 rounded border border-gray-500 bg-transparent focus:outline-none">
                            @error('password')
                                <small class="text-red-700">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex items-center my-2">
                            <input type="checkbox" name="status" id="check">
                            <label for="check" class="text-sm ms-2 text-gray-400">By clicking sign up I agree with Terms and Condation
                            </label>
                        </div>
                        <div class="my-5">
                            <button type="submit" class="w-full py-1 bg-cyan-500 clipy">SIGN UP</button>
                        </div>
                        <div class="flex justify-center items-center my-5">
                            <div class="w-1/3 h-[1px] bg-slate-500"></div>
                            <small class="w-1/3 text-center">OR SIGN UP WITH</small>
                            <div class="w-1/3 h-[1px] bg-slate-500"></div>
                        </div>
                        <div class="flex justify-center space-x-6 my-5">
                            <a href="#" class="py-2 px-3 bg-cyan-500 rounded-sm clipy1">Google</a>
                            <a href="#" class="py-2 px-3 bg-cyan-500 rounded-sm clipy1">Discord</a>
                            <a href="#" class="py-2 px-3 bg-cyan-500 rounded-sm clipy1">Steam</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
    
    <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>
