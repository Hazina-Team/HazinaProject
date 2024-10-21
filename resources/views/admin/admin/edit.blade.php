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
                      <h4>Add New Auth</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Full Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ old('name', $getRecord->name)}}" placeholder="Enter Full name"  required>
                                <div style="color:red">{{ $errors->first('name')}}</div>
                            </div>
                                    </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gender <span style="color: red;">*</span></label>
                                    <select name="gender" id="gender"  required class="form-control">
                                    <option  value="">Select Gender</option>
                        <option {{ (old('gender',$getRecord->gender) == 'Male') ? 'selected' : '' }} value="Male">Male</option>
                        <option {{ (old('gender',$getRecord->gender) == 'Female') ? 'selected' : '' }} value="Female">Female</option>
                        <option {{ (old('gender',$getRecord->gender) == 'Other') ? 'selected' : '' }} value="Other">Other</option>
                                    </select>
                                    <div style="color:red">{{ $errors->first('gender')}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Phone<span style="color: red;">*</span></label>
                                    <input type="tel" name="phone" value="{{ old('phone', $getRecord->phone)}}" id="phone" required placeholder="+255......." class="form-control">
                                    <div style="color:red">{{ $errors->first('phone')}}</div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Age</label>
                                    <input type="number" name="age" value="{{ old('age', $getRecord->age)}}"  placeholder="20" id="age" class="form-control">
                                    <div style="color:red">{{ $errors->first('age')}}</div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Status<span style="color: red;">*</span></label>
                                    <select name="status" id="status" class="form-control" required>
                                    <option  value="">Select Status</option>
                        <option {{ (old('status',$getRecord->stuts) == 0) ? 'selected' : '' }} value="0">Active</option>
                        <option {{ (old('status',$getRecord->stuts) == 1) ? 'selected' : '' }} value="1">Inactive</option>
                                
                    </select>
                    <div style="color:red">{{ $errors->first('status')}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Profile</label>
                                    <input type="file" name="profile_pic"  id="profile_pic" class="form-control">
                                    <div style="color:red">{{ $errors->first('profile_pic')}}</div>
                                    <hr/>
                                    @if(!empty($getRecord->getProfile()))
                    <img src="{{ $getRecord->getProfile()}}" alt="" style="width: auto; height: 50px;">
                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" name="address" value="{{ old('address', $getRecord->address)}}"  placeholder="Kwerekwe" id="address" class="form-control">
                                    <div style="color:red">{{ $errors->first('address')}}</div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email<span style="color: red;">*</span></label>
                                    <input type="email" name="email" value="{{ old('email', $getRecord->email)}}" required placeholder="example@gmail.com" id="email" class="form-control">
                                    <div style="color:red">{{ $errors->first('email')}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Password<span style="color: red;">*</span></label>
                                    <input type="text" name="password" placeholder="must be Strong Password" id="password" class="form-control">
                                    <p>Due want to change password so please add new password</p>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </section>
       
      </div>


@endsection