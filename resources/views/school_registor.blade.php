<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            志望する大学を選択してください
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        @foreach($school as $university)
        <div class="max-w-4xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
                <button class="bg-white shadow-md rounded-lg p-6 w-full text-center text-2xl py-8 transition duration-300 ease-in-out transform  ">
                    <!-- 大学名を列挙 -->
                    <div class="space-y-4">
                        <p class="text-lg text-gray-800">{{$university}}</p>
                    </div>
                </button>
            </div>
        @endforeach
        <div class="flex items-center justify-center mt-4">


            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
