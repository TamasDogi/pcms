<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit site information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h2 class="text-xl font-bold dark:text-white mb-4">Update your site information such as title, description or contact information</h2>

                    @if ($message = Session::get('success'))
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Alert!</span> {{$message}}
                            </div>
                        </div>
                    @endif

                    <form method="post" action="/site/update" class="mt-4 pt-4" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="hidden" name="id" value="1">

                        <div class="grid md:grid-cols-2 md:gap-6 gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title <span class="text-red-600">*</span></label>
                                <input type="text" name="title" id="floating_repeat_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " value="{{$site->title}}" required />
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keywords <span class="text-red-600">*</span></label>
                                <input type="text" name="keywords" id="floating_repeat_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " value="{{$site->keywords}}" required />
                            </div>
                        </div>


                        <div class="grid md:grid-cols-2 md:gap-6 gap-6 pb-3">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Owner <span class="text-red-600">*</span></label>
                                <input type="text" name="owner" id="floating_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required value="{{$site->owner}}"  />
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Owner Email <span class="text-red-600">*</span></label>
                                <input type="text" name="owner_email" id="floating_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required value="{{$site->owner_email}}"  />
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6 gap-6 pb-3">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Owner phone <span class="text-red-600">*</span></label>
                                <input type="tel" name="owner_phone" id="floating_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required value="{{$site->owner_phone}}"  />
                            </div>

                        </div>

                        <div class="relative z-0 w-full mb-5 group pg-3 gap-6">
                            <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description <span class="text-red-600">*</span></label>
                            <input type="text" name="description" id="floating_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required value="{{$site->description}}"  />
                        </div>

                       <a href="#" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                           < back to the previous page
                       </a>
                        <button type="submit" class="float-right px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

                    </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
