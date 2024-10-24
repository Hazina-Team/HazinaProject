@extends('layouts.app')

@section('content')



 <!-- Main Content -->
 <div class="main-content">
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="responsive-heading">TAASISI ZA UWEKEZAJI ZA UMMA</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
           <a href="{{ url('admin/taasisiaadd')}}" class="btn btn-primary">SAJILI TAASISI ZA UWEKEZAJI ZA UMMA</a>
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
                    <h4>IDADI YA TAASISI ZA UWEKEZAJI ZA UMMA: {{ $getRecord->total() }}</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Logo</th>
                            <th>Jina La Taasisi</th>
                            <th>Hati Ya Uanzishaji</th>
                            <th>Mwaka</th>
                            <th>Lengo La Taasisi</th>
                            <th>Aina Ya Taasisi</th>
                            <th>Makao Makuu Ya Taasisi</th>
                            <th>Jina La Mkuu Wa Taasisi</th>
                            <th>Mtaji</th>
                            <th>Jina La Wizara</th>
                            <th>Jina La Mwenye Kiti</th>
                            <th>Action</th>

                          </tr>
                        </thead>
                        <tbody>
  @foreach($getRecord as $value)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>
                @if(!empty($value->getProfile()))
                <img src="{{ $value->getProfile() }}" style="height: 50px; width:50px; border-radius: 50px;" alt="">
                @endif
            </td>
      <td>{{ $value->name }}</td>
      <td>{{ $value->hati_ya_uwanzishaji }}</td>
      <td>{{ $value->mwaka }}</td>
      <td>{{ $value->lengo }}</td>
      <td>{{ $value->aina_ya_tasisi }}</td>
      <td>{{ $value->makao_makuu }}</td>
      <td>{{ $value->jina_la_mkurugenzi }}</td>
      <td>{{ $value->mtaji }}</td>
      <td>{{ $value->jina_la_wizara }}</td>
      <td>{{ $value->jina_la_mwenyekiti }}</td>


      
      <td>
     
      <a href="{{ url('admin/taasisiajili/'.$value->id)}}" class="btn btn-success">
                      <i class="nav-icon fas fa-pen"></i>
                  </a>
                  <a href="{{ url('admin/taasisi/'.$value->id)}}" class="btn btn-danger mx-3">
                      <i class="nav-icon fas fa-trash"></i>
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
             
          </div>
        </section>
       
      </div>

@endsection