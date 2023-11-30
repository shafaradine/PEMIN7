@extends('template')
@section('title', 'New Mail')
@section('content')

<main class="flex-1 ml-64 w-">
    <div class="px-6">
        <div class="pt-3 pb-8">
            <p class="w-5.5 h-3.5 text-zinc-800 text-2xl font-bold">ADD MAIL</p>
        </div>
        <div class="text-sm breadcrumbs">
            <ul>
                <li>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="w-4 h-4 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        Outcoming Mail
                    </a>
                </li>
                <li>
                    <span class="inline-flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="w-4 h-4 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        Add Mail
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <section class="px-6 mt-8">
        <form >
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
                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="passwordConfirmation">Tenggat Waktu</label>
                    <input id="endedAt" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" placeholder="YYYY-DD-MM">
                </div>

                <div>
                    <label class="text-sm text-gray dark:text-gray-200" for="passwordConfirmation">Tanggal Masuk</label>
                    <input id="startedAt" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" placeholder="YYYY-DD-MM">
                </div>
            
                <div class="form-group">
                    <label class="text-sm text-gray dark:text-gray-200" for="category">Status</label>
                        <select name="status" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            <option selected>Category Option</option>
                            <option>selesai</option>
                            <option>dalam_proses</option>
                            <option>ditolak</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="text-sm text-gray dark:text-gray-200" for="category">Mail Type</label>
                        <select name="type" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            <option selected>Category Option</option>
                            <option>masuk</option>
                            <option>keluar</option>
                        </select>
                </div>
            
                <div class="">
                    <a href="/outmail" class=" mt-8 px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Save</a>
                </div>
            </div>
        </form>
    </section>
</main>
</div>
<!-- end sidebar -->
</body>

</html>