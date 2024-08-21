<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
		第二回模試のランキング
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- ランキングテーブル -->
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            順位
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            名前
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            スコア
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- ランキングデータ（サンプルデータ） -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            1
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            山田 太郎(仮)
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            95点(仮)
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            2
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            鈴木 次郎(仮)
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            89点(仮)
                        </td>
                    </tr>
                    <!-- ここに他のランキングデータが続きます -->
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>