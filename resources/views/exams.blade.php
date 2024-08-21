<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            模試を選択してください
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- 模試選択のボタン -->
            <div class="space-y-4">
                <a href="{{ route('score01') }}" class="block text-lg text-center text-white bg-blue-500 hover:bg-blue-600 rounded-lg py-2">
                    第1回模試
                </a>
                <a href="{{ route('score02') }}" class="block text-lg text-center text-white bg-blue-500 hover:bg-blue-600 rounded-lg py-2">
                    第2回模試
                </a>
                <a href="{{ route('score03') }}" class="block text-lg text-center text-white bg-blue-500 hover:bg-blue-600 rounded-lg py-2">
                    第3回模試
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
