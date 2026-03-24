@props(['employer', 'width' => 150])

<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}">
