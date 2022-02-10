<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
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
                       " src=" {{ $photo ?? '' ? $photo ?? ('')->temporaryUrl() : asset('images/me.jpg') }}" alt="">
                        </center>
                        <h4 class="text-bolder text-black pt-2 text-center pb-5">
                            <b>{{ $name ?? '' }}</b>
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
                                    href="tel:{{ $phone ?? '' }}">{{ $phone ?? '' }}</a></i>
                        </p>
                    </div>
                    <!--  Email  -->
                    <div class=" pl-4">
                        <p class=" "><b>Email:</b></p>
                        <p><i><a href="mail:{{ $email ?? '' }}">{{ $email ?? '' }}</a></i>
                        </p>
                    </div>
                    <!--  Whatsapp  -->
                    <div class=" pl-4">
                        <p class=" "><b>WhatsApp:</b></p>
                        <p><i><a href="https://wa.me/{{ $phone ?? '' }}">https://wa.me/{{ $phone ?? '' }}</a></i>
                        </p>
                    </div>
                    <!--  age  -->
                    <div class=" pl-4">
                        <p class=" "><b>Age</b>:<i class="pl-3">{{ $age ?? '' }}</i> </p>
                    </div>
                    <!--  Address  -->
                    <div class=" pl-4">
                        <p class=" "><b>Address</b></p>
                        <p><i>{{ $address ?? '' }}</i>
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
                        @foreach ($Education ?? '' as $edu)
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
                        @foreach ($technical_supports ?? "" as $ts)
                            <p class="px-2">🔰 {{ $ts }}</p>
                        @endforeach

                        <!-- s/w eng info -->
                        <h5 class="pl-2"><span class="">👉</span> <b>Software
                                Engineer(intern)</b><br></h5>
                        @foreach ($software_engineering ?? "" as $se)
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
</body>

</html>
