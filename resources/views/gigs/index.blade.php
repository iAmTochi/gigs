@extends('layouts.admin')

@section('content')


    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Gigs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Gigs</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">New gig</a></li>
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
                                        <option>All Gigs</option>
                                        @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="dlc-list ml-2">
                                    <a href="{{ route('gigs.create') }}" style="background-color: black" class="btn  btn-secondary rounded">Add Gig</a>
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
                                    <th scope="col">Role</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Applied Date</th>
                                    <th scope="col">Salary</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($gigs as $gig)
                                <tr>
                                    <td>
                                        <div class="cats-box rounded bg-white d-flex align-items-center">
                                            <div class="text-center"><img src="assets/img/c-1.png" class="img-fluid" width="55" alt=""></div>
                                            <div class="cats-box-caption px-2">
                                                <h4 class="fs-md mb-0 ft-medium">{{ $gig->role->name }}</h4>
                                                <div class="d-block mb-2 position-relative">
                                                    <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>{{ $gig->state->name.', '.$gig->country->name }}</span>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-info">{{ $gig->company->name }}</span></td>
                                    <td>{{ $gig->created_at->isoFormat('D MMMM, YYYY ') }}</td>
                                    <td>{{ $gig->min. ' -- ' .$gig->max }} </td>

                                    <td>
                                        <div class="dash-action">
                                            <a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
                                            <a href="{{ route('gigs.edit', $gig->id) }}" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-pencil"></i></a>
                                            <a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
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
            </style>
@endsection
