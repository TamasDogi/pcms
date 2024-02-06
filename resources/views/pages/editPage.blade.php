<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit page data') }}
        </h2>
    </x-slot>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h2 class="text-xl font-bold dark:text-white mb-4">Edit page data</h2>

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

                    <form method="post" action="/pages/update" class="mt-4 pt-4" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="hidden" name="id" value="{{$page->id}}">

                        <div class="grid md:grid-cols-2 md:gap-6 gap-6 ">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title <span class="text-red-600">*</span></label>
                                <input type="text" name="title" id="" class="{{Config::get('site.formInputClass')}}" placeholder=" " value="{{$page->title}}" required />
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug <span class="text-red-600">*</span></label>
                                <input type="text" name="slug" id="" class="{{Config::get('site.formInputClass')}}" placeholder=" " value="{{$page->slug}}" required />
                            </div>
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content <span class="text-red-600">*</span></label>
                            <textarea name="page_content" id="page_content" class="{{Config::get('site.formInputClass')}} h-[200px]" placeholder=" " required value="{{$page->page_content}}">{{$page->page_content}}
                            </textarea>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status <span class="text-red-600">*</span></label>

                                <fieldset>
                                    <legend class="sr-only">Status</legend>

                                    <div class="flex items-center mb-4">
                                        <input @if($page->status == 1) checked @else  @endif id="statusoption1" type="radio" name="status" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="statusoption1" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Active status
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input @if($page->status == 0) checked @else @endif id="statusoption2" type="radio" name="status" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="statusoption2" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Inactive status
                                        </label>
                                    </div>

                                </fieldset>
                            </div>
                        </div>

                        <a href="#" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            < back to the previous page
                        </a>
                        <button type="submit" class="float-right {{ Config::get('site.buttonNormal') }}">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#page_content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</x-app-layout>
