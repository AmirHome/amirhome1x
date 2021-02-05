@extends('layouts.master')

@section('page_title', 'Amir Hosseinzadeh | Senior PHP, Android Developer, MySQL Administrator')

@section('head_extra')
    <!-- head_extra -->
@endsection

@section('javascript_extra')
    <!-- javascript_extra -->
@endsection

@section('content')
    <main>

        <div class="section no-pad-bot center">

            <br>
           <h3 class="center header">     Please Read my C.V.     </h3>
            <div class="card-panel">
                <div id="DivResume">
                    <img id="ShotResume" src="{{url('/assets')}}/images/shot_resume.png" />
                    <div id="ButResume" class="row center cv">
                        <a title="Amir's Resume (CV) Software-Engineer-Web-Android-Developer"
                           href="./public/uploads/senior-php-developer-mobile-developer-and-mysql-administrator-amir-hosseinzadeh-cv.pdf"
                           class="btn-large waves-effect waves-light orange lighten-2" target="_blank">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            Get my Resume..</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- technology -->
        <h3 class="center header">With latest web technologies</h3>
        <br>
        {{-- PHP Laravel MySQL --}}
        <div class="row">

            <div class="col s12 m4">
                <div class="card-panel">
                    <a target="_blank" href="http://php.net/">
                        <img alt="php-7" src="{{url('/assets')}}/images/php-7-icon.gif" class=""
                             data-html="true" data-position="top" data-tooltip=""><b>PHP</b></a>

                    <span class=""> is a server-side scripting language designed for web development but also used as a general-purpose programming language.<br><br><br><br>
        </span>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card-panel">
                    <a target="_blank" href="http://laravel.com/">
                        <img alt="Laravel" src="{{url('/assets')}}/images/Laravel-icon.gif"><b>Laravel</b></a>

                    <span class=""> is a free, open-source PHP framework, created by <a
                                href="https://twitter.com/taylorotwell" target="_blank">Taylor Otwell</a> and intended for the development of web applications following the model–view–controller architectural pattern.<br><br><br>
        </span>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card-panel">
                    <a target="_blank" href="https://www.mysql.com/">
                        <img alt="MySQL" src="{{url('/assets')}}/images/MySQL-icon.gif"><b>MySQL</b></a>

                    <span class=""> is an open-source relational database management system. Its name is a combination of 'My', the name of co-founder <a
                                href="https://twitter.com/montywi?lang=en" target="_blank">Michael Widenius</a>' daughter, and 'SQL', the abbreviation for Structured Query Language.
        </span>
                </div>
            </div>
        </div>
        {{-- FireBase Android Flutter --}}
        <div class="row">

            <div class="col s12 m4">
                <div class="card-panel">
                    <a target="_blank" href="https://www.firebase.com/">
                        <img alt="firebase" src="{{url('/assets')}}/images/firebase-icon.gif"><b>Firebase</b></a>


                    <span class=""> is a cloud services provider and backend as a service company based in San Francisco, California. The company makes a number of products for software developers building mobile or web applications.<br><br>
        </span>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card-panel">
                    <a target="_blank" href="https://www.android.com/">
                        <img alt="android" src="{{url('/assets')}}/images/android-icon.gif"><b>Android</b></a>

                    <span class=""> software development is the process by which new applications are created for the Android operating system. Applications are usually developed in Java programming language using the Android software development kit, but other development environments are also available.
        </span>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card-panel">
                    <a target="_blank" href="https://flutter.dev/">
                        <img alt="Flutter" src="{{url('/assets')}}/images/flutter-icon.png">
                        <b>Flutter</b>
                    </a>
                    <span class=""> is an open-source UI software development kit created by <a target="_blank" href="https://en.wikipedia.org/wiki/Google">Google</a>. It is used to develop applications for <b>Android</b>, <b>iOS</b>, Linux, Mac, Windows, Google Fuchsia and the web from a single codebase.
                        <br><br><br>
                    </span>
                </div>
            </div>




        </div>
        {{-- HTML CSS JavaScript JQuery --}}
        <div class="row">

            <div class="col s12 m3">
                <div class="card-panel">
                    <a target="_blank" href="https://www.w3.org/html/">
                        <img alt="Html5" src="{{url('/assets')}}/images/Html5-icon.gif"><b>Html5</b></a>

                    <span class=""> is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current version of the HTML standard.<br>
        </span>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-panel">
                    <a target="_blank" href="https://www.w3.org/TR/1999/REC-CSS1-19990111">
                        <img alt="CSS3" src="{{url('/assets')}}/images/CSS3-icon.gif"><b>CSS</b></a>

                    <span class=""> (Cascading Style Sheets) is a style sheet language used for describing the presentation of a document written in a markup language.<br><br>
        </span>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-panel">
                    <a target="_blank" href="https://www.javascript.com/">
                        <img alt="JavaScript" src="{{url('/assets')}}/images/JavaScript-icon.gif"><b>JavaScript</b></a>


                    <span class=""> is a high-level, dynamic, untyped, and interpreted programming language. It has been standardized in the ECMAScript language specification.
        </span>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-panel">
                    <a target="_blank" href="https://jquery.com/">
                        <img alt="jQuery" src="{{url('/assets')}}/images/jQuery-icon.gif"><b>jQuery</b></a>

                    <span class=""> is a cross-platform JavaScript library designed to simplify the client-side scripting of HTML. jQuery is the most popular JavaScript library in use today.
                        <br>
                    </span>
                </div>
            </div>

        </div>

        <h3 class="center header">What can we do for your company?</h3>
        <br>
        <div class="row outer">

            <div class="col s12 m6 l3 inner">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" alt="Web Application WebSite Mobile App"
                             src="{{url('/assets')}}/images/WebApplication-WebSite-MobileApp.png">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title grey-text text-darken-4">
                            Web Development
                        </h4>
                        <p>From simple and informative websites to complex websites that offer extensive <b>web</b> site
                            management.</p>
                        <p>(Partly) automate your business process and transfer it to the internet.</p>
                    </div>

                </div>
            </div>
            <div class="col s12 m6 l3 inner">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" alt="Mobile Application Android, IOS"
                             src="{{url('/assets')}}/images/Mobile-Application-Android-IOS.png">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title grey-text text-darken-4">
                            Mobile Application
                        </h4>
                        <p>Enable customers to reach you by phone as well through responsive design, web apps or Android
                            or IOS <b>Mobile Applications</b>.</p>
                        <p>We offers various possibilities to properly represent your company on mobile devices.
                        </p>
                        <p class="hide">
                            If you are looking for a suitable mobile solution, let us inform you about the various
                            solutions and possibilities our company can offer.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 inner">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" alt="SEO Specialist"
                             src="{{url('/assets')}}/images/SEO-Specialist.png">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title grey-text text-darken-4">SEO</h4>

                        <p>You need someone who is passionate about <b>SEO</b> and Digital Marketing to help manage our
                            growing roster of clients.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 inner">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" alt="Suitable Hosting Solutions"
                             src="{{url('/assets')}}/images/Suitable-Hosting-Solutions.png">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title grey-text text-darken-4">
                            Hosting
                        </h4>
                        <p>When delivering a web site, web shop, web application, suitable hosting solutions are very
                            important. Every project has different hosting needs.
                        </p>
                        <p class="hide">
                            We work with a number of regular partners, which enables us to offer you a proper solution
                            every single time.
                        </p>
                        <p> We can arrange anything: from a small <b>host</b> to a dedicated service with an extensive
                            Service Level Agreement.</p>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
