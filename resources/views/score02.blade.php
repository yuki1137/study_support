<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            模試の点数を入力してください
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- 模試選択のテキスト -->
            <div class="space-y-4">
                <p class="text-lg text-gray-800">国語</p>
                <p class="text-lg text-gray-800">数学</p>
                <p class="text-lg text-gray-800">英語</p>
            </div>
        </div>
    </div>
</x-app-layout>
