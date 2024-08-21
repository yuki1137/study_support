<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            志望する大学を選択してください
        </h2>
    </x-slot>
    @foreach($school as $university)
    <div class="max-w-4xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- 大学名を列挙 -->
            <div class="space-y-4">
                <p class="text-lg text-gray-800">{{$university}}</p>
                {{--<!-- <p class="text-lg text-gray-800">{{$university->schoolname}}</p> -->--}}
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
