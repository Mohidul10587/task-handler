<link rel="stylesheet" href="{{ mix('css/app.css') }}">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="padding-bottom: 20px" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 style="font-size: 20px ; font-weight:bolder;"> This is Admin dashboard</h1>
                </div>

                <div style="margin-left: 30px;" class="mini-stat-info text-left text-muted">
                    <ol>
                        @foreach($data as $singleData)
                        <li style='margin-top:8px'> {{ $singleData->name }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>