@props(['user', 'size' => 'w-12 h-12'])

@if ($user->image)
    <img src="{{ $user->imageUrl() }}" alt="{{ $user->name }}"
         class="{{ $size }} rounded-full">
@else
    <img src="https://image.pngaaa.com/615/5258615-middle.png"
         alt="Dummy avatar" class="{{ $size }} rounded-full">
@endif
