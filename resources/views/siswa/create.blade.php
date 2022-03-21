<form action="{{ url('siswa') }}" method="post">
@csrf
        <div class="from-group">
            <label for="title">Nama Siswa </label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"
            name="nama" value="{{ old('title') }}" required><br><br>

            <div class="from-group">
                <label for="title">Jurusan   </label>
               <input type="text" class="form-control @error('title') is-invalid @enderror"
                name="jurusan" value="{{ old('title') }}" required><br><br>
                
                <div class="from-group">
                    <label for="title">NIS       </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                    name="NIS" value="{{ old('title') }}" required><br><br>
                </table>

         <button type="submit"class="btn btn-primary">Save</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-md btn-secondary">back</a>
           
                    </form>
                </div>
            </div>
        </div> 
