@extends('layouts.app')

@section('content')

<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                <form action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="card-header">
                      <h4>SAJILI TAASISI ZA UWEKEZAJI ZA UMMA</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>JINA LA TAASISI<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" required name="name" value="{{ old('name')}}" placeholder="JINA LA TAASISI">
                                <div style="color:red">{{ $errors->first('name')}}</div>
                            </div>
                                    </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">AINA YA TAASISI<span style="color: red;">*</span></label>
                                    <select name="aina_ya_tasisi" id="aina_ya_tasisi"   class="form-control">
                                        <option value="NULL">--Chagua AINA--</option>
                                        <option {{ (old('aina_ya_tasisi') == 'MASHIRIKA') ? 'selected' : '' }} value="MASHIRIKA">MASHIRIKA</option>
                                        <option {{ (old('aina_ya_tasisi') == 'KAMPUNI') ? 'selected' : '' }} value="KAMPUNI">KAMPUNI</option>
                                        <option {{ (old('aina_ya_tasisi') == 'MAMLAKA') ? 'selected' : '' }} value="MAMLAKA">MAMLAKA</option>
                                        <option {{ (old('aina_ya_tasisi') == 'MIFUKO') ? 'selected' : '' }} value="MIFUKO">MIFUKO</option>

                                    </select>
                                    <div style="color:red">{{ $errors->first('aina_ya_tasisi')}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">MWAKA WA KUANZISHWA</label>
                                    <input type="text" name="mwaka" id="mwaka" class="form-control">
                                    <div style="color:red">{{ $errors->first('mwaka')}}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">LENGO LA TAASISI</label>
                                    <textarea name="lengo" id="lengo" class="form-control"></textarea>
                                    <div style="color:red">{{ $errors->first('lengo')}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                            <div class="form-group">
                                    <label for="">HATI YA UANZISHAJI</label>
                                    <input type="text" name="hati_ya_uwanzishaji"  id="hati_ya_uwanzishaji" class="form-control">
                                    <div style="color:red">{{ $errors->first('hati_ya_uwanzishaji')}}</div>
                                </div>
                            </div>

                            <div class="col-6">
                              <div class="form-group">
                              <label for="">MAKAO MAKUU YA TAASISI</label>
                              <input type="text" name="makao_makuu" id="makao_makuu" class="form-control">
                              </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">JINA LA MKUU WA TAASISI</label>
                                    <input type="text" name="jina_la_mkurugenzi" id="jina_la_mkurugenzi" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">MTAJI WA UANZISHAJI WA TAASISI</label>
                                    <input type="text" name="mtaji" id="mtaji" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">JINA LA WIZARA</label>
                                    <input type="text" name="jina_la_wizara" id="jina_la_wizara" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">JINA LA MWENYEKITI</label>
                                    <textarea  name="jina_la_mwenyekiti" id="jina_la_mwenyekiti" class="form-control"></textarea>
                                    <!-- <input type="text" name="jina_la_mwenyekiti" id="jina_la_mwenyekiti" class="form-control"> -->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">LOGO</label>
                                    <input type="file" name="profile_pic" id="profile_pic" class="form-control">
                                    <div style="color:red">{{ $errors->first('profile_pic')}}</div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        
      </div>


@endsection  