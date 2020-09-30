<div>
    <div class="card">
        <div class="card-header">Pengajuan Proposal</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Judul Proposal</label>
                    <input type="text" class="form-control" placeholer='Masukan Judul Proposal'>
                    <small class="text-muted">
                        Tuliskan judul / topik PEL yang akan disusun. Misalya: “Pengembangan Ekonomi Rumahtangga melalui Pengelolaan Sampah Domestik”; “Pengembangan Produk Pisang Dusun Suka Makmur”; “Pengembangan Kerajinan Gerabah Desa Suka Usaha”; dst.
                    </small>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="">Provinsi</label>
                        <input type="text" class="form-control" placeholer='Masukan Provinsi'>
                    </div>
                    <div class="col-md-4">
                        <label for="">Kabupaten</label>
                        <input type="text" class="form-control" placeholer='Masukan Kabupaten'>
                    </div>
                    <div class="col-md-4">
                        <label for="">Kecamatan</label>
                        <input type="text" class="form-control" placeholer='Kecamatan'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="">Desa</label>
                        <input type="text" class="form-control" placeholer='Masukan Desa'>
                        <small class="text-muted">
                            Tuliskan identitas lokasi “dimana” rencana topik PEL ini akan dilaksanakan
                        </small>
                    </div>
                    <div class="col-md-6">
                        <label for="">Dusun</label>
                        <input type="text" class="form-control" placeholer='Masukan Dusun'>
                    </div>

                </div>

                <div class="form-group">
                    <label for="">Latar Belakang</label>
                    <textarea>
                        Tuliskan permasalahan masyarakat di lokasi terkait topik PEL
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="">Potensi Lokal</label>
                    <input type="text" class="form-control" >
                    <small class="text-muted">
                        Tuliskan potensi/sumberdaya manusia, modal, sosial, alam) di lokasi yang bisa diandalakan menyelesaikan permasalaham di atas
                    </small>
                </div>

                <div class="form-group">
                    <button class="btn btn-blue">Simpan Data</button>
                </div>

            </form>
        </div>
    </div>
</div>


@section('js')
<script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      height: 500,
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>
@endsection
