<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="overflow-x-auto mt-4">
        <table style="width: 100%; border-collapse: collapse; margin: 20px auto; text-align: center; color: #000;">
            <thead style="background-color: #f4f4f4;">
                <tr>
                    <th style="border: 1px solid #333; padding: 10px 14px;">ID</th>
                    <th style="border: 1px solid #333; padding: 10px 14px;">Nama Kelas</th>
                    <th style="border: 1px solid #333; padding: 10px 14px;">Student List</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($classrooms as $classroom)
                <tr>
                    <td style="border: 1px solid #333; padding: 10px 14px;">{{ $classroom->id }}</td>
                    <td style="border: 1px solid #333; padding: 10px 14px;">{{ $classroom->name }}</td>
                    <td style="border: 1px solid #333; padding: 10px 14px; text-align: left;">
                        @if($classroom->students->count())
                            <ul style="list-style-type: disc; padding-left: 20px; margin: 0;">
                                @foreach ($classroom->students as $student)
                                    <li>{{ $student->name }}</li>
                                @endforeach
                            </ul>
                        @else
                            <em>Tidak ada siswa</em>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" style="border: 1px solid #333; padding: 10px 14px;">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
