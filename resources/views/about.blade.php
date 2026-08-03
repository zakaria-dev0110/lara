<x-layout> {{-- the name coming after "x-" is the file name --}}
    <x-slot:title> {{-- Access the named slot --}}
        About
    </x-slot>
    <?php foreach ($jobs  as $job): ?> 
        <li class="m-4"> {{ $job["Job"] }} job pays {{ $job['Salary'] }} $ per year.</li>
    <?php endforeach; ?>
</x-layout>