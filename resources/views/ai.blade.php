<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            physicAIとの対話
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- チャットのメッセージリスト -->
            <div class="space-y-4">
                @if (!empty($posts))
                    @foreach ($posts as $post)
                        <div class="flex items-start {{ $post->user->id == auth()->user()->id ? 'justify-end' : '' }}">
                            <div class="relative max-w-xs p-4 bg-gray-100 rounded-lg shadow-sm {{ $post->user->id == auth()->user()->id ? 'bg-blue-100 text-right' : '' }}">
                                <p class="font-semibold text-gray-800">{{ $post->user->name }}</p>
                                <p class="text-gray-700 mt-2">{{ $post->body }}</p>
                                <span class="absolute bottom-1 right-2 text-xs text-gray-500">{{ $post->updated_at->format('H:i') }}</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="flex justify-center items-center h-full">
                        <p class="text-lg text-gray-600">まだメッセージはありません。</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
