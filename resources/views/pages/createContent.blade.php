<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create new content') }}
        </h2>
    </x-slot>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h2 class="mb-4 text-xl font-bold dark:text-white">Create new content</h2>

                    @if ($message = Session::get('success'))
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                {{$message}}

                            </div>
                        </div>
                    @endif

                    <form method="post" action="/contents/created" class="pt-4 mt-4" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        

                        <div class="">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="content-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ContentID <span class="text-red-600">*</span></label>
                                <input type="text" name="contentID" id="" class="{{Config::get('site.formInputClass')}}" placeholder=" " value="" required />
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="content-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Value 
                                <span class="text-red-600">*</span></label>
                                
                                <textarea name="content_value" id="content_value" class="{{Config::get('site.formInputClass')}} h-[200px]" placeholder=" " required>
                                </textarea>
                            </div>
                        </div>

                        <a href="#" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            < back to the previous page
                        </a>
                        <button type="submit" class="{{ Config::get('site.buttonNormal') }} float-right">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content_value' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</x-app-layout>
