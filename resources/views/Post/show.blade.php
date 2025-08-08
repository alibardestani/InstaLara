<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl mb-4">
                    {{ $post->title }}
                </h1>
                <div class="flex gap-4">
                    @if($post->user->image)
                        <img src="{{ $post->user->imageUrl() }}" alt="{{ $post->user->name }}"
                             class="w-12 h-12 rounded-full">
                    @else
                        <img src="https://image.pngaaa.com/615/5258615-middle.png" alt="Dummy Avatar"
                             class="w-12 h-12 rounded-full">
                    @endif

                        <div>
                            <x-follow-ctr :user="$post->user" class="flex gap-2">
                                <a href="{{ route('profile.show', $post->user) }}" class="hover">
                                   {{ $post->user->name }}</a>
                                &middot;
                                <button
                                    x-text="following ? 'Unfollow' : 'Follow'"
                                    x-bind:class="following ? 'text-red-600' : 'text-emerald-600'"
                                @click="follow()">
                                </button>

                            </x-follow-ctr>
                            <div class="flex gap-2 text-sm text-gray-500">
                                {{ $post->readTime() }} min read
                                &middot;
                                {{ $post->created_at->format('M d, Y') }}
                            </div>
                        </div>
                </div>



                <div class="mt-8">
                    <img src="{{ $post->imageUrl() }}" alt="{{
                            $post->title
                        }}" class="w-full">

                    <div class="mt-4">
                        {{ $post->content }}
                    </div>
                </div>


                <div class="mt-8">
                    <span class="px-4 py-2 bg-gray-200 rounded-lg">
                        {{ $post->category->name }}
                    </span>
                </div>

                <x-clap-button/>
            </div>
        </div>
    </div>
</x-app-layout>
