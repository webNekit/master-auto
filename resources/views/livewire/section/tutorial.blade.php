<section id="tutorials" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between gap-4 mb-12">
            @if(request()->routeIs('main.index'))
                <h2 class="text-4xl font-bold text-gray-900 text-center">{{ __('Обучающие материалы') }}</h2>
                <a href="{{ route('tutorial.index') }}"
                    class="text-lg text-red-500 font-medium">{{ __('Все материалы') }}</a>
            @endif
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @if($tutorials->isEmpty())
                <p>{{ __('Записи отсутствуют') }}</p>
            @else
                @foreach($tutorials as $tutorial)
                    <x-tutorial.card :data="$tutorial" />
                @endforeach
            @endif
        </div>
    </div>
</section>