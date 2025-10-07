<x-layout>
    <x-slot name="judul">Daftar Guru</x-slot>

    <div class="p-6">

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Nama Lengkap</th>
                        <th class="px-4 py-2 border">Mata Pelajaran</th>
                        <th class="px-4 py-2 border">Phone</th>
                        <th class="px-4 py-2 border">Email</th>
                        <th class="px-4 py-2 border">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                    <tr>
                        <td class="px-4 py-2 border">{{ $teacher->id }}</td>
                        <td class="px-4 py-2 border">{{ $teacher->name }}</td>
                        <td class="px-4 py-2 border">{{ optional($teacher->subject)->name ?? '—' }}</td>
                        <td class="px-4 py-2 border">{{ $teacher->phone }}</td>
                        <td class="px-4 py-2 border">{{ $teacher->email }}</td>
                        <td class="px-4 py-2 border">{{ $teacher->address }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
