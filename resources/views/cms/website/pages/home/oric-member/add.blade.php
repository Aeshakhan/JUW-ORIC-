@extends('cms.layouts.master')

@section('content')
    <main>
        <div class="container-fluid site-width">
            <!-- START: Card Data-->
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header  justify-content-between align-items-center">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title">Add ORIC Member</h4>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('website.page.home.oric-member') }}" class="btn btn-primary float-right">← Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form method="POST" action="{{ route('website.page.home.oric-member.add.data') }}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @if ($errors->any())
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Error!</strong>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif

                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Profile Image <span class="required-class">*</span></label>
                                                    <div class="input-group">
                                                        <input type="file" name="profile_picture" accept=".jpg, .jpeg, .svg, .png">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="contact">Name</label>
                                                    <input type="text" class="form-control rounded allowNumberOnly"
                                                           id="name" name="name" placeholder="Enter Contact"
                                                           value="{{ old('name') }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="cnic">Designation</label>
                                                    <input type="text" class="form-control rounded allowNumberOnly"
                                                           id="designation" name="designation" placeholder="Enter CNIC"
                                                           value="{{ old('designation') }}">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label> Description <span class="required-class">*</span></label>
                                                    <div class="input-group">
                                            <textarea name="description" id="description" class="form-control"
                                                      placeholder="Enter Description" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mt-5">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light float-right">
                                                    Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END: Card DATA-->
        </div>
    </main>
@endsection