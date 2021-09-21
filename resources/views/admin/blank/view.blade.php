@extends('admin.layouts.admin')

@section('content')
    <style>
        .card .table td, .card .table th {
            padding-right: 1.5rem;
            white-space: break-spaces;
            padding-left:1.5rem;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_cumb',['title'=>'View'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td style="width: 40%">title</td>
                                    <td>:</td>
                                    <td>
                                        1st product
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">title</td>
                                    <td>:</td>
                                    <td>
                                        2nd product
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">title</td>
                                    <td>:</td>
                                    <td>
                                        3rd product
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

@endsection