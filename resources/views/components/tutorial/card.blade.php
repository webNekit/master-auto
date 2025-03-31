@props(['data'])
<a href="{{ route('tutorial.show', $data->id) }}">
    <div class="bg-gray-50 rounded-lg p-6 shadow-lg">
        <div class="aspect-w-16 aspect-h-9 mb-4 bg-gray-200">
            <img loading="lazy"
                src="{{  $data->image ? url('storage', $data->image) : asset('assets/images/default.jpg') }}"
                class="w-full h-48 object-cover" />
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $data->title }}</h3>
        <p class="text-gray-600">{{ Str::limit($data->description, 100) }}</p>
    </div>
</a>