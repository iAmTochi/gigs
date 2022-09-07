@extends('layouts.admin')

@section('content')

    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Edit A Job Post</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">Post Job</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Post Job</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row" action="{{ route('jobs.update', $job->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="row">

                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job Title</label>
                                                <input type="text" name="title" value="{{ $job->title  }}" class="form-control rounded @error('title') is-invalid @enderror" placeholder="Title">
                                                <span class="invalid-feedback" role="alert">
																<strong>{{$errors->first('title')}}</strong>
															</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job Description</label>
                                                <textarea class="form-control summernote rounded @error('description') is-invalid @enderror" name="description"  placeholder="Job Description">{{ $job->job_summary }}</textarea>
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('description')}}</strong>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job Functions</label>
                                                <select class="form-control rounded @error('job_function') is-invalid @enderror" name="job_function">
                                                    <option value="">Select a Job Function</option>
                                                    @foreach($jobFunctions as $jobFunction)
                                                        <option value="{{ $jobFunction->id }}"
                                                                @isset($job)
                                                                @if($jobFunction->id === $job->job_function_id)
                                                                selected
                                                                @endif
                                                                @endisset
                                                        >{{ $jobFunction->name }}</option>
                                                    @endforeach

                                                </select>
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('job_function')}}</strong>
															</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Industry</label>
                                                <select class="form-control rounded @error('industry') is-invalid @enderror" name="industry">
                                                    <option value="">Select a Job Industry</option>
                                                    @foreach($industries as $industry)
                                                        <option value="{{ $industry->id }}"
                                                                @isset($job)
                                                                @if($industry->id === $job->industry_id)
                                                                selected
                                                                @endif
                                                                @endisset
                                                        >{{ $industry->name }}</option>
                                                    @endforeach

                                                </select>
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('industry')}}</strong>
															</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job Type</label>
                                                <select class="form-control rounded @error('work_type') is-invalid @enderror" name="work_type">
                                                    <option value="">Select a Job Type</option>
                                                    @foreach($workTypes as $workType)
                                                        <option value="{{ $workType->id }}"
                                                                @isset($job)
                                                                @if($workType->id === $job->work_type_id)
                                                                selected
                                                                @endif
                                                                @endisset
                                                        >{{ $workType->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('work_type')}}</strong>
															</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job Level</label>
                                                <select class="form-control rounded @error('job_level') is-invalid @enderror" name="job_level">
                                                    <option value="">Select a Job Level</option>
                                                    @foreach($jobLevels as $jobLevel)
                                                        <option value="{{ $jobLevel->id }}"
                                                                @isset($job)
                                                                @if($jobLevel->id === $job->job_level_id)
                                                                selected
                                                                @endif
                                                                @endisset
                                                        >{{ $jobLevel->name }}</option>
                                                    @endforeach

                                                </select>
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('job_level')}}</strong>
															</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Experience</label>

                                                <select class="form-control rounded @error('experience') is-invalid @enderror" name="experience">
                                                    <option value="">Select the Minimum Experience</option>
                                                    @foreach($experiences as $experience)
                                                        <option value="{{ $experience->id }}"
                                                                @isset($job)
                                                                @if($experience->id === $job->experience)
                                                                selected
                                                                @endif
                                                                @endisset
                                                        >{{ $experience->year }}</option>
                                                    @endforeach
                                                </select>
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('experience')}}</strong>
															</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Minimum Qualification</label>
                                                <select class="form-control rounded @error('qualification') is-invalid @enderror" name="qualification">
                                                    <option value="">Select the Minimum Qualification</option>
                                                    @foreach($qualifications as $qualification)
                                                        <option value="{{ $qualification->id }}"
                                                                @isset($job)
                                                                @if($qualification->id === $job->min_qualification)
                                                                selected
                                                                @endif
                                                                @endisset
                                                        >{{ $qualification->name }}</option>
                                                    @endforeach

                                                </select>
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('qualification')}}</strong>
															</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Expected Monthly Salary(Gross)</label>
                                                <select class="form-control rounded @error('expected_salary') is-invalid @enderror" name="expected_salary">
                                                    <option value="">Choose Expected Monthly Salary(Gross)</option>
                                                    @foreach($salaries as $salary)
                                                        <option value="{{ $salary->id }}"
                                                                @isset($job)
                                                                @if($salary->id === $job->monthly_salary)
                                                                selected
                                                                @endif
                                                                @endisset
                                                        >{{ $salary->range }}</option>
                                                    @endforeach

                                                </select>
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('expected_salary')}}</strong>
															</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Gender</label>
                                                <select class="form-control rounded  @error('gender') is-invalid @enderror" name="gender">
                                                    <option value="M & F" @if($job->gender === 'Both') selected @endif>Male and Female</option>
                                                    <option value="M" @if($job->gender === 'M') selected @endif>Male Only</option>
                                                    <option value="F" @if($job->gender === 'F') selected @endif>Female Only</option>
                                                </select>
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('gender')}}</strong>
															</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">N0. of Opening</label>
                                                <input type="number" value="{{ $job->openings }}" name="opening" class="form-control rounded @error('opening') is-invalid @enderror" placeholder="E.g 5">
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('opening')}}</strong>
															</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Application Deadline</label>
                                                <input type="date" value="{{ $job->feature_days }}" name="deadline" class="form-control rounded @error('deadline') is-invalid @enderror" placeholder="dd-mm-yyyy">
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('deadline')}}</strong>
															</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">State</label>
                                                <select class="form-control rounded @error('state') is-invalid @enderror" name="state">
                                                    <option value="">Select a State</option>
                                                    @foreach($states as $state)
                                                        <option value="{{ $state->id }}"
                                                                @isset($job)
                                                                @if($state->id === $job->state)
                                                                selected
                                                                @endif
                                                                @endisset
                                                        >{{ $state->state_name }}</option>
                                                    @endforeach

                                                </select>
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('state')}}</strong>
															</span>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Update Job</button>
                                            </div>
                                        </div>

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


    </div>


@endsection
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/36sx8xuffx9sspexlaoh2wizbah5jr2o3ph5dffp7iyd8mtq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


@endsection
@section('scripts')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
    {{--	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>--}}
    {{--	<script>--}}
    {{--		$(document).ready(function() {--}}
    {{--			$('.summernote').summernote({--}}
    {{--				placeholder: 'Job Description',--}}
    {{--				tabsize: 2,--}}
    {{--				height: 200,--}}
    {{--			});--}}
    {{--		});--}}
    {{--	</script>--}}

@endsection
