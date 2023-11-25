@extends('admin.layout.master')

@section('content')

        
        <!--end breadcrumb-->
  
            <div class="main-body">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-lg-5 border-end">
                                    @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                    @endif

                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                    <form class="job-post-from" method="POST" action="{{ route('profile.updatePassword') }}">
                                        @csrf
                                        @method('PUT')
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div class="text-start">
                                                <img src="assets/images/logo-img.png" width="180" alt="">
                                            </div>
                                            <h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
                                            <p class="text-muted">We received your reset password request. Please enter your new password!</p>
                                            <div class="mb-3 mt-5">
                                                <label class="form-label">Old Password</label>
                                                <input type="text" class="form-control" placeholder="Enter new password" id="old_password" required name="old_password"  />
                                            </div>

                                            <div class="mb-3 mt-5">
                                                <label class="form-label">New Password</label>
                                                <input type="text" class="form-control" placeholder="Enter new password" id="new_password" required name="new_password" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="text" class="form-control" placeholder="Confirm password" id="new_password_confirmation" required name="new_password_confirmation" />
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary">Change Password</button> <a href="{{ url('admin/profile') }}" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="col-lg-7">
                                    <img src="{{ asset('') }}assets/images/login-images/forgot-password-frent-img.jpg" class="card-img login-img h-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
 

@endsection

@push('after-script')

        
@endpush



