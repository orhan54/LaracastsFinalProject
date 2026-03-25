<x-layout>
    <h1 class="text-2xl font-bold mb-6 text-center">Liste des salaries</h1>

    <x-forms.divider/>

    <div class="px-8 mt-6">
        <table class="w-full text-left border border-gray-300">
            <thead>
            <tr class="border-b">
                <th class="p-2">Salaries jobs</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobs as $job)
                <tr class="border-b">
                    <td class="p-2">
                        <a href="{{ route('results', $job) }}" class="hover:text-blue-600">
                            {{ $job->title }} - {{ $job->salary }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex justify-center items-center gap-2 mt-8">
        {{-- Précédent --}}
        @if ($jobs->onFirstPage())
            <span class="px-3 py-1 rounded text-white/30 cursor-not-allowed">&laquo;</span>
        @else
            <a href="{{ $jobs->previousPageUrl() }}" class="px-3 py-1 rounded bg-white/10 hover:bg-white/20 text-white">&laquo;</a>
        @endif

        {{-- Pages --}}
        @foreach ($jobs->getUrlRange(1, $jobs->lastPage()) as $page => $url)
            @if ($page == $jobs->currentPage())
                <span class="px-3 py-1 rounded bg-white text-black font-bold">{{ $page }}</span>
            @else
                <a href="{{ $url }}" class="px-3 py-1 rounded bg-white/10 hover:bg-white/20 text-white">{{ $page }}</a>
            @endif
        @endforeach

        {{-- Suivant --}}
        @if ($jobs->hasMorePages())
            <a href="{{ $jobs->nextPageUrl() }}" class="px-3 py-1 rounded bg-white/10 hover:bg-white/20 text-white">&raquo;</a>
        @else
            <span class="px-3 py-1 rounded text-white/30 cursor-not-allowed">&raquo;</span>
        @endif
    </div>

</x-layout>
