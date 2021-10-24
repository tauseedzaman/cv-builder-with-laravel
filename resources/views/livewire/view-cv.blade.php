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
                   " src="{{ asset("images/me.jpg") }}" alt="">
             </center>
             <h4 class="text-bolder text-black pt-2 text-center pb-5"><b>{{ $bio ? $bio->name : "Tauseed Zaman" }}</b></h4>
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
             <p class=""><b>Cell:</b><i class="pl-2"><a href="tel:{{ $bio ? $bio->phone : "+923429382554" }}">{{ $bio ? $bio->phone : "+923429382554" }}</a></i></p>
          </div>
          <!--  Email  -->
          <div class=" pl-4">
             <p class=" "><b>Email:</b></p>
             <p><i><a href="mail:{{ $bio ? $bio->email : "taused@test.com" }}">{{ $bio ? $bio->email : "tauseedzaman@test.com" }}</a></i></p>
          </div>
          <!--  Whatsapp  -->
          <div class=" pl-4">
             <p class=" "><b>WhatsApp:</b></p>
             <p><i><a href="https://wa.me/{{ $bio ? $bio->phone : "+923429382554" }}">https://wa.me/{{ $bio ? $bio->phone : "+923429382554" }}</a></i></p>
          </div>
          <!--  Whatsapp  -->
          <div class=" pl-4">
             <p class=" "><b>Facebook</b></p>
             <p><i><a href="https://web.facebook.com/t
owseed.zaman/">https://web.facebook.com/t
owseed.zaman/</a></i></p>
          </div>
        <!--  age  -->
        <div class=" pl-4">
            <p class=" "><b>Age</b>:<i class="pl-3">{{ $bio ? $bio->age: "25" }}</i> </p>
        </div>
          <!--  Address  -->
          <div class=" pl-4">
             <p class=" "><b>Address</b></p>
             <p><i>{{ $bio ? $bio->address: "dargai , District MalakandDistrict MalakandDistrict Malakand, Pakistan" }}</i></p>
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
             <h5 class="pl-2"><span class="">👉</span> <b>SSC Class 10</b><br></h5>
             <p class="pl-3"> <b> <i>Hight School Wartair, District Malakand</i></b></p>
             <p class="px-2  "> 🔰 Enrolled from 2011 to 2016 Secured 2st division 62% out of 100% in exams Participated in GHS Wartiar </p>
             <!-- HSC info -->
             <h5 class="pl-2"><span class="">👉</span> <b>HSC Class 12</b><br></h5>
             <p class="pl-3"> <b> <i>Post Graduate College
                Dargai, Malakand</i></b>
             </p>
             <p class="px-2  "> 🔰 Enrolled from 2017
                to 2019 Secured 2st
                division 60% out of
                100% in board exams
             </p>
             <!-- HSC info -->
             <h5 class="pl-2"><span class="">👉</span> <b>University</b><br></h5>
             <p class="pl-3"> <b> <i>University Of
                Malakand (BS in
                computer science)</i></b>
             </p>
             <p class="px-2  "> 🔰 Enrolled from 2019 Currently in 5<sup>th</sup> semester </p>
             <p class="px-2 "> 🔰 Current CGPA <b>3.59</b> semester </p>


          </div>
       </div>

       <!-- last column -->
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
             <h5 class="pl-2"><span class="">👉</span> <b>Technical Support Engineer(Resigned)</b><br></h5>
             <p class="pl-3"> <b> <i>WebDevs</i></b></p>
             <h5 class="px-2 text-center"> <u>March 2019 - August 2021</u>  </h5>
             <p class="px-2">🔰 Providing Technical Support to clients</p>
             <p class="px-2 text-capetalized">🔰 Creating custom front-end with <b>HTML/CSS/JS</b></p>
             <p class="px-2 text-capetalized">🔰 custom back-end with <b>PHP</b></p>
             <p class="px-2 text-capetalized">🔰 back-end with<b>laravel</b></p>
             <p class="px-2 text-capetalized">🔰 fixing <b>security</b> issues</p>
             <p class="px-2 text-capetalized">🔰 Full <b>customization</b> of current system</p>
             <p class="px-2 text-capetalized">🔰 Fixing bugs in the current system code</p>
             <p class="px-2 text-capetalized">🔰 Web Automation</p>

             <!-- s/w eng info -->
             <h5 class="pl-2"><span class="">👉</span> <b>Software Engineer(intern)</b><br></h5>
             <p class="px-2 text-capetalized">🔰 Fixed Bugs Acceptance Testing</p>
             <p class="px-2 text-capetalized">🔰 Automated tests with pyautogui and selenium
             <p class="px-2 text-capetalized">🔰 Web Scraping</p>

       </div>
       </div>


       <div class="row ">
       <div class="col-4 bg-light">

       </div>
       <div class="col-4 rounded-lg border-1">
          <br>
          <div class="bg-white " style="border-radius: 20px;">
       <p class="text-warning pt-2 pl-2"><b>project</b></p>
              <h5 class="pl-2"><span class="">👉</span> <b>github</b><br></h5>
             <p class="pl-3"> <b> <i><a href="https://github.com/tauseedzaman/">https://github.com/tauseedzaman/</a></i></b></p>
             <br>
             <!-- projects info -->
             <p class="px-2  "> 🔰 Password-generator’s,GPA calculator, Hospital management system, Auto-Facebook Posting, Number-writer, laravel-blog, Be math master, javascript repeater, Automate-input fields etc....   </p>
          <p class="pl-2" >🔰 Hospital Management System
          <a class="pl-2"  href="https://github.com/tauseedzaman/hospitalMS/">https://github.com/tauseedzaman/hospitalMS/</a></p>

            <p class="pl-2" >🔰 Password Generator
          <a class="pl-2" href="https://github.com/tauseedzaman/password/">https://github.com/tauseedzaman/hospitalMS/</a></p>

            <p class="pl-2" >🔰 JavaScript Repeator
             <br>
          <a class="pl-2"  href="https://github.com/tauseedzaman/repeater-in-javascript/">https://github.com/tauseedzaman/Repeater-in-javascript/</a></p>



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
             <h5 class="pl-2"><span class="">👉</span> <b>Coding Languages
</b><br></h5>
             <p class="pl-3"> <b> <i>Php, javascript, SQL, python, C++
,bash, Batch </i></b></p>
             <!-- s/w eng info -->
             <h5 class="pl-2"><span class="">👉</span> <b>Frameworks/Systems:</b><br></h5>
             <p class="px-2 text-capetalized">🔰 Bootstrap, Tailwind,
Sass, Jquery, Angularjs, Vue-js, ES6,
Alpine-js, Laravel,
Laravel-livewire,numpy, Pyautogui, beatifullsoup, selenium,  ...
</p>

<h5 class="pl-2"><span class="">👉</span> <b>Markup Languages</b><br></h5>
             <p class="px-2 text-capetalized">🔰 HTML5, CSS3</p>
<h5 class="pl-2"><span class="">👉</span> <b>Other Skills</b><br></h5>
             <p class="px-2 text-capetalized">🔰 Data Structure, Problem
Analysis, and Solving, working with SDLC etc..
</p>


       </div>
       </div>





            <!-- last row  -->
    </div>
