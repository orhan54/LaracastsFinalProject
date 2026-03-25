<x-layout>
    <h1 class="text-2xl font-bold mb-6 text-center">Liste des employeurs</h1>

    <x-forms.divider />

    <div class="px-8 mt-6">
        <ul class="space-y-3">
            @foreach ($employers as $employer)
                <li class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-white inline-block"></span>
                    {{ $employer->name }}
                </li>
            @endforeach
        </ul>
    </div>

    <div class="flex justify-center items-center gap-2 mt-8">
        {{-- Précédent --}}
        @if ($employers->onFirstPage())
            <span class="px-3 py-1 rounded text-white/30 cursor-not-allowed">&laquo;</span>
        @else
            <a href="{{ $employers->previousPageUrl() }}" class="px-3 py-1 rounded bg-white/10 hover:bg-white/20 text-white">&laquo;</a>
        @endif

        {{-- Pages --}}
        @foreach ($employers->getUrlRange(1, $employers->lastPage()) as $page => $url)
            @if ($page == $employers->currentPage())
                <span class="px-3 py-1 rounded bg-white text-black font-bold">{{ $page }}</span>
            @else
                <a href="{{ $url }}" class="px-3 py-1 rounded bg-white/10 hover:bg-white/20 text-white">{{ $page }}</a>
            @endif
        @endforeach

        {{-- Suivant --}}
        @if ($employers->hasMorePages())
            <a href="{{ $employers->nextPageUrl() }}" class="px-3 py-1 rounded bg-white/10 hover:bg-white/20 text-white">&raquo;</a>
        @else
            <span class="px-3 py-1 rounded text-white/30 cursor-not-allowed">&raquo;</span>
        @endif
    </div>
</x-layout>
