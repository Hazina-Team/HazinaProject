@extends('layouts.app')

@section('content')



 <!-- Main Content -->
 <div class="main-content">
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sheria </h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
           <a href="{{ url('admin/seraaadd')}}" class="btn btn-primary">WASILISHA SERA</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
              @include('_massage')
                <div class="card">
                  <div class="card-header">
                    <h4>Sera</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Sera</th>
                            <th>Lugha</th>
                            <th>Mwaka</th>
                            <th>Document</th>
                          </tr>
                        </thead>
                        <tbody>
  @foreach($getRecord as $value)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $value->name }}</td>
      <td>{{ $value->vistion }}</td>
      <td>{{ $value->mwaka }}</td>
      
      <td>
      <a href="{{ asset('document/' . $value->document) }}"><button class="btn btn-success" type="button"><i class="nav-icon fas fa-save"></i></button></a>
      <a href="{{ url('admin/sera/delete/'.$value->id) }}" class="btn btn-danger">
          <i class="nav-icon fas fa-trash"></i>
        </a>

</td>
      
    </tr>
  @endforeach
</tbody>

                        
                      </table>
                    </div>
                    <div style="padding: 10px; float: right;">
              {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
</div>
                  </div>
                </div>
              </div>
            </div>
             
          </div>
        </section>
       
      </div>

@endsection