@extends('layouts.master')

@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{url('kategori/add')}}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                  
                </p>
            </div>
            <div class="box-body">
               <div class="table-recponsive">
                   <table class="table myTable">
                       <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                            
                        </tr>
                       </thead>
                       @foreach ($data as $e=>$dt)
                       <tr>
                           <td>{{$e+1}}</td>
                           <td>{{$dt->nama}}</td>
                           <td>{{$dt->keterangan}}</td>
                           

                       </tr>
                           
                       @endforeach
                   </table>
               </div>
               
            
            </div>
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection