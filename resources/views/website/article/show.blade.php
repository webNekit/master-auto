<x-app :title="$title">
    <article class="py-12">
        <div class="container mx-auto px-4 max-w-4xl">
            <header class="mb-12">
                <img src="{{ $article->image ? url('storage', $article->image) : asset('assets/images/default.jpg') }}"
                    class="w-full h-[400px] object-cover rounded-xl mb-8" alt="{{ $article->title }}">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $article->title }}</h1>
                <div class="flex items-center gap-4">
                    <span
                        class="px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm">{{ $article->category->name }}</span>
                    <div class="flex items-center text-gray-600">
                        <span>{{ $article->created_at->format('d.m.Y') }}</span>
                    </div>
                </div>
            </header>

            <!-- Article Body -->
            <div class="prose max-w-none">
                <div class="text-lg text-gray-700 mb-6">
                    {!! $article->content !!}
                </div>
            </div>
            <!-- Related Articles -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">{{ __('Рекомендуем к прочтению') }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($articles as $article)
                        <x-article.card :data="$article" />
                    @endforeach
                </div>
            </div>
        </div>
    </article>
</x-app>