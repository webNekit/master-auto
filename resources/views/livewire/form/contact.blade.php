<form wire:submit.prevent="submit" class="space-y-6">
    @if (session()->has('message'))
        <div class="w-full rounded-md border bg-green-100 p-8 mb-4">
            {{ session('message') }}
        </div>
    @endif
    <div>
        <label class="block text-gray-700 mb-2">{{ __('Имя') }}</label>
        <input wire:model.defer="name" type="text"
            class="w-full px-4 py-2 rounded-lg bg-gray-50 text-gray-900 border border-gray-200 focus:border-red-500 focus:ring-2 focus:ring-red-200">
        @error('name')
            <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label class="block text-gray-700 mb-2">{{ __('E-mail') }}</label>
        <input wire:model.defer="email" type="email"
            class="w-full px-4 py-2 rounded-lg bg-gray-50 text-gray-900 border border-gray-200 focus:border-red-500 focus:ring-2 focus:ring-red-200">
        @error('email')
            <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label class="block text-gray-700 mb-2">{{ __('Сообщение') }}</label>
        <textarea wire:model.defer="message"
            class="w-full px-4 py-2 rounded-lg bg-gray-50 text-gray-900 border border-gray-200 focus:border-red-500 focus:ring-2 focus:ring-red-200"
            rows="4"></textarea>
        @error('message')
            <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
    </div>
    <button class="w-full bg-red-600 text-white py-3 rounded-lg hover:bg-red-700">{{ __('Отправить') }}</button>
</form>