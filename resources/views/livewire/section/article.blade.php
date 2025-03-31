<section id="articles" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between gap-4 mb-12">
            @if(request()->routeIs('main.index'))
                <h2 class="text-4xl font-bold text-gray-900 text-center">{{ __('Популярные статьи') }}</h2>
                <a href="{{ route('article.index') }}" class="text-lg text-red-500 font-medium">{{ __('Все статьи') }}</a>
            @elseif(request()->routeIs('article.index'))
                <div class="flex items-center flex-wrap gap-4">
                    <a href="{{ route('article.index') }}"
                        class="px-3 py-1 bg-red-100 text-red-600 rounded-full">{{ __('Все статьи') }}</a>
                    @foreach ($categories as $category)
                        <a href="{{ route('article.index', ['category' => $category->id]) }}" class="px-3 py-1 bg-red-100 text-red-600
                                    rounded-full">{{ $category->name }}</a>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @if($articles->isEmpty())
                <p>{{ __('Записи отсутствуют') }}</p>
            @else
                @foreach($articles as $article)
                    <x-article.card :data="$article" />
                @endforeach
            @endif
        </div>
    </div>
</section>