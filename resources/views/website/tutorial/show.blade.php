<x-app :title="$title">
    <article class="py-12">
        <div class="container mx-auto px-4 max-w-4xl">
            <header class="mb-12">
                <img src="{{ $tutorial->image ? url('storage', $tutorial->image) : asset('assets/images/default.jpg') }}"
                    class="w-full h-[400px] object-cover rounded-xl mb-8" alt="{{ $tutorial->title }}">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $tutorial->title }}</h1>
                <div class="flex items-center gap-4">
                    <div class="flex items-center text-gray-600">
                        <span>{{ $tutorial->created_at->format('d.m.Y') }}</span>
                    </div>
                </div>
            </header>

            <!-- tutorial Body -->
            <div class="prose max-w-none">
                <div class="text-lg text-gray-700 mb-6">
                    {!! $tutorial->content !!}
                </div>
                @if ($tutorial->document)
                    <a download="" href="{{ url('storage', $tutorial->document) }}"
                        class="bg-red-600 text-white py-3 px-6 rounded-lg hover:bg-red-700">{{ __('Скачать документацию') }}</a>
                @endif
            </div>
        </div>
    </article>
</x-app>