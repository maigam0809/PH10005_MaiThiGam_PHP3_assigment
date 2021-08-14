@extends('admin.layout')

@section('title','Show - Users')

@section('contents')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    ID: {{$user->id}}
                    <small>
                    {{$user->last_name}}
                    {{$user->first_name}}
                    </small>
                </h1>
            </div>
               <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Id</th>
                        <th>Email</th>
                        <th>Active</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Gender</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="odd gradeX text-capitalize" align="center">
                        <td>{{$user->id}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->active}}</td>
                        <td>{{$user->image}}</td>
                        <td>{{$user->address}}</td>
                        <td>
                          {{$user->role == config('common.users.role.users') ? 'Users' : 'Admin'}}
                        </td>
                        <td>
                          {{$user->gender == config('common.users.gender.male') ? 'Nam' : 'Nữ'}}
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
