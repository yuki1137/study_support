<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            模試の点数を入力してください
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- 模試選択のテキストと入力ボックス -->
            <div class="space-y-4">
                <div class="flex items-center">
                    <p class="text-lg text-gray-800 mr-4">国語</p>
                    <input type="number" name="kokugo" class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="flex items-center">
                    <p class="text-lg text-gray-800 mr-4">数学</p>
                    <input type="number" name="suugaku" class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="flex items-center">
                    <p class="text-lg text-gray-800 mr-4">英語</p>
                    <input type="number" name="eigo" class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
            </div>
            <!-- 登録ボタン -->
            <div class="mt-6 flex justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    登録
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
