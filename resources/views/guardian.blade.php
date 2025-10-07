<x-layout>
    <x-slot name="judul">Guardian</x-slot>

    <div class="p-6">

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Nama Lengkap</th>
                        <th class="px-4 py-2 border">Pekerjaan</th>
                        <th class="px-4 py-2 border">Phone</th>
                        <th class="px-4 py-2 border">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guardians as $guardian)
                    <tr>
                        <td class="px-4 py-2 border">{{ $guardian->id }}</td>
                        <td class="px-4 py-2 border">{{ $guardian->name }}</td>
                        <td class="px-4 py-2 border">{{ $guardian->job }}</td>
                        <td class="px-4 py-2 border">{{ $guardian->phone }}</td>
                        <td class="px-4 py-2 border">{{ $guardian->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>