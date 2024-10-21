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
                      <h4>SAJILI WATUMIAJI</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>JINA KAMILI<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="Enter Full name"  required>
                                <div style="color:red">{{ $errors->first('name')}}</div>
                            </div>
                                    </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">JINSIA <span style="color: red;">*</span></label>
                                    <select name="gender" id="gender"  required class="form-control">
                                        <option>--select gender--</option>
                                        <option {{ (old('gender') == 'Male') ? 'selected' : '' }} value="Male">Male</option>
                        <option {{ (old('gender') == 'Female') ? 'selected' : '' }} value="Female">Female</option>
                                    </select>
                                    <div style="color:red">{{ $errors->first('gender')}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">NAMBA YA SIMU<span style="color: red;">*</span></label>
                                    <input type="tel" name="phone" value="{{ old('phone')}}" id="phone" required placeholder="+255......." class="form-control">
                                    <div style="color:red">{{ $errors->first('phone')}}</div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">MIYAKA</label>
                                    <input type="number" name="age" value="{{ old('age')}}"  placeholder="20" id="age" class="form-control">
                                    <div style="color:red">{{ $errors->first('age')}}</div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Status<span style="color: red;">*</span></label>
                                    <select name="status" id="status" class="form-control" required>
                                <option>Select Status</option>
                                <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Active</option>
                                <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Inactive</option>
                                
                    </select>
                    <div style="color:red">{{ $errors->first('status')}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">PICHA</label>
                                    <input type="file" name="profile_pic"  id="profile_pic" class="form-control">
                                    <div style="color:red">{{ $errors->first('profile_pic')}}</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">PAHALA</label>
                                    <input type="text" name="address"   placeholder="Kwerekwe" id="address" class="form-control">
                                    <div style="color:red">{{ $errors->first('address')}}</div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email<span style="color: red;">*</span></label>
                                    <input type="email" name="email" value="{{ old('email')}}" required placeholder="example@gmail.com" id="email" class="form-control">
                                    <div style="color:red">{{ $errors->first('email')}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Password<span style="color: red;">*</span></label>
                                    <input type="password" name="password" required placeholder="must be Strong Password" id="password" class="form-control">
                                    <div style="color:red">{{ $errors->first('password')}}</div>
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