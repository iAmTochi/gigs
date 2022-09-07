@extends('layouts.admin')

@section('content')


    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Companies</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Companies</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">All Companies</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="cl-justify">

                        <div class="cl-justify-first">
                            <p class="m-0 p-0 ft-sm"> <span class="text-dark ft-medium"></span> .</p>
                        </div>

                        <div class="cl-justify-last">
                            <div class="d-flex align-items-center justify-content-left">
                                <div class="dlc-list">
                                    <select class="form-control sm rounded">


                                    </select>
                                </div>
                                <div class="dlc-list ml-2">
                                    <a href="{{ route('companies.create') }}" style="background-color: black" class="btn  btn-secondary rounded">Add Company</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="mb-4 tbl-lg rounded overflow-hidden">
                        <div class="table-responsive bg-white">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Name</th>

                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{ ++$count }}</td>
                                        <td>
                                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                                <div class="text-center"><img src="assets/img/c-1.png" class="img-fluid" width="55" alt=""></div>
                                                <div class="cats-box-caption px-2">
                                                    <h4 class="fs-md mb-0 ft-medium">{{ $company->name }}</h4>
                                                </div>
                                            </div>
                                        </td>



                                        <td>
                                            <div class="dash-action">
                                                <a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
                                                <a href="{{ route('companies.edit', $company->id) }}" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-pencil"></i></a>
                                                <a style="cursor: pointer;" onclick="handleDelete('{{ route('companies.destroy', $company->id) }}')" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>


                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span class="fas fa-arrow-circle-right"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">18</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span class="fas fa-arrow-circle-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Modal -->
            <div  class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="z-index: 1050;">
                    <form action="" method="POST" id="deleteForm">
                        @method('DELETE')
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center font-weight-bold">
                                    Are you sure you want to delete this?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>




        <!-- footer -->
        @include('partial._admin_foot')
        @endsection


        @section('scripts')

            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

            <script>

                $(document).ready(function() {
                    $('.tags-selector').select2();
                });
            </script>
            <script>
                function handleDelete(url) {
                    let form = document.getElementById('deleteForm');
                    form.action = url;
                    $('#deleteModal').modal('show')
                }
            </script>
        @endsection

        @section('styles')

            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

            <style>
                .select2-container--default .select2-selection--single .select2-selection__rendered {
                    color: #444;
                    line-height: 50px;
                }
                .select2-container--default .select2-selection--single .select2-selection__arrow {
                    height: 50px;
                    position: absolute;
                    top: 1px;
                    right: 1px;
                    width: 20px;
                }
                .select2-container--default .select2-selection--single {
                    background-color: #fff;
                    border: 1px solid #aaa;
                    border-radius: 0px;
                }

                .select2-container .select2-selection--single {
                    box-sizing: border-box;
                    cursor: pointer;
                    display: block;
                    height: 50px;
                    user-select: none;
                    -webkit-user-select: none;
                }

                .modal-backdrop {
                    /*position: fixed;*/
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    z-index: -1;
                    background-color: #000;
                }
            </style>
@endsection
