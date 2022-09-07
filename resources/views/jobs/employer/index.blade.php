@extends('layouts.admin')

@section('content')

    <!-- ======================= dashboard Detail ======================== -->
    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Manage Jobs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">Manage Jobs</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="d-flex align-items-center p-3 alert alert-danger">
                        Your listings will be automatically removed after 30 days.
                    </div>
                    <div class="mb-4 tbl-lg rounded overflow-hidden">
                        <div class="table-responsive bg-white">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Filled</th>
                                    <th scope="col">Posted Date</th>
                                    <th scope="col">Expired</th>
                                    <th scope="col">Applications</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($jobs as $job)
                                <tr>
                                    <td>{{ ++$count }}</td>
                                    <td>
                                        <div class="dash-title">
                                            <h4 class="mb-0 ft-medium fs-sm">{{ $job->title }}</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dash-filled">
                                            <span class="p-2 circle gray d-inline-flex align-items-center justify-content-center"><i class="lni lni-minus"></i></span>
                                        </div>
                                        <div class="dash-filled">
                                            <span class="p-2 circle text-light bg-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-checkmark"></i></span>
                                        </div>
                                    </td>
                                    <td>{{ $job->created_at->isoFormat('D MMM YYYY ') }}</td>
                                    <td>{{ $job->feature_days->isoFormat('D MMM YYYY ')}}</td>
                                    <td><a class="gray rounded px-3 py-2 ft-medium">----</a><a  class="theme-bg text-light rounded px-3 py-2 ft-medium">Total 04</a></td>
                                    <td>
                                        <div class="dash-action">
                                            <a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
                                            @if(auth()->user()->role == 'employer')
                                            <a href="{{ route('jobs.edit', $job->id) }}" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>

                                            <a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
                                            @endif
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

        </div>

        <!-- footer -->
        @include('partial._admin_foot')

    </div>
    <!-- ======================= dashboard Detail End ======================== -->


@endsection

@section('styles')
@endsection

@section('scripts')
@endsection





