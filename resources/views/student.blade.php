<x-layout>
    <x-slot name="judul">Tabel Siswa</x-slot>

    <div class="p-6">

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Nama Lengkap</th>
                        <th class="px-4 py-2 border">Email</th>
                        <th class="px-4 py-2 border">Alamat</th>
                        <th class="px-4 py-2 border">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td class="px-4 py-2 border">{{ $student->id }}</td>
                        <td class="px-4 py-2 border">{{ $student->name }}</td>
                        <td class="px-4 py-2 border">{{ $student->email }}</td>
                        <td class="px-4 py-2 border">{{ $student->address }}</td>
                        <td class="px-4 py-2 border">{{ $student->classroom -> id}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>