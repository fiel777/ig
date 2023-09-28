<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/01d1b52149.js" crossorigin="anonymous"></script>

</head>

<body>
    <div>
        <div class="flex items-center justify-center h-screen  max-w-screen-xl m-auto sm:w-11/12 w-10/12   ">
            <div class="flex gap-4 flex-col lg:flex-row">
                <div class="hidden md:flex md:flex-1">
                    <img src="assets/login.jpg" alt="image" loading="lazy" class="w-full h-[250px] lg:w-full lg:h-[550px] rounded-md   ">
                </div>
                <div class="flex-1">
                    <div class="border border-gray-300 bg-white rounded-md  ">
                        <form class="flex flex-col gap-4 justify-center items-center py-12 px-6 w-full">
                            <h1 class="text-center font-medium tracking-wide uppercase ">Login</h1>
                            <div class="w-[230px] md:w-[320px] relative ">
                                <input onchange="" id="email" type="text" class="border border-gray-300 outline-none focus:border-gray-400 w-full h-[2.3rem] px-4 text-xs  ">
                                <label for="email" id="email_label" class="text-xs top-[0.70rem]  absolute left-4 cursor-text transition-all ">Email or Username</label>
                            </div>
                            <div class="w-[230px] md:w-[320px] relative  ">
                                <input onchange="" id="password" type="password" class="border border-gray-300 outline-none focus:border-gray-400 w-full h-[2.3rem] px-4 text-xs ">
                                <label for="password" id="password_label" class="text-xs top-[0.70rem] absolute left-4 transition-all cursor-text">Password</label>
                                <div id="showpassword" class="hidden">
                                    <button class="fa-solid fa-eye-slash absolute right-0 top-1/4 text-amber-500 p-[3.5px] rounded-sm mr-[4px] "></button>
                                </div>
                            </div>
                            <button class="bg-amber-500 text-white w-[150px] md:w-[320px] h-[35px] text-base">
                                Login
                            </button>
                            <!-- top-[-0.45rem] -->
                        </form>
                    </div>
                    <div class="flex-1 border-gray-300 border h-[75px] mt-4 bg-white flex items-center justify-center rounded-md">
                        <div class="flex items-center justify-center gap-2">
                            <h1 class="text-sm">Don't have an account?</h1>
                            <span onClick="location.href = 'register.php'" class="font-semibold text-sm text-amber-950 cursor-pointer">Sign Up</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>