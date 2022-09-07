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
                <div class="col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="ti-plus mr-1 theme-cl fs-sm"></i>Add Gig</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row" action="{{ isset($gig)? route('gigs.update', $gig->id) : route('gigs.store')  }}" method="post">
                                @csrf
                                @isset($gig)
                                    @method('PUT')
                                @endisset
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="text-dark ft-medium">Role</label>
                                        <select name="role" id="" class="form-control tags-selector @error('role') is-invalid @enderror">
                                            <option value="">Choose a Role</option>
                                            @foreach($roles as $role)
                                            <option value="{{ $role->id }}"
                                                @isset($gig)
                                                    @if($role->id === $gig->role_id)
                                                    selected
                                                    @endif
                                                @endisset
                                            >{{ $role->name }}</option>
                                            @endforeach

                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('role')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="text-dark ft-medium">Company</label>
                                        <select name="company" id="" class="form-control tags-selector @error('company') is-invalid @enderror">
                                            <option value="">Choose a Company</option>
                                            @foreach($companies as $company)
                                            <option value="{{ $company->id }}"
                                                @isset($gig)
                                                    @if($company->id === $gig->company_id)
                                                    selected
                                                    @endif
                                                @endisset
                                            >{{ $company->name }}</option>
                                            @endforeach

                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('company')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="text-dark ft-medium">Location</label>
                                        <select name="country" id="" class="form-control tags-selector @error('country') is-invalid @enderror">
                                            <option value="">Choose a Country</option>
                                            @foreach($countries as $country)
                                            <option value="{{ $country->id }}"
                                                    @isset($gig)
                                                    @if($country->id === $gig->country_id)
                                                    selected
                                                @endif
                                                @endisset
                                            >{{ $country->name }}</option>
                                            @endforeach

                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('country')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="text-white">.</label>
                                        <select style="padding: 40px 0 !important;" name="state" id="" class="form-control tags-selector @error('state') is-invalid @enderror">
                                            <option value="">Choose a State/Region</option>
                                            @foreach($states as $state)
                                            <option value="{{ $state->id }}"
                                                @isset($gig)
                                                    @if($state->id === $gig->state_id)
                                                    selected
                                                @endif
                                                @endisset
                                            >{{ $state->name }}</option>
                                            @endforeach

                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('state')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="address" class="form-control @error('address') is-invalid @enderror" id="" rows="2" placeholder="Address">{{ isset($gig)? $gig->address : old('address') }}</textarea>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('address')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label  class="text-dark ft-medium">Add Tags</label>
                                        <select name="tags[]" id="tags" class="form-control tags-selector @error('tags') is-invalid @enderror" multiple>
                                            <option value="">Select tags</option>
                                            @foreach($tags as $tag)
                                                <option value="{{ $tag->id }}"
                                                    @isset($gig)
                                                        @if($gig->hasTag($tag->id))
                                                        selected
                                                        @endif
                                                    @endisset
                                                >{{ $tag->name }}</option>
                                            @endforeach

                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('tags')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="text-dark ft-medium">Salary</label>
                                        <input type="text" value="{{ isset($gig)? $gig->min: old('minimum_salary') }}" name="minimum_salary" placeholder="Minimum" class="form-control @error('minimum_salary') is-invalid @enderror">
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('minimum_salary')}}</strong>
                                        </span>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="text-white">.</label>
                                        <input type="text" value="{{ isset($gig)? $gig->max : old('maximum_salary') }}" name="maximum_salary" placeholder="Maximum" class="form-control @error('maximum_salary') is-invalid @enderror">
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('maximum_salary')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">{{ isset($gig)? 'Update' : 'Add' }} Gig</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
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
