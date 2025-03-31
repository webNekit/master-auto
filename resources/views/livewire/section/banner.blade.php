      <section id="home" x-data="{ 
        currentSlide: 0,
        slides: [
          @foreach ($articles as $article)
          {
            id: '{{ $article->id }}',
            bg: '{{ $article->image ? url('storage', $article->image) : asset('assets/images/default.jpg') }}',
            title: '{{  $article->title }}',
            subtitle: '{{ Str::limit($article->small_text, 100) }}'
          },
          @endforeach
        ],
        nextSlide() {
          this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        },
        prevSlide() {
          this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
        }
      }" 
      x-init="setInterval(() => nextSlide(), 5000)"
      class="relative h-[600px] overflow-hidden">
        <!-- Slides -->
        <template x-for="(slide, index) in slides" :key="index">
          <div x-show="currentSlide === index"
               x-transition:enter="transition ease-out duration-500"
               x-transition:enter-start="opacity-0 transform translate-x-full"
               x-transition:enter-end="opacity-100 transform translate-x-0"
               x-transition:leave="transition ease-in duration-500"
               x-transition:leave-start="opacity-100 transform translate-x-0"
               x-transition:leave-end="opacity-0 transform -translate-x-full"
               :style="'background-image: url(' + slide.bg + ')'"
               class="absolute inset-0 bg-cover bg-center">
            <div class="absolute inset-0 bg-black bg-opacity-60">
              <div class="container mx-auto h-full flex items-center">
                <div class="text-white max-w-2xl px-4">
                  <h1 class="text-5xl font-bold mb-4" x-text="slide.title"></h1>
                  <p class="text-xl mb-8" x-text="slide.subtitle"></p>
                 <a x-bind:href="`/articles/${slide.id}/show`" class="bg-red-600 text-white px-8 py-3 rounded-lg hover:bg-red-700">{{ __('Читать подробнее') }}</a>
                </div>
              </div>
            </div>
          </div>
        </template>

        <!-- Navigation Buttons -->
        <button @click="prevSlide" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-red-600 text-white p-2 rounded-full hover:bg-red-700 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button @click="nextSlide" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-red-600 text-white p-2 rounded-full hover:bg-red-700 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>

        <!-- Dots Navigation -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
          <template x-for="(slide, index) in slides" :key="index">
            <button @click="currentSlide = index" 
                    :class="{'bg-red-600': currentSlide === index, 'bg-white': currentSlide !== index}"
                    class="w-3 h-3 rounded-full transition-colors duration-200"></button>
          </template>
        </div>
      </section>