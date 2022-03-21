
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2> Show Siswa</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('siswa.index') }}"> Back</a>
            <a href="{{ route('siswa.edit', $siswa->id) }}"> </a>
        </div>
    </div>
</div>
<form action="{{ url('/siswa/'.$siswa->id) }}" method="post">
        @csrf
        @method('put')
                <div class="from-group">
                    <label for="title">Nama Siswa </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                    name="nama" value="{{ $siswa->nama }}" required><br><br>
        
                    <div class="from-group">
                        <label for="title">Jurusan   </label>
                       <input type="text" class="form-control @error('title') is-invalid @enderror"
                        name="jurusan" value="{{ $siswa->jurusan }}" required><br><br>
                        
                        <div class="from-group">
                            <label for="title">NIS       </label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                            name="NIS" value="{{ $siswa->NIS }}" required><br><br>
                        </table>
        
                 <button type="submit"class="btn btn-primary">Save</button>
                    <a href="{{ route('siswa.index') }}" class="btn btn-md btn-secondary">back</a>
                   
                            </form>