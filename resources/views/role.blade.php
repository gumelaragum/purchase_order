@extends('layout.master')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <div class="title">
            <h2>Role Information</h2>
        </div>
        <hr>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/home') }}">Home</a>
            </li>
            <li>
                <a>User Management</a>
            </li>
            <li class="active">
                <strong>Role</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

        </div>
    </div>
    <link rel='stylesheet' href="{{ asset('css/style2.css') }}">
    <div class="wrapper wrapper-content">
      <div class="row">
          <div class="col-lg-12">
             <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <h5>Role</h5>
                          <div class="ibox-content">
                                <div class="modal-body">
                                    <div class="form-horizontal form-label-left">
                                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-9 col-xs-12">
                                                    <select id="rolename" class="form-control">
                                                        <option value="">Select Group Name</option>
                                                        @foreach ($id_role as $list)
                                                        <option value="{{ $list->ROLE_ID }}">{{ $list->ROLE }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> 
                                        </div> 
                                    </div>
                                    <body>
                                        <div id="page-wrap">
                                            <ul class="treeview">
                                                <li>
                                                    <input type="checkbox" name="tall" id="tall">
                                                    <label for="tall" class="custom-unchecked">User Management</label>
                                                <ul>
                                                 <li>
                                                     <input type="checkbox" name="tall-1" id="tall-1">
                                                     <label for="tall-1" class="custom-unchecked">Create User</label>
                                                 </li>
                                                 <li>
                                                     <input type="checkbox" name="tall-2" id="tall-2">
                                                     <label for="tall-2" class="custom-unchecked">Edit User</label>
                                                 </li>
                                                 <li class="last">
                                                     <input type="checkbox" name="tall-3" id="tall-3">
                                                     <label for="tall-3" class="custom-unchecked">Delete User</label>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="last">
                                            <input type="checkbox" name="short" id="short">
                                            <label for="short" class="custom-unchecked">Vendor Appraisal</label>
                                            <ul>
                                            <li>
                                                <input type="checkbox" name="short-1" id="short-1">
                                                <label for="short-1" class="custom-unchecked">Blacklist Vendor</label>
                                                <ul>
                                                    <li>
                                                        <input type="checkbox" name="short-1-2" id="short-1-2">
                                                        <label for="short-1-2" class="custom-unchecked">Insert Blacklist Vendor</label>
                                                    </li>
                                                    <li class="last">
                                                        <input type="checkbox" name="short-1-3" id="short-1-3">
                                                        <label for="short-1-3" class="custom-unchecked">Delete Blacklist Vendor</label>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="last">
                                        <input type="checkbox" name="short" id="last">
                                        <label for="last-1" class="custom-unchecked">Event Annauncement</label>
                                    </li>
                                </ul>
                            </div>
                        </body>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-9">
                                <button id="btn-view-emp" class="btn btn-success pull-left">save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{ asset('js/chekbox.js') }}"></script>
<script src="{{ asset('js/main.js') }} "></script>