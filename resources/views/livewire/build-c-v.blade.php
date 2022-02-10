<div>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
            style="width: 40% !important;">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
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
                    <div class="bg-white  rounded">
                        <div class="card d-block bg-light p-1">
                            <p class="text-success pl-1">Please Enter Your Bio</p>
                            <div class="form-group">
                                <input id="name"
                                    class="form-control border-right-0 border-left-0 rounded-0 @error('name') is-invalid @enderror "
                                    wire:model.lazy="name" type="text" name="name" placeholder="Enter Your Name">
                                @error('name') <span class="text-red-500 text-danger pl-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="Email"
                                    class="form-control border-right-0 border-left-0 rounded-0 @error('email') is-invalid @enderror "
                                    wire:model.lazy="email" type="email" name="email" placeholder="Enter Your Email">
                                @error('email') <span class="text-red-500 text-danger pl-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="Phone"
                                    class="form-control border-right-0 border-left-0 rounded-0 @error('phone') is-invalid @enderror "
                                    wire:model.lazy="phone" type="text" name="phone"
                                    placeholder="Enter Your Phone Number">
                                @error('phone') <span class="text-red-500 text-danger pl-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="Age"
                                    class="form-control border-right-0 border-left-0 rounded-0 @error('age') is-invalid @enderror "
                                    wire:model.lazy="age" type="number" name="age" placeholder="Enter Your Age">
                                @error('age') <span class="text-red-500 text-danger pl-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <textarea id="address" wire:model.lazy="address"
                                    class="form-control  @error('address') is-invalid @enderror"
                                    placeholder="Enter Your Address" name="address" rows="3"></textarea>
                                @error('address') <span class="text-red-500 text-danger pl-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            {{-- social links starts here --}}
            <li class="nav-item p-2">
                <i class="text-white fas fa-fw fa-link"></i>
                <span class="text-white ">{{ __('Enter Your Social Links') }}</span>
                <div id="" class="" aria-labelledby="headingUtilities" data-parent="#">
                    <div class="bg-white  rounded">
                        <div class="card d-block bg-light p-1">
                            <p class="text-success pl-1">Please Add Your Social Profiles</p>
                            <div class="form-group">
                                <input id="socialLinks_profile_name"
                                    class="form-control border-right-0 border-left-0 rounded-0 @error('socialLinks_profile_name') is-invalid @enderror "
                                    wire:model.lazy="socialLinks_profile_name" type="text"
                                    name="socialLinks_profile_name" placeholder="Enter profile Name">
                                @error('socialLinks_profile_name') <span
                                    class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror

                                <input id="socialLinks_profile_link"
                                    class="form-control border-right-0 border-left-0 rounded-0 @error('socialLinks_profile_link') is-invalid @enderror "
                                    wire:model.lazy="socialLinks_profile_link" type="url"
                                    name="socialLinks_profile_link" placeholder="Enter profile Link">
                                @error('socialLinks_profile_link') <span
                                    class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                            </div>
                            <center>
                                <button class="btn btn-success btn-block" wire:click="save_social_links()"
                                    type="button">Save</button>
                            </center>
                        </div>
                    </div>
                </div>
            </li>
            {{-- photo for cv start here --}}
            <li class="nav-item p-2">
                <i class="text-white fas fa-fw fa-image"></i>
                <span class="text-white">{{ __('Add Photo') }}</span>
                <div id="" class="" aria-labelledby="" data-parent="#">
                    <div class="bg-white py-2 card rounded ">
                        <h6 class="card-header collapse-header"><b>Add Photo to your CV</b></h6>

                        <div class="custom-file card-body " style="">
                            <input id="photo" class="custom-file-input @error('photo') is-invalid @enderror"
                                wire:model.lazy="photo" type="file" name="photo">
                            <label for="photo" class="custom-file-label">Choose Photo</label>
                            @error('photo') <span class="text-red-500 text-danger pl-2">{{ $message }}</span>
                            @enderror
                            <div wire:loading wire:target="photo">{{ __('Uploading...') }}</div>
                        </div>
                        {{-- <center class="card-footer"> --}}
                        {{-- <button class="btn btn-success btn-block" wire:click="save_profile_photo()" type="button">Save</button> --}}
                        {{-- </center> --}}
                    </div>
                </div>
            </li>
            {{-- projects input fields --}}
            <li class="nav-item p-2">
                <i class="fas text-white fa-fw fa-wrench"></i>
                <span class="text-white">{{ __('Add Projects') }}</span>
                <div id="" class=" " aria-labelledby="" data-parent="#">
                    <div class="card bg-white rounded">
                        <h6 class="card-header"><b>Add upto 10 Your Best projects</b></h6>
                        <div class="form-group ">
                            <input class="form-control @error('project') is-invalid @enderror "
                                wire:model.defer="project" type="text" name="project"
                                placeholder="Project You Have Build Before.." />
                            @error('project') <span class="text-red-500 text-danger pl-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <center class="card-footer p-2">
                            <button class="btn btn-success btn-block" type="button"
                                wire:click="save_project">Save</button>
                        </center>
                    </div>
                </div>
            </li>
            {{-- programming languages --}}
            <li class="nav-item p-2">
                <i class="fas text-white fa-fw fa-wrench"></i>
                <span class="text-white">{{ __('Add Coding Languages') }}</span>
                <div id="" class=" " aria-labelledby="" data-parent="#">
                    <div class="card bg-white rounded">
                        <h6 class="card-header"><b>Coding Languages You Can Work With</b></h6>
                        <div class="form-group ">
                            <textarea class="form-control @error('codingLanguages') is-invalid @enderror "
                                wire:model.lazy="codingLanguages" name="codingLanguages"
                                placeholder="Languages You Can Work With.."></textarea>
                            @error('codingLanguages') <span
                                class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
            </li>
            {{-- framwork systems --}}
            <li class="nav-item p-2">
                <i class="fas text-white fa-fw fa-wrench"></i>
                <span class="text-white">{{ __('Add Framework / Systems') }}</span>
                <div id="" class=" " aria-labelledby="" data-parent="#">
                    <div class="card bg-white rounded">
                        <h6 class="card-header"><b>Frameworks/Systems You Have Work With</b></h6>
                        <div class="form-group ">
                            <textarea class="form-control @error('frameWorkSystems') is-invalid @enderror "
                                wire:model.lazy="frameWorkSystems" name="frameWorkSystems"
                                placeholder="Frameworks/Systems You Have Work With.."></textarea>
                            @error('frameWorkSystems') <span
                                class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
            </li>
            {{-- Markup Languages --}}
            <li class="nav-item p-2">
                <i class="fas text-white fa-fw fa-wrench"></i>
                <span class="text-white">{{ __('Add Markup Languages') }}</span>
                <div id="" class=" " aria-labelledby="" data-parent="#">
                    <div class="card bg-white rounded">
                        <h6 class="card-header"><b>Enter Markup Languages You Know About</b></h6>
                        <div class="form-group ">
                            <textarea class="form-control @error('MarkupLanguages') is-invalid @enderror "
                                wire:model.lazy="MarkupLanguages" name="MarkupLanguages"
                                placeholder="Markup Languages You Know .."></textarea>
                            @error('MarkupLanguages') <span
                                class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
            </li>
            {{-- Other Skills --}}
            <li class="nav-item p-2">
                <i class="fas text-white fa-fw fa-wrench"></i>
                <span class="text-white">{{ __('Add Other Skills') }}</span>
                <div id="" class=" " aria-labelledby="" data-parent="#">
                    <div class="card bg-white rounded">
                        <h6 class="card-header"><b>Enter Other Skills You Have</b></h6>
                        <div class="form-group ">
                            <textarea class="form-control @error('OtherSkills') is-invalid @enderror "
                                wire:model.lazy="OtherSkills" name="OtherSkills"
                                placeholder="Other Skills You Know .."></textarea>
                            @error('OtherSkills') <span
                                class="text-red-500 text-danger pl-2">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
            </li>
            {{-- Education --}}
            <li class="nav-item p-2">
                <i class="fas text-white fa-fw fa-wrench"></i>
                <span class="text-white">{{ __('Add Education') }}</span>
                <div id="" class=" " aria-labelledby="" data-parent="#">
                    <div class="card bg-white rounded">
                        <h6 class="card-header"><b>Add Your Education</b></h6>
                        <div class="form-group ">
                            <textarea class="form-control @error('Education_title') is-invalid @enderror "
                                wire:model.defer="Education_title" type="text" name="Education_title"
                                placeholder="Education title i.e HSC Class 12 or SSC Class 10..."></textarea>
                            @error('Education_title') <span
                                    class="text-red-500 text-danger pl-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <textarea class="form-control @error('Education_head') is-invalid @enderror "
                                wire:model.defer="Education_head" type="text" name="Education_head"
                                placeholder="Education Heading i.e Post Graduate College Dargai..."></textarea>
                            @error('Education_head') <span
                                    class="text-red-500 text-danger pl-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <textarea class="form-control @error('Education_content') is-invalid @enderror "
                                wire:model.defer="Education_content" type="text" name="Education_content"
                                placeholder="Education Content i.e Enrolled from 2017 to 2019 Secured 2st divi..."></textarea>
                            @error('Education_content') <span
                                    class="text-red-500 text-danger pl-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <center class="card-footer p-2">
                            <button class="btn btn-success btn-block" type="button"
                                wire:click="save_education()">Add</button>
                        </center>
                    </div>
                </div>
            </li>
            {{-- Technical Support Engineert --}}
            <li class="nav-item p-2">
                <i class="fas text-white fa-fw fa-wrench"></i>
                <span class="text-white">{{ __('Technical Support Engineert') }}</span>
                <div id="" class=" " aria-labelledby="" data-parent="#">
                    <div class="card bg-white rounded">
                        <h6 class="card-header"><b>WebDevs</b></h6>
                        <div class="form-group card-body">
                            <input class="form-control @error('webDevTime') is-invalid @enderror "
                                wire:model.lazy="webDevTime" type="text" name="webDevTime"
                                placeholder="i.e March 2019 - August 2021" />
                            @error('webDevTime') <span
                                    class="text-red-500 text-danger pl-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="card bg-white rounded">
                        <h6 class="card-header"><b>Technical Support</b></h6>
                        <div class="form-group ">
                            <textarea class="form-control @error('technical_support') is-invalid @enderror "
                                wire:model.defer="technical_support" type="text" name="technical_support"
                                placeholder="Technical Support Provided To Clients"></textarea>
                            @error('technical_support') <span
                                    class="text-red-500 text-danger pl-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <center class="card-footer p-2">
                            <button class="btn btn-success btn-block" type="button"
                                wire:click="add_technical_support()">Add</button>
                        </center>
                    </div>
            </li>
            {{-- Softawre engineer intern --}}
            <li class="nav-item p-2">
                <i class="fas text-white fa-fw fa-user"></i>
                <span class="text-white">{{ __('Software Engineer') }}</span>
                <div id="" class=" " aria-labelledby="" data-parent="#">
                    <div class="card bg-white rounded">
                        <h6 class="card-header"><b>Software Engineer</b></h6>
                        <div class="form-group ">
                            <textarea class="form-control @error('software_engineer') is-invalid @enderror "
                                wire:model.defer="software_engineer" type="text" name="software_engineer"
                                placeholder="Software Engineer intern"></textarea>
                            @error('software_engineer') <span
                                    class="text-red-500 text-danger pl-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <center class="card-footer p-2">
                            <button class="btn btn-success btn-block" type="button"
                                wire:click="add_software_engineer()">Add</button>
                        </center>
                    </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small ">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle" src="core/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        <h1 class="h3 mb-0 text-gray-800">Create Your CV Now</h1>
                        <a href="{{ route('create_pdf') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                                   " src=" {{ $photo ? $photo->temporaryUrl() : asset('images/me.jpg') }}" alt="">
                                    </center>
                                    <h4 class="text-bolder text-black pt-2 text-center pb-5">
                                        <b>{{ $name }}</b>
                                    </h4>
                                </div>
                                <br>
                                <br>
                                <!-- Contact info -->
                                <div class=" pl-4">
                                    <p class="text-warning "><b>Contact Information</b></p>
                                </div>
                                <br>
                                <!-- cell phone  -->
                                <div class=" pl-4">
                                    <p class=""><b>Cell:</b><i class="pl-2"><a
                                                href="tel:{{ $phone }}">{{ $phone }}</a></i>
                                    </p>
                                </div>
                                <!--  Email  -->
                                <div class=" pl-4">
                                    <p class=" "><b>Email:</b></p>
                                    <p><i><a href="mail:{{ $email }}">{{ $email }}</a></i>
                                    </p>
                                </div>
                                <!--  Whatsapp  -->
                                <div class=" pl-4">
                                    <p class=" "><b>WhatsApp:</b></p>
                                    <p><i><a
                                                href="https://wa.me/{{ $phone }}">https://wa.me/{{ $phone }}</a></i>
                                    </p>
                                </div>
                                <!--  age  -->
                                <div class=" pl-4">
                                    <p class=" "><b>Age</b>:<i
                                            class="pl-3">{{ $age }}</i> </p>
                                </div>
                                <!--  Address  -->
                                <div class=" pl-4">
                                    <p class=" "><b>Address</b></p>
                                    <p><i>{{ $address }}</i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 rounded-lg border-1">
                                <br>
                                <br>
                                <br>
                                <div class="bg-white " style="border-radius: 20px;">
                                    <div class=" pl-4 ">
                                        <p class="text-warning pt-2"><b>SSC/HSC/University</b></p>
                                    </div>
                                    <br>
                                    <!-- School info -->
                                    @foreach ($Education as $edu)
                                        <h5 class="pl-2"><span class="">👉</span>
                                            <b>{{ $edu['title'] }}</b><br>
                                        </h5>
                                        <p class="pl-3"> <b> <i>{{ $edu['head'] }}</i></b>
                                        </p>
                                        <p class="px-2  "> 🔰 {{ $edu['content'] }} </p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-4 rounded-lg border-1">
                                <br>
                                <br>
                                <br>
                                <div class="bg-white " style="border-radius: 20px;">
                                    <div class=" pl-4 ">
                                        <p class="text-warning pt-2"><b>Career Summary</b></p>
                                    </div>
                                    <br>
                                    <!-- Technical Support -->
                                    <h5 class="pl-2"><span class="">👉</span> <b>Technical
                                            Support Engineer</b><br></h5>
                                    <p class="pl-3"> <b> <i>WebDevs</i></b></p>
                                    <h5 class="px-2 text-center"> <u>{{ $webDevTime }}</u> </h5>
                                    @foreach ($technical_supports as $ts)
                                        <p class="px-2">🔰 {{ $ts }}</p>
                                    @endforeach

                                    <!-- s/w eng info -->
                                    <h5 class="pl-2"><span class="">👉</span> <b>Software
                                            Engineer(intern)</b><br></h5>
                                    @foreach ($software_engineering as $se)
                                        <p class="px-2 text-capetalized">🔰 {{ $se }}</p>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        {{-- bottom row --}}
                        <div class="row ">
                            <div class="col-4 rounded-lg border-1 p-2">
                                <br>
                                <div class="bg-white " style="border-radius: 20px;">
                                    <p class="text-warning pt-2 pl-2"><b>Social Links</b></p>
                                    @foreach ($socialLinks as $profile)
                                        <p class="pl-2 "><b>{{ $profile['name'] }}</b><br />
                                            <small class="pl-2"><i><a
                                                        href="{{ $profile['link'] }}">{{ $profile['link'] }}</a></i></small>
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-4 rounded-lg border-1">
                                <br>
                                <div class="bg-white " style="border-radius: 20px;">
                                    <p class="text-warning pt-2 pl-2"><b>Projects</b></p>
                                    @foreach ($projects as $project)
                                        <small class="pl-2">🔰 <b>{{ $project }}</b> </small><br />
                                    @endforeach
                                </div>
                            </div>

                            <!-- last column -->
                            <div class="col-4 rounded-lg border-1">
                                <br>
                                <div class="bg-white " style="border-radius: 20px;">
                                    <div class=" pl-4 ">
                                        <p class="text-warning pt-2"><b>Professional Skills</b></p>
                                    </div>
                                    <br>
                                    <!-- Technical Support -->
                                    <h5 class="pl-2"><span class="">👉</span> <b>Coding
                                            Languages
                                        </b><br></h5>
                                    <p class="pl-3"> <b> <i>{{ $codingLanguages }}</i></b></p>
                                    <!-- s/w eng info -->
                                    <h5 class="pl-2"><span class="">👉</span>
                                        <b>Frameworks/Systems:</b><br>
                                    </h5>
                                    <p class="px-2 text-capetalized">🔰 {{ $frameWorkSystems }}
                                    </p>

                                    <h5 class="pl-2"><span class="">👉</span> <b>Markup
                                            Languages</b><br></h5>
                                    <p class="px-2 text-capetalized">🔰 {{ $MarkupLanguages }}</p>
                                    <h5 class="pl-2"><span class="">👉</span> <b>Other
                                            Skills</b><br></h5>
                                    <p class="px-2 text-capetalized">🔰 {{ $OtherSkills }}</p>


                                </div>
                            </div>

                            <!-- last row  -->
                        </div>

                    </div>

                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
    </div>
</div>
