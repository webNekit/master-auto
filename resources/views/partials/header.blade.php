<nav class="bg-red-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('main.index') }}">
            <h1 class="text-2xl font-bold">{{ config('app.name') }}</h1>
        </a>
        <div class="space-x-6">
            <a href="{{ route('main.index') }}" class="hover:text-gray-200">{{ __('Главная') }}</a>
            <a href="{{ route('article.index') }}" class="hover:text-gray-200">{{ __('Статьи') }}</a>
            <a href="{{ route('tutorial.index') }}" class="hover:text-gray-200">{{ __('Обучающие материалы') }}</a>
            @if (request()->routeIs('main.index'))
                <a href="#contact" class="hover:text-gray-200">{{ __('Контакты') }}</a>
            @endif
        </div>
    </div>
</nav>