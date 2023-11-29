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
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="username">Address</label>
                    <textarea id="address" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        placeholder="JL. Nusa Bangsa"></textarea>
                </div>
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="username">City</label>
                    <input id="city" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        placeholder="Malang">
                </div>
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="username">Company Name</label>
                    <input id="companyName" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        placeholder="PT. Tambang API">
                </div>
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="passwordConfirmation">Detail</label>
                    <input id="detail" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        placeholder="Kerjasama">
                </div>
                
            
            </div>
        </form>
    </section>
</main>
</div>
<!-- end sidebar -->
</body>

</html>