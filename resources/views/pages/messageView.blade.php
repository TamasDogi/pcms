<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show full message') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="">
                        <div><b>Sender's data</b></div>
                        <br>
                     
                            
                        @foreach($msg as $content)
                        
                            <div> #{{ $content->id }}</div>
                            <div> {{ $content->name }}</div>
                            <div> <a href="mailto:{{ $content->email }}"> {{ $content->email }} </a></div>
                            <div> <a href="tel:{{ $content->phone }}"> {{ $content->phone }} </a></div>
                            <div>{{ $content->created_at }}</div>
                            <div>
                            {{ $content->message_text }}</div>
                        
                        @endforeach   
                                           
                    </div>                    
                </div>                
            </div>
        </div>
    </div>



</x-app-layout>
