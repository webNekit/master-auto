@props(['data'])
<a href="{{ route('article.show', $data->id) }}"
    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
    <img src="{{ $data->image ? url('storage', $data->image) : asset('assets/images/default.jpg') }}"
        class="w-full h-48 object-cover" alt="Car">
    <div class="p-6">
        <div class="flex items-center justify-between gap-4">
            <div class="mb-4 flex items-center text-gray-400">
                <span>{{ $data->category->name }}</span>
            </div>
            <div class="mb-4 flex items-center text-gray-400">
                <span>{{ $data->created_at->format('d.m.Y') }}</span>
            </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $data->title }}</h3>
        <p class="text-gray-600">{{ Str::limit($data->small_text, 100) }}...</p>
    </div>
</a>