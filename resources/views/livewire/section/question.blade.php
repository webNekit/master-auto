<section id="faq" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-gray-900 mb-12 text-center">{{ __('Часто задаваемые вопросы') }}</h2>
        <div class="max-w-3xl mx-auto space-y-4">
            @if ($questions->isEmpty())
                <p>{{ __('Записи отсутствуют') }}</p>
            @else
                @foreach ($questions as $question)
                    <div x-data="{ open: false }" class="border border-gray-200 rounded-lg bg-white">
                        <button @click="open = !open"
                            class="w-full px-6 py-4 text-left text-gray-900 font-semibold flex justify-between items-center">
                            <span>{{ $question->question }}</span>
                            <span x-show="!open">+</span>
                            <span x-show="open">-</span>
                        </button>
                        <div x-show="open" class="px-6 py-4 text-gray-600">
                            {{ $question->answer }}
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>