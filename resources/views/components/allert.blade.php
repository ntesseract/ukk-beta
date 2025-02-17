@props(['message'])

<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-md">
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <p>{{ $message }}</p>
    </div>
</div>