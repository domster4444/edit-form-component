@extends('admin.layouts.applicationlayout')
{{--{{dd($applications[0]->stream->name)}}--}}
@section('content')
    <div class="card my-5 p-4">
        <h2 class="px-1 text-center">Application View</h2>
        <hr>
        <div class="card-body" >
            <div class="personal-info">
                <h1 class="text-center">Personal Information</h1>

                <div class="row">
                    <div class="col">
                        <label for="firstname" class="form-label col  mx-1">First Name</label>
                        <input type="text" id="firstname" value="{{ $application->firstname }}" class="form-control col"
                               disabled>
                    </div>
                    <div class="col">
                        <label for="middlename" class="form-label col  mx-1">Middle Name</label>
                        <input type="text" id="middlename" value="{{ $application->middlename }}"
                               class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label col  mx-1">Last Name</label>
                        <input type="text" id="lastname" value="{{ $application->lastname }}" class="form-control col"
                               disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="" class="form-label col  mx-1">Email Address</label>
                        <input type="text" value="{{ $application->email_address }}" class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="" class="form-label col  mx-1">Mobile Number</label>
                        <input type="text" value="{{ $application->cell }}" class="form-control col" disabled>
                    </div>
                </div>

                <div class=" row col-2 mt-3">
                    <lebel class="form-label col">Gender</lebel>
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled"
                               disabled>
                        <label class="form-check-label" for="flexRadioDisabled">
                            Male
                        </label>
                    </div>
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                               id="flexRadioCheckedDisabled" checked disabled>
                        <label class="form-check-label" for="flexRadioCheckedDisabled">
                            Female
                        </label>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <label for="firstname" class="form-label col  mx-1">Province</label>
                        <input type="text" id="firstname" value="{{ $application->province }}" class="form-control col"
                               disabled>
                    </div>
                    <div class="col">
                        <label for="middlename" class="form-label col  mx-1">District</label>
                        <input type="text" id="middlename" value="{{ $application->district }}"
                               class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label col  mx-1">Municipality</label>
                        <input type="text" id="lastname" value="{{ $application->municipality }}" class="form-control col"
                               disabled>
                    </div>
                </div>
            </div>
            <hr>
            <h1 class="text-center">Guardian's Information</h1>
            <div class="father-info">
                <h5>Father's Information</h5>

                <div class="row">
                    <div class="col">
                        <label for="firstname" class="form-label col  mx-1">First Name</label>
                        <input type="text" id="firstname" value="{{ $application->father_firstname }}" class="form-control col"
                               disabled>
                    </div>
                    <div class="col">
                        <label for="middlename" class="form-label col  mx-1">Middle Name</label>
                        <input type="text" id="middlename" value="{{ $application->father_middlename }}"
                               class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label col  mx-1">Last Name</label>
                        <input type="text" id="lastname" value="{{ $application->father_lastname }}" class="form-control col"
                               disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="" class="form-label col  mx-1">Email Address</label>
                        <input type="text" value="{{ $application->father_email }}" class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="" class="form-label col  mx-1">Mobile Number</label>
                        <input type="text" value="{{ $application->father_cell }}" class="form-control col" disabled>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="firstname" class="form-label col  mx-1">Province</label>
                        <input type="text" id="firstname" value="{{ $application->father_province }}" class="form-control col"
                               disabled>
                    </div>
                    <div class="col">
                        <label for="middlename" class="form-label col  mx-1">District</label>
                        <input type="text" id="middlename" value="{{ $application->father_district }}"
                               class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label col  mx-1">Municipality</label>
                        <input type="text" id="lastname" value="{{ $application->father_municipality }}" class="form-control col"
                               disabled>
                    </div>
                </div>
            </div>
            <div class="mother-info mt-4">
                <h5>Mother's Information</h5>

                <div class="row">
                    <div class="col">
                        <label for="firstname" class="form-label col  mx-1">First Name</label>
                        <input type="text" id="firstname" value="{{ $application->mother_firstname }}" class="form-control col"
                               disabled>
                    </div>
                    <div class="col">
                        <label for="middlename" class="form-label col  mx-1">Middle Name</label>
                        <input type="text" id="middlename" value="{{ $application->mother_middlename }}"
                               class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label col  mx-1">Last Name</label>
                        <input type="text" id="lastname" value="{{ $application->mother_lastname }}" class="form-control col"
                               disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="" class="form-label col  mx-1">Email Address</label>
                        <input type="text" value="{{ $application->mother_email }}" class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="" class="form-label col  mx-1">Mobile Number</label>
                        <input type="text" value="{{ $application->mother_cell }}" class="form-control col" disabled>
                    </div>
                </div>

                <div class="row mt-3 mb-5">
                    <div class="col">
                        <label for="firstname" class="form-label col  mx-1">Province</label>
                        <input type="text" id="firstname" value="{{ $application->mother_province }}" class="form-control col"
                               disabled>
                    </div>
                    <div class="col">
                        <label for="middlename" class="form-label col  mx-1">District</label>
                        <input type="text" id="middlename" value="{{ $application->mother_district }}"
                               class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label col  mx-1">Municipality</label>
                        <input type="text" id="lastname" value="{{ $application->mother_municipality }}" class="form-control col"
                               disabled>
                    </div>
                </div>
            </div>
            <div class="local-info mt-4">
                <h5 >Local Guardian's Information</h5>

                <div class="row">
                    <div class="col">
                        <label for="firstname" class="form-label col  mx-1">First Name</label>
                        <input type="text" id="firstname" value="{{ $application->local_firstname }}" class="form-control col"
                               disabled>
                    </div>
                    <div class="col">
                        <label for="middlename" class="form-label col  mx-1">Middle Name</label>
                        <input type="text" id="middlename" value="{{ $application->local_middlename }}"
                               class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label col  mx-1">Last Name</label>
                        <input type="text" id="lastname" value="{{ $application->local_lastname }}" class="form-control col"
                               disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="" class="form-label col  mx-1">Email Address</label>
                        <input type="text" value="{{ $application->local_email }}" class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="" class="form-label col  mx-1">Mobile Number</label>
                        <input type="text" value="{{ $application->local_cell }}" class="form-control col" disabled>
                    </div>
                </div>

                <div class="row mt-3 mb-5">
                    <div class="col">
                        <label for="firstname" class="form-label col  mx-1">Province</label>
                        <input type="text" id="firstname" value="{{ $application->local_province }}" class="form-control col"
                               disabled>
                    </div>
                    <div class="col">
                        <label for="middlename" class="form-label col  mx-1">District</label>
                        <input type="text" id="middlename" value="{{ $application->local_district }}"
                               class="form-control col" disabled>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label col  mx-1">Municipality</label>
                        <input type="text" id="lastname" value="{{ $application->local_municipality }}" class="form-control col"
                               disabled>
                    </div>
                </div>
            </div>
            <hr>
            <div class="scooling_info">
                <h1 class="text-center">Education Details</h1>
                <h5>SEE Details:</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>As</th>
{{--                            <th>Board Name</th>--}}
                            <th>School Name</th>
                            <th>Year</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $application->see_name }}</td>
{{--                            <th>{{ $application-> }}</th>--}}
                            <td>{{ $application->see_school }}</td>
                            <td>{{ $application->see_year }}</td>
                            <td>{{ $application->see_grade }}</td>
                        </tr>
                    </tbody>
                </table>

                <h5>NEB Details:</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>As</th>
{{--                            <th>Board Name</th>--}}
                            <th>School Type</th>
                            <th>Year</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $application->neb_name }}</td>
                            <th>{{ $application->nebschool_type }}</th>
{{--                            <td>{{ $application}}</td>--}}
                            <td>{{ $application->neb_year }}</td>
                            <td>{{ $application->see_grade }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
@endsection


@section('js')

@endsection


