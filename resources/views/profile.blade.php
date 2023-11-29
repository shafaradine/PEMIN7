@extends('template')
@section('title', 'Profile')
@section('content')


<main class="flex-1 ml-64 w-">
    <div class="px-6">
        <div class="pt-3 pb-8">
            <p class="w-5.5 h-3.5 text-zinc-800 text-2xl font-bold">PROFILE</p>
        </div>

    </div>
    <section class="px-6 mt-8">
        <form>
            <div class="grid grid-cols-1 gap-4 mt-4 ">
                <!-- Nama -->
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="username">Name</label>
                    <input id="name" type="text" disabled
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        placeholder="Name">
                </div>
                <!-- Email -->
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="username">Email</label>
                    <input id="email" type="text" disabled
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        placeholder="Email">
                </div>
                <!-- Divisi -->
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="passwordConfirmation">Division</label>
                    <input id="division" type="text" disabled
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        placeholder="Division">
                </div>
                <!-- Alamat -->
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="username">Address</label>
                    <textarea id="address" type="text" disabled
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        placeholder="Address"></textarea>
                </div>
                <!-- Tanggal Lahir -->
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="username">Birth Date</label>
                    <input id="birthDate" type="text" disabled
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        placeholder="Birth Date">
                </div>
                <!-- Nomor HP -->
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="username">Phone Number</label>
                    <input id="phoneNumber" type="text" disabled
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        placeholder="Phone Number">
                </div>
                <!-- Jenis Kelamin -->
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="username">Sex</label>
                    <input id="sex" type="text" disabled
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        placeholder="M/L">
                </div>
                <!-- Button -->

            </div>
        </form>
    </section>
</main>
</div>
<!-- end sidebar -->
</body>

</html>