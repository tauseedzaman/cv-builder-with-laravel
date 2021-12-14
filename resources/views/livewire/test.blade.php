<div>
    <!-- Page Wrapper -->
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
    style="width: 40% !important">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><b>{{ config('app.name') }}</b></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->


    {{-- bio for cv --}}

    <li class="nav-item p-2">
            <i class="text-white fas fa-fw fa-cog"></i>
            <span class="text-white">{{ __('Enter Your Bio Here') }}</span>
        <div id="" class="" aria-labelledby="headingTwo" data-parent="#">
            <div class="bg-white py-2  rounded">
                <div class="card d-block bg-light p-1">
                    <p class="text-success pl-1">Please Enter Your Bio</p>
                    <div class="form-group">
                        <h1>{{ $name }}</h1>
                        <input id="name" class="form-control border-right-0 border-left-0 rounded-0 @error('name') is-invalid @enderror " wire:model.lazy="name" type="text" name="name" placeholder="Enter Your Name">
                        @error('name') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <input id="Email" class="form-control border-right-0 border-left-0 rounded-0 @error('email') is-invalid @enderror " wire:model.lazy="email" type="email" name="email" placeholder="Enter Your Email">
                        @error('email') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <input id="Phone" class="form-control border-right-0 border-left-0 rounded-0 @error('phone') is-invalid @enderror " wire:model.defer="phone" type="text" name="phone" placeholder="Enter Your Phone Number">
                        @error('phone') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <input id="Age" class="form-control border-right-0 border-left-0 rounded-0 @error('age') is-invalid @enderror " wire:model.defer="age" type="number" name="age" placeholder="Enter Your Age">
                        @error('age') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <textarea id="address" wire:model.defer="address" class="form-control  @error('address') is-invalid @enderror" placeholder="Enter Your Address" name="address" rows="3"></textarea>
                        @error('address') <span class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                    </div>

                    {{-- <center> --}}
                        {{-- <button class="btn btn-success btn-block" wire:click="save_bio()" type="button">Save</button> --}}
                    {{-- </center> --}}

                </div>
            </div>
        </div>

    </li>
    {{-- end bio --}}

</ul>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                    <h1 class="h3 mb-0 text-gray-800">Create Your CV Now</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate PDF</a>
                </div>

            </div>
            <!-- /.container-fluid -->
            <div class="container-fluid ">
                <div class="container">
                    <div class="row ">
                        <div class="col-4 bg-light">
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class=" mt-3 bg-danger mx-auto" style="width: 90%;border-radius: 20px;">
                                <center>
                                    <img class="cv_img rounded-circle" width="150px" style="margin-top:-80px;height: 150px
                                   " src=" {{ asset('images/me.jpg') }}" alt="">
                                </center>
                                {{-- <h4 class="text-bolder text-black pt-2 text-center pb-5">
                                    <b>{{ $name }}</b></h4> --}}
                            </div>
                            <br>
                            <br>

</div>
