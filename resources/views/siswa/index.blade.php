<a href="{{ url('siswa/create') }}">
    buat data</a>
    
<table>
    <tr>
        <th>Nama</th>
        <th>NIS</th>
        <th>Jurusan</th>
        
       
    </tr>
    @foreach ($daftarSiswa as $siswa)
        <tr>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->NIS }}</td>
            <td>{{$siswa->jurusan }}</td>
            <td>
                
                <a href="/create/{{ $siswa->id }}"></a >
                <form onsubmit="return confrim('apakah anda yakin ?');"
                    action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                    <a href="{{ route('siswa.edit', $siswa->id) }}"

                        class="btn btn-sm btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                </form>
                <a href="{{ url('siswa/'.$siswa->id) }}">Lihat Detail</a >
            </td>
        </tr>
        
    @endforeach
</table>