@extends('layout.master')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
      <div class="title">
          <h2>Inisiation Program Pengadaan</h2>
        </div>
    <hr>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/home') }}">Home</a>
            </li>
            <li>
                <a>Order Management</a>
            </li>
          <li class="active">
                <strong>Inisiation</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="">
                        <a href="#tab_content2" data-toggle="tab">Input</a>
                    </li>
                    <li class="active">
                      <a href="#tab_content4" data-toggle="tab">Daftar</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab_content2" class="tab-pane">
                        <div class="panel-body">
                          <div class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">Direktorat - Unit Bisnis</label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                       <select class="form-control prjctname">
                                             <option value="">COMPLAINCE RISK MGNT & GA</option>
                                       </select>
                                    </div>
                                  <div class="col-md-2 col-sm-6 col-xs-12">
                                      <select class="form-control prjctname">
                                           <option value="">Supply center</option>
                                      </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                   <label class="control-label col-md-2 col-sm-6 col-xs-12">Unit Kerja - Tahun RKAP</label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                       <select class="form-control prjctname">
                                            <option value="">Procurument</option>
                                       </select>        
                                  </div>
                               <div class="col-md-2 col-sm-6 col-xs-12">
                                    <select class="form-control prjctname">
                                        <option value="">Tahun</option>
                                        @foreach ($t_tahun as $list)
                                        <option value="{{ $list->TAHUN_ID }}">{{ $list->TAHUN }}</option>
                                            @endforeach
                                    </select>
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="control-label col-md-2 col-sm-6 col-xs-12">Paket Pengadaan</label>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" id="emp-no">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2 col-sm-6 col-xs-12">Nama Pengadaan</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" class="form-control Nama" id="Nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">Nilai Estemasi - Jenis Anggaran</label>
                                   <div class="col-md-4 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" id="emp-no">
                                  </div>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <select class="form-control prjctname">
                                      <option value="">EXPLOTASI OPEX</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">Pola Pengadaan</label>
              	                 <div class="col-md-6 col-sm-6 col-xs-12">
                                   <select class="form-control prjctname">
                                        <option value="">Penerbitan SP</option>
                                   </select>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">Tanggal</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" class="form-control date1" id="date1">
                                  </div>
                              </div>
                            <div class="form-group">
                                <div class="col-md-8 col-sm-9 col-xs-12 col-md-9">     
                                    <button id="btn-input-emp" class="btn btn-success pull-right">save</button>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="tab_content4" class="tab-pane active">
                  <div class="panel-body">
                        <div class="form-horizontal form-label-left">
                            <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-6 col-xs-12"></label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                      </div>
                                </div>
                                    <table class="mandaysTable_view table table-bordered table-responsive table-hover">
                                      <thead>
                                        <tr>
                                          <th class ="table-head" style="text-align: center">No</th>
                                          <th class ="table-head" style="text-align: center">Nama Pengadaan</th>
                                          <th class ="table-head" style="text-align: center">Pola Pengadaan</th>
                                          <th class ="table-head" style="text-align: center">Tanggal</th>
                                          <th class ="table-head" style="text-align: center">Keterangan</th>  
                                          <th class ="table-head" style="text-align: center">Action</th>  
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($data as $datas)
                                      <tr>
                                      <td><center>{{ $datas->id_ord }}</center></td>
                                        <td>{{ $datas->Nama_pengadaan }}</td>
                                        <td>{{ $datas->Pola_pengadaan }}</td>
                                        <td>{{ $datas->Tanggal }}</td>
                                        <td>{{ $datas->Keterangan }}</td>
                                      <td>
                                        <center>
                                        <div class="input-group">

                                              <button type="button" class="btn btn-warning button_edit" data-toggle="modal" value="{{ $datas->id_ord }}*{{ $datas->Nama_pengadaan }}*{{ $datas->Pola_pengadaan }}*{{ $datas->Tanggal }}*{{ $datas->Keterangan }}">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp

                                              <button type="button" class="btn btn-danger delete_inisiasi" id="btn_delete_inisiasi"value="{{ $datas->Nama_pengadaan }}">Delete<i class="glyphicon glyphicon-trash"></i> </button>

                                          </div>
                                          </center>
                                        </td>
                                      </tr>
                                      <div class="modal inmodal" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content animated bounceInRight">
                                                <div class="modal-header">
                                                <h2 class="modal-title" id="exampleModalLabel">Edit Inisiation</h2>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="form-horizontal form-label-left">    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4 col-sm-6 col-xs-12">Direktorat - Unit Bisnis</label>
                                                          <div class="col-md-4 col-sm-6 col-xs-12">
                                                               <select class="form-control prjctname" disabled="disabled">
                                                                     <option value="">COMPLAINCE RISK MGNT & GA</option>
                                                               </select>
                                                          </div>
                                                      <div class="col-md-2 col-sm-6 col-xs-12">
                                                          <select class="form-control prjctname" disabled="disabled">
                                                               <option value="">Supply center</option>
                                                          </select>
                                                     </div>
                                                </div>
                                              <div class="form-group">
                                                      <label class="control-label col-md-4 col-sm-6 col-xs-12">Unit Kerja - Tahun RKAP</label>
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                           <select class="form-control prjctname" disabled="disabled">
                                                                <option value="">Procurument</option>
                                                           </select>        
                                                      </div>
                                                  <div class="col-md-2 col-sm-6 col-xs-12">
                                                      <select class="form-control prjctname" disabled="disabled">
                                                          <option value="">Tahun</option>
                                                          @foreach ($t_tahun as $list)
                                                          <option value="{{ $list->TAHUN_ID }}">{{ $list->TAHUN }}</option>
                                                              @endforeach
                                                      </select>
                                                 </div>
                                            </div>
                                                <div class="form-group">
                                                      <label class="control-label col-md-4 col-sm-6 col-xs-12">Paket Pengadaan</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" class="form-control Pengadaan" id="Pengadaan" readonly="readonly">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                     <label class="control-label col-md-4 col-sm-6 col-xs-12">Nama Pengadaan</label>
                                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                                         <input type="text" class="form-control satu" id="satu">
                                                         <input type="hidden" class="form-control id_ord" id="id_ord">
                                                      </div>
                                                  </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4 col-sm-6 col-xs-12">Pola pengadaan</label>
                                                    <div class="col-md-6 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control grname" id="grname">
                                                       <input type="hidden" class="form-control id_ord" id="id_ord">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Tanggal</label>
                                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control dateedit" id="dateedit">
                                                          <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                              </div>
                                                <div class="form-group"> 
                                                    <label class="control-label col-md-4 col-sm-6 col-xs-12">Nilai Estemasi - Jenis Anggaran</label>
                                                      <div class="col-md-4 col-sm-6 col-xs-12" >
                                                        <input type="text" class="form-control" id="emp-no" readonly="readonly">
                                                      </div>
                                                  <div class="col-md-2 col-sm-6 col-xs-12">
                                                      <select class="form-control prjctname" disabled="disabled">
                                                          <option value="">EXPLOTASI OPEX</option>
                                                      </select>
                                                  </div>
                                              </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                      <button class="btn btn-success pull-right btn-edit-inisiasi">Update</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Deletelist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-10" role="document">
        <div class="modal-content">
            <div class="modal-body">
                 <center>
                <h3> Apakah anda yakin akan menghapus <Label  class="Pola_pengadaan" name="Pola_pengadaan" id="Pola_pengadaan" ></Label>  ? </h3>
                 </center>
                <input type="hidden" name="id_inisiasi" class="id_inisiasi" id="id_inisiasi" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No <i class="fa fa-close"></i> </button>  
                <button class="btn btn-success pull-right btn_delete_inisiasi" id="btn_delete_inisiasi" >Yes <i class="fa fa-check-square-o" aria-hidden="true"></i> </button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
        $(document).ready(function() {

            $.ajaxSetup({
                headers : {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
             });
            $('.button_edit').click(function(){
                var splt = $(this).val().split('*');
                $(".id_ord").val(splt[0]);
                $(".satu").val(splt[1]);
                $(".grname").val(splt[2]);
                $(".dateedit").val(splt[3]);
                $('#modal_edit').modal("show");

            });
             $('.btn-edit-inisiasi').click(function(){
                var String_id_ord = $(".id_ord").val();; 
                var op = "";
                var String_nama = $('.satu').val();
                var String_nama_group = $('.grname').val();
                var String_tgl_closing = $('.dateedit').val();
               
                $.ajax({
                    type  :'POST',
                    url   : baseUrl +'/inisiasi/edit',
                    data  : {'id_ord':String_id_ord,'Nama_pengadaan':String_nama,'Pola_pengadaan':String_nama_group,'date1':String_tgl_closing,_token: '{{csrf_token()}}'},
                    dataType: 'json',
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    success:function(r){
                    setTimeout(function(){// wait for 5 secs(2)
                        location.reload(true); // then reload the page.(3)
                      }, 1000);
                        $('#modal_edit').modal('hide');
                        $("#error2").html(r.msg);
                        $('#myModal2').modal("show");
                    },
                    complete: function(){
                        $('.ajax-loader').css("visibility", "hidden");
                    }
                });
                //alert("hai");
               //console.log(data);
            });
             $('.delete_inisiasi').click(function(){
               var splt = $(this).val().split('*');
               $("#id_inisiasi").val(splt[0]);
                $(".Pola_pengadaan").text(splt[0]);
               //yang di hapus ya itu nantinya adalah ikut (id_vendor)
                //kalau pakai titik berarti class jika pagar berarti id
                //.val().split('*'); adalah untuk split atau memotong data dari inputan (btn/teks bok s dan lain2)
                //.val(splt[0]); adalah nama variabel dan urutan data yang di potong dalam bentuk array
                //.val(splt[1]); adalah hasil potomgan berbentuk array
               $('#Deletelist').modal('show');
            });
              $('.btn_delete_inisiasi').click(function(){
                    var id_inisiasi   = $(".id_inisiasi").val();
                    
                    var val = {'id_inisiasi' : id_inisiasi, _token :'{{csrf_token()}}'};  
                    //jadi grname sama grdes akan di simpan atau masuk di var val atas ini
                    console.log(val);
                      $.ajax({
                      url : baseUrl +'/inisiasi/delete',
                      //memanggil di url harus sama dengan yang di routes atau web.php
                      type: 'POST',
                      //type harus sama dengan yang di web atau routes
                      data: val,      
                      dataType: 'json',
                      beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                      },
                      success:function(r){
                        $('#Deletelist').modal('hide');
                        setTimeout(function(){// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                          }, 1000);
                           $("#error2").html(r.msg);
                          $('#myModal2').modal("show");
                          //setTimeout adalah waktu saat mengimput              
                        },
                        complete: function(){
                         $('.ajax-loader').css("visibility", "hidden");
                    }
                });
            });
        });
        </script>
    @endsection
