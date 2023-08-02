@extends('admin.template')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><button class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Jenis Pinjaman
                        </button></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pinjaman</th>
                                    <th>Lama Angsuran</th>
                                    <th>Maksimal Pinjaman</th>
                                    <th>Bunga</th>
                                    <th>Petugas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($record as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_pinjaman }}</td>
                                        <td>{{ $item->lama_angsuran }}</td>
                                        <td>{{ $item->maks_pinjam }}</td>
                                        <td>{{ $item->bunga }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td><button type="button" title="" class="btn btn-link btn-primary btn-lg"
                                                data-original-title="Edit Task" data-toggle="modal"
                                                data-target="#jenispinjaman{{ $item->id_jenispinjaman }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <a href="{{ asset('hapus-jenispinjaman/' . $item->id_jenispinjaman) }}"
                                                type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-danger" data-original-title="Remove"
                                                <?php echo "onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\" "; ?>>
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{asset('simpan-jenispinjaman')}}" method="post"  enctype="multipart/form-data">
                @csrf
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Pinjaman</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                     
					  <div class="form-group">
                        <label>Nama Pinjaman </label>
                        <input type="text" name="nama_pinjaman" required="required" class="form-control" placeholder="Nama  Jenis Pinjaman..">
                      </div>
                      <div class="form-group">
                        <label>Lama Angsuran</label>
                        <input type="text" name="lama_angsuran" required="required" class="form-control" placeholder="Lama angsuran..">
                      </div>
                      <div class="form-group">
                        <label>Maksimal Pinjaman</label>
                        <input type="text" name="maks_pinjam" required="required" class="form-control" placeholder="Maksimal pinjaman..">
                      </div>
                      <div class="form-group">
                        <label>Bunga</label>
                        <input type="text" name="bunga" required="required" class="form-control" placeholder="Bunga pinjaman..">
                      </div> 
                                 

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            @foreach ($record as $item)
            <form action="{{asset('edit-jenispinjaman')}}" method="post"  enctype="multipart/form-data">
                @csrf
              <div class="modal fade" id="jenispinjaman{{$item->id_jenispinjaman}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Jenis Pinjaman</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                     <input type="hidden" name="id" value="{{$item->id_jenispinjaman}}" >
					   <div class="form-group">
                        <label>Nama Pinjaman </label>
                        <input type="text" name="nama_pinjaman" value="{{$item->nama_pinjaman}}"  required="required" class="form-control" placeholder="Nama  Jenis Pinjaman..">
                      </div>
                      <div class="form-group">
                        <label>Lama Angsuran</label>
                        <input type="text" name="lama_angsuran" value="{{$item->lama_angsuran}}"  required="required" class="form-control" placeholder="Lama angsuran..">
                      </div>
                      <div class="form-group">
                        <label>Maksimal Pinjaman</label>
                        <input type="text" name="maks_pinjam" value="{{$item->maks_pinjam}}"  required="required" class="form-control" placeholder="Maksimal pinjaman..">
                      </div>
                      <div class="form-group">
                        <label>Bunga</label>
                        <input type="text" name="bunga" value="{{$item->bunga}}"  required="required" class="form-control" placeholder="Bunga pinjaman..">
                      </div> 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                      <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            @endforeach
@endsection
