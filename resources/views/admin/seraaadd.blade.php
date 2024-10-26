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
                      <h4>SAJILI SERA</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>JINA LA SERA<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="JINA LA SERA"  required>
                                <div style="color:red">{{ $errors->first('name')}}</div>
                            </div>
                                    </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">LUGHA<span style="color: red;">*</span></label>
                                    <select name="vistion" id="vistion"  required class="form-control">
                                        <option>--Chagua Lugha--</option>
                                        <option {{ (old('vistion') == 'English') ? 'selected' : '' }} value="English">English</option>
                                        <option {{ (old('vistion') == 'Kiswahili') ? 'selected' : '' }} value="Kiswahili">Kiswahili</option>

                                    </select>
                                    <div style="color:red">{{ $errors->first('vistion')}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">MWAKA</label>
                                    <input type="date" name="mwaka" id="mwaka" class="form-control" required>
                                    <div style="color:red">{{ $errors->first('mwaka')}}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Maelezo</label>
                                    <textarea name="discription" id="discription" class="form-control"></textarea>
                                    <div style="color:red">{{ $errors->first('discription')}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                            <div class="form-group">
                                    <label for="">Document</label>
                                    <input type="file" name="document"  id="document" class="form-control">
                                    <div style="color:red">{{ $errors->first('document')}}</div>
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