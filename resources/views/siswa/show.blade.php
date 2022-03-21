<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Siswa</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('siswa.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Siswa:</strong>
            {{ $siswa->nama }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIS:</strong>
            {{ $siswa->NIS }}
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jurusan:</strong>
                {{ $siswa->jurusan }}
            </div>
    </div>
</div>