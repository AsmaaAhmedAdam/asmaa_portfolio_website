@extends('layouts.app')
@section('content')
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>ABOUT <span>ME</span></h1>
    <span class="title-bg">Resume</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Personal Info Starts -->
            <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal info</h3>
                    </div>

                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">first name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->first_name}}</span> </li>
                            <li> <span class="title">last name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->last_name}}</span> </li>
                            <li> <span class="title">Age :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->age}}</span> </li>
                            <li> <span class="title">Nationality :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->nationality}}</span> </li>
                            <li> <span class="title">Freelance :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->freelance}}</span> </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Address :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->address}}</span> </li>
                            <li> <span class="title">phone :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->Phone}}</span> </li>
                            <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->email}}</span> </li>
                            <li> <span class="title">Linked In :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->linkedin}}</span> </li>
                            <li> <span class="title">langages :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->langages}}</span> </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-3">
                        <a class="button" href="#">
                            <span class="button-text">Download CV</span>
                            <span class="button-icon fa fa-download"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Personal Info Ends -->
            <!-- Boxes Starts -->
            <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">{{@$getrecord[0]->years_of_experience}}</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">years of <span class="d-block">experience</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">{{@$getrecord[0]->completed_projects}}</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">projects</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">{{@$getrecord[0]->happy_customers}}</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span class="d-block">customers</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">{{@$getrecord[0]->awards_won}}</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">awards <span class="d-block">won</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Boxes Ends -->
        </div>
        <hr class="separator">
        <!-- Skills Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p98">
                    <span>{{@$getrecord[0]->html}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">HTML</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p90">
                    <span>{{@$getrecord[0]->css}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">CSS</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p98">
                    <span>{{@$getrecord[0]->bootstrab}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Bootstrab</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p66">
                    <span>{{@$getrecord[0]->ajax}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Ajax</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p80">
                    <span>{{@$getrecord[0]->javascript}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">JavaScript</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p60">
                    <span>{{@$getrecord[0]->jquery}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jQuery</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p98">
                    <span>{{@$getrecord[0]->php}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">PHP</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p95">
                    <span>{{@$getrecord[0]->my_sql}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">SQL</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p50">
                    <span>{{@$getrecord[0]->plsql}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">PLSQL</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p95">
                    <span>{{@$getrecord[0]->laravel_framework}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Laravel
                    framework</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p99">
                    <span>{{@$getrecord[0]->wordpress}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">WordPress</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p70">
                    <span>{{@$getrecord[0]->java}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Java</h6>
            </div>
        </div>
        <!-- Skills Ends -->
        <hr class="separator mt-1">
        <!-- Experience & Education Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience <span>&</span> Education</h3>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">{{@$getrecord[0]->year_of_experience}}</span>
                            <h5 class="poppins-font text-uppercase">{{@$getrecord[0]->title}} <span class="place open-sans-font">{{@$getrecord[0]->sub_title}}</span></h5>
                            <p class="open-sans-font">{{@$getrecord[0]->description}} </p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2022 - 2023</span>
                            <h5 class="poppins-font text-uppercase">Backend Web Developer <span class="place open-sans-font">PrimeTag</span></h5>
                            <p class="open-sans-font">I have been working as Backend-Laravel with
                                group of developers in PrimeTag company.
                                Developing admin dashboard using Laravel
                                Framework .
                                Hands with databases MySQL, Designing and
                                developing REST API .
                                I focused in object-oriented PHP oop & mvc.</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2021 - 2022</span>
                            <h5 class="poppins-font text-uppercase">Full Stack Web Developer <span class="place open-sans-font">Freelance</span></h5>
                            <p class="open-sans-font">I have been working as freelance Full-stack
                                Developer .
                                Developing front end website architecture .
                                Designing user interactions on web pages.
                                Developing back end website applications.
                                Creating servers and databases for
                                functionality.
                                </p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2020 - 2021</span>
                            <h5 class="poppins-font text-uppercase">Full Stack Web Developer <span class="place open-sans-font">Samak.com</span></h5>
                            <p class="open-sans-font">I have been working as Full Stack Web
                                Developer-WordPress with group of
                                developers in Samak.com company.
                                developing and creating custom plugins based
                                on company requirements.
                                developing and responsibility to ensure the
                                website is build is functional, responsive,
                                aesthetically pleasing, and accessible to all
                                users.
                                Writing, testing, and debugging code.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2020</span>
                            <h5 class="poppins-font text-uppercase">Bachelor Degree <span class="place open-sans-font">Arab Open University</span></h5>
                            <p class="open-sans-font">Bachelor of (ITC) Computer Science</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-leanpub"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2021</span>
                            <h5 class="poppins-font text-uppercase">Courses <span class="place open-sans-font">EDRAAK</span></h5>
                            <p class="open-sans-font">International Computer Driving License ICDL</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-leanpub"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2021</span>
                            <h5 class="poppins-font text-uppercase">Courses <span class="place open-sans-font">اكاديمية دله للعمل التطوعي</span></h5>
                            <p class="open-sans-font">Website Design Programming HTML ET CSS .</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-leanpub"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2021</span>
                            <h5 class="poppins-font text-uppercase">Courses <span class="place open-sans-font">Teracourse</span></h5>
                            <p class="open-sans-font">PHP Developer</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Experience & Education Ends -->
    </div>
</section>
<!-- Main Content Ends -->

@endsection
