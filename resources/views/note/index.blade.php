<x-default-layout>


    @foreach ($notes as $note)

    <div>
        {{ $note->note}}
    </div>
    @endforeach

</x-default-layout>
