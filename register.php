<?php

// use PHPMailer\PHPMailer\PHPMailer;

// require 'vendor/autoload.php';

// $mail = new PHPMailer(true);

// $mail->IsSMTP(); // enable SMTP
// $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
// $mail->SMTPAuth = true; // authentication enabled
// $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
// $mail->Host = "smtp.gmail.com";
// $mail->Port = 465; // or 587
// $mail->IsHTML(true);
// $mail->Username = "fielthedummy@gmail.com";
// $mail->Password = "sepzfcgenoltnude";
// $mail->SetFrom("your_email@gmail.com","fielthedummyBOT@gmail.com");


// $mail->Subject = "Test";

// $generatedCode  = rand(23333,99999);
// $mail->Body = 'The Verification Code is : '.$generatedCode;

// $mail->AddAddress("jeremiahmonfiel04@gmail.com");
//  if(!$mail->Send()) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
//  } else {
//     echo "Message has been sent";
//  }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="https://kit.fontawesome.com/01d1b52149.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="register.js" type="text/javascript" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: 'orange',
                    },
                    fontFamily: {
                        'primary': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>

<script>
    $(() => {

        const email = $("#email");
        const fullName = $("#fullname");
        const username = $("#username");
        const password = $("#password");
        const formElements = [$("#email"), $("#fullname"), $("#username"), $("#password")];
        const proceedButton = $("#proceed");
        const getbackbtn = $("#getbackbtn");


        getbackbtn.click(function(e) {
            e.preventDefault();
            proceedButton.prop('disabled', true);
            proceedButton.toggleClass('bg-amber-500/50');
        })

        // Function to check if any input is blank
        function anyInputBlank() {
            return formElements.some(function(element) {
                return element.val().trim() === "";
            });
        }


        function updateProceedState() {
            const isBlank = anyInputBlank();
            proceedButton.prop('disabled', isBlank);
            proceedButton.toggleClass('bg-amber-500/50', isBlank);
            proceedButton.toggleClass('bg-amber-500', !isBlank);
        }



        formElements.map(function(element) {
            element.on('input', updateProceedState);
        });



        proceedButton.click(function(e) {
            e.preventDefault();
        })

        $("#submit_btn").click(function(e) {
            e.preventDefault();

            $.ajax({
                method: "POST",
                url: "database/register.db.php",
                data: $('#registration_form').serialize(),
                success: function(result) {
                    console.log(result.message);
                }
            })
        })


    })
</script>





<body>
    <div class="flex items-center justify-center h-screen  max-w-screen-xl m-auto sm:w-11/12 w-10/12 font-primary  ">
        <div class="flex gap-4 flex-col lg:flex-row ">
            <div class="hidden md:flex md:flex-1">
                <img src="assets/register.jpg" alt="image" loading="lazy" class="w-full h-[250px] lg:w-full lg:h-[550px] rounded-md   ">
            </div>

            <div class="flex-1">
                <div id="form_one" class="border border-gray-300 bg-white rounded-md  ">
                    <form class="flex flex-col gap-4 py-12 px-6 w-full" method="post" id="registration_form">
                        <div class="flex p-2 text-center justify-start">
                            <h1 id="count" class="text-xs"></h1>
                            <h1 class="text-xs">/2</h1>
                        </div>
                        <div id="first_step_reg" class="flex flex-col gap-4 items-center">
                            <h1 class="text-center font-medium tracking-wide uppercase ">Registration</h1>
                            <div class="w-[230px] md:w-[320px] relative ">
                                <input onchange="emailOnchange()" id="email" name="email" type="text" class="border border-gray-300 outline-none focus:border-gray-400 w-full h-[2.3rem] px-4 text-xs  ">
                                <label for="email" id="email_label" class="text-xs top-[0.70rem] absolute left-4 cursor-text transition-all text-gray-600 ">Email</label>
                            </div>
                            <div class="w-[230px] md:w-[320px] relative ">
                                <input onchange="fullnameOnChange()" id="fullname" name="fullname" type="text" class="border border-gray-300 outline-none focus:border-gray-400 w-full h-[2.3rem] px-4 text-xs  ">
                                <label for="fullname" id="fullname_label" class="text-xs top-[0.70rem] z-10 absolute left-4 cursor-text transition-all text-gray-600  ">Full Name</label>
                            </div>
                            <div class="w-[230px] md:w-[320px] relative ">
                                <input onchange="usernameOnChange()" id="username" name="username" type="text" class="border border-gray-300 outline-none focus:border-gray-400 w-full h-[2.3rem] px-4 text-xs  ">
                                <label for="username" id="username_label" class="text-xs top-[0.70rem]  z-10 absolute left-4 cursor-text transition-all text-gray-600 ">Username</label>
                            </div>
                            <div class="w-[230px] md:w-[320px] relative  ">
                                <input onchange="passwordOnChange()" id="password" name="password" type="password" class="border border-gray-300 outline-none focus:border-gray-400 w-full h-[2.3rem] px-4 text-xs ">
                                <label for="password" id="password_label" class="text-xs top-[0.70rem]  z-50 absolute left-4 transition-all cursor-text text-gray-600">Password</label>
                                <div id="showpassword" class="hidden">
                                    <button class="fa-solid fa-eye-slash absolute right-0 top-1/4 text-amber-500 p-[3.5px] rounded-sm mr-[4px] "></button>
                                </div>
                            </div>
                            <button disabled id="proceed" class="bg-amber-500/50 text-white w-[150px] md:w-[320px] h-[35px] text-base">
                                Proceed
                            </button>
                            <!-- top-[-0.45rem] -->
                        </div>
                        <div id="second_step_reg" class="hidden flex-col gap-4 items-center">
                            <div class="w-[230px] md:w-[320px] relative ">
                                <input id="verification" onchange="verifyOnChange()" type="text" class="border border-gray-300 outline-none focus:border-gray-400 w-full h-[2.3rem] px-4 text-xs  ">
                                <label for="verification" id="verification_label" class="text-xs top-[0.70rem] absolute left-4 cursor-text transition-all text-gray-600 ">Verification Code</label>
                            </div>
                            <div class="flex items-center gap-4 flex-col">
                                <button id="submit_btn" name="submit" class="bg-amber-500 text-white w-[150px] md:w-[320px] h-[35px] text-base">
                                    Submit
                                </button>
                                <h1 id="getbackbtn" class="text-xs cursor-pointer text-amber-950  ">
                                    Get Back
                                </h1>
                            </div>

                            <!-- top-[-0.45rem] -->
                        </div>

                    </form>
                </div>

                <div class="flex-1 border-gray-300 border h-[75px] mt-4 bg-white flex items-center justify-center rounded-md ">
                    <div class="flex items-center justify-center gap-2">
                        <h1 class="text-sm">Have an Account?</h1>
                        <span onClick="location.href = 'index.php'" class="font-semibold text-sm text-amber-950 cursor-pointer">Log in</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>