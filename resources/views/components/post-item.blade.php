<div class="flex bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-8">
    <div class="p-5 flex-1">
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ \Illuminate\Support\Str::words($post->content,20) }}</p>
        <a href="#">
            <x-primary-button>
                Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            </x-primary-button>
        </a>
    </div>
    <a href="#">
        <img class="w-48 h-full object-cover rounded-t-lg" src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->title }}">
    </a>
</div>
