<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            模試の点数を入力してください
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- フォーム -->
            <form action="{{ route('ranking01') }}" method="POST">
                @csrf
                <!-- 模試選択のテキストと入力ボックス -->
                <div class="space-y-4">
                    <div class="flex items-center">
                        <p class="text-lg text-gray-800 mr-4">国語</p>
                        if()<input type="number" name="kokugo" min="0" max="100" class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div class="flex items-center">
                        <p class="text-lg text-gray-800 mr-4">数学</p>
                        <input type="number" name="suugaku" min="0" max="100" class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div class="flex items-center">
                        <p class="text-lg text-gray-800 mr-4">英語</p>
                        <input type="number" name="eigo" min="0" max="100" class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                </div>
                <!-- 登録ボタン -->
                <div class="mt-6 flex justify-center">
                    <a href="{{ route('ranking01') }}" class="bg-white border-b border-gray-200 p-6 block w-full text-center
                    font-semibold text-gray-800 hover:bg-gray-100 text-decoration-none">
                        登録
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
