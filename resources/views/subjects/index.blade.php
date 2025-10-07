<x-layout>
    <x-slot name="judul">Daftar Mata Pelajaran</x-slot>

    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Mata Pelajaran</th>
                        <th class="px-4 py-2 border">Deskripsi</th>
                        <th class="px-4 py-2 border">Jumlah Guru</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                    <tr>
                        <td class="px-4 py-2 border">{{ $subject->id }}</td>
                        <td class="px-4 py-2 border">{{ $subject->name }}</td>
                        <td class="px-4 py-2 border">{{ $subject->description }}</td>
                        <td class="px-4 py-2 border">{{ $subject->teachers->count() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
