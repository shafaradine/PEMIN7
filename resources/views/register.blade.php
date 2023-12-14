<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.0.8/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="isolate bg-white">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
            <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                <defs>
                    <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#B1C9BD"></stop>
                        <stop offset="1" stop-color="#B1C9BD"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="px-6 pt-6 lg:px-10">
            <div>
                <nav class="flex h-9 items-center justify-between" aria-label="Global">
                    <div class="flex lg:min-w-0 lg:flex-1" aria-label="Global">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <p class="text-lg"><b>LEGAL DIV</b></p>
                        </a>
                    </div>
                </nav>
                <!-- Mobile menu, show/hide based on menu open state. -->
                <div role="dialog" aria-modal="true">
                    <div focus="true" class="inset-0 z-10 overflow-y-auto px-6 py-6 lg:hidden">
                        <div class="flex h-9 items-center justify-between">
                            <div class="flex">
                                <a href="#" class="-m-1.5 p-1.5">
                                    <p class="text-lg"><b>LEGAL DIV</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div class="relative mt-5 px-6 lg:px-8">
                <div class="flex min-h-full items-center justify-center pb-16 px-4 sm:px-6 lg:px-8">
                    <div class="w-full max-w-md space-y-8">
                        <div>
                            <img class="mx-auto h-36 w-auto" src="/img/logo.png">
                            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900 font-sans">Create Your Account!</h2>
                        </div>
                        <form class="mt-8 space-y-8" action="{{ route('register.submit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="remember" value="true">
                            <div class="-space-y-px rounded-md">
                                <div class="mt-2">
                                    <label class="label">
                                        <span class="label-text">Name</span>
                                    </label>
                                    <input id="name" name="name" type="text" autocomplete="nama" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="your name">
                                </div>
                                <div class="mt-2">
                                    <label class="label">
                                        <span class="label-text">Email</span>
                                    </label>
                                    <input id="email" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="example@gmail.com">
                                </div>
                                <div class="mt-2">
                                    <label class="label">
                                        <span class="label-text">Password</span>
                                    </label>
                                    <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="********">
                                </div>
                                <div class="mt-2">
                                    <label class="label">
                                        <span class="label-text">Division</span>
                                    </label>
                                    <div>
                                        <select id="division" name="division" type="text" autocomplete="division" class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option value="Select" selected>Choose your division</option>
                                            <option value="hrd">HRD</option>
                                            <option value="finance">Finance</option>
                                            <option value="rnd">RnD</option>
                                            <option value="mining">Mining</option>
                                            {{-- <option value="marketing">Marketing</option> --}}
                                            <option value="legal">Legal</option>
                                            <option value="it">Information Technology</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <label class="label">
                                        <span class="label-text">Address</span>
                                    </label>
                                    <input id="address" name="address" type="text" autocomplete="address" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="JL. Soekarno Hatta">
                                </div>
                                <div class="mt-2">
                                    <label class="label">
                                        <span class="label-text">Birthdate</span>
                                    </label>
                                    <input id="birthDate" name="birthDate" type="date" autocomplete="birthday" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="DD-MM-YYYY">
                                </div>
                                <div class="mt-2">
                                    <label class="label">
                                        <span class="label-text">Phone Number</span>
                                    </label>
                                    <input id="phoneNumber" name="phoneNumber" type="tel" autocomplete="number" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="+628xxxxxxxxxx">
                                </div>
                                <div class="mt-2">
                                    <label class="label">
                                        <span class="label-text">Sex</span>
                                    </label>
                                    <label class="mr-12"><input type="radio" name="sex" value="M" /> Male</label>
                                    <label><input type="radio" name="sex" value="F"/> Female</label>
                                </div>
                            </div>
                            <div>
                                <button type="submit" style="background-color:#040406" class="flex w-full justify-center rounded-md border border-transparent py-2 px-4 text-sm font-medium text-white hover:bg-base-300 focus:outline-none focus:ring-2 focus:ring-base-200 focus:ring-offset-2">
                                    REGISTER
                                </button>
                            </div>
                            <div class="flex text-sm justify-center mx-auto space-x-2">
                                <p>Already have an account?</p>
                                <a href="/login" style="color:#8aa38b">
                                    <p><b>Login</b></p>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-center mx-auto text-xs">Dengan masuk atau mendaftar, saya menyutujui <br>
                    <b style="color:#81B29A">Syarat dan Ketentuan</b> serta <b style="color:#81B29A">Kebijakan Privasi</b>
                </p>
            </div>
        </main>
    </div>

    <!-- footer -->
    <footer class="footer footer-center mt-10 p-10 bg-base-200 text-base-content rounded">
        <div class="grid grid-flow-col gap-4">
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Help</a>
            <a class="link link-hover">Privacy</a>
        </div>
        <div>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg></a>
            </div>
        </div>
        <div>
            <p>Copyright © 2023 - All right reserved by PT. Tambang API</p>
        </div>
    </footer>
</body>

</html>