@extends('layouts.app')

@section('content')



 <!-- Main Content -->
 <div class="main-content">
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="responsive-heading">WATUMIAJI</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
           <a href="{{ url('admin/admin/add')}}" class="btn btn-primary">SAJILI WATUMIAJI </a>
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
                    <h4>IDADI YA WATUMIAJI : {{ $getRecord->total() }}</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Profile</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Phone</th>
            <!-- <th>Address</th>
            <th>Gender</th>
            <th>Age</th> -->
            <th>Status</th>
            <th>Created Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($getRecord as $value)
        <tr> <!-- Added the missing <tr> tag -->
            <td>{{ $value->id}}</td>
            <td>
                @if(!empty($value->getProfile()))
                <img src="{{ $value->getProfile() }}" style="height: 50px; width:50px; border-radius: 50px;" alt="">
                @endif
            </td>
            <td>{{ $value->name}}</td>
            <td>{{ $value->email}}</td>
            <td>{{ $value->phone}}</td>
            <!-- <td>{{ $value->address}}</td>
            <td>{{ $value->gender}}</td>
            <td>{{ $value->age}}</td> -->
            <td>{{ ($value->status == 0) ? 'Active' : 'Inactive'}}</td>
            <td>{{ date('d-m-Y H:i A', strtotime($value->created_at))}}</td>
            <td>
              <div class="d-flex gap-2">
                  <a href="{{ url('admin/admin/edit/'.$value->id)}}" class="btn btn-success">
                      <i class="nav-icon fas fa-pen"></i>
                  </a>
                  <a href="{{ url('admin/admin/delete/'.$value->id)}}" class="btn btn-danger mx-3">
                      <i class="nav-icon fas fa-trash"></i>
                  </a>
              </div>
          </td>

        </tr> <!-- Closed the <tr> tag here -->
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
        <!-- <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div> -->
      </div>

@endsection