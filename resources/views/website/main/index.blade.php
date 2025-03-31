<x-app :title="$title">
    <livewire:section.banner />
    <livewire:section.article />
    <!-- Tutorials Section -->
    <livewire:section.tutorial />
    <livewire:section.question />
    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-gray-900 mb-12 text-center">{{ __('Свяжитесь с нами') }}</h2>
            <div class="max-w-xl mx-auto">
                <livewire:form.contact />
            </div>
        </div>
    </section>
</x-app>