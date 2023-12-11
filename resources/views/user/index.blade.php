{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in to user dashboard!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Multi Step Form</title>
  <meta name="description" content="">
<meta name="keywords" lang="de" content="">


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="{{ asset('usersassets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('usersassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('usersassets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('usersassets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('usersassets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('usersassets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('usersassets/css/style.css') }}" rel="stylesheet">



</head>

<body>





  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">


    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Check your <span>eligibility.</span></h2>
                <p class="multi-step-decription">Is your business eligible for <span>R&D Tax Credits?</span></p>

                <form id="msform" action="{{ route('submit-form') }}" method="post">
                    @csrf
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <br>

                    @foreach ($groupedQuestions as $step => $questionsPair)
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-7">
                                        <h2 class="fs-title">
                                            <span>Step {{ $step + 1 }} of {{ count($groupedQuestions) }}</span> - Overview of your business
                                        </h2>
                                        <div class="form-step-row">
                                            @foreach ($questionsPair as $question)
                                                <p class="step-1-para">→ {{ $question->text ?? "" }}
                                                    <span class="gfield_required gfield_required_asterisk"></span></p>

                                                <div class="radio-btn-collections d-flex">
                                                    <ul>
                                                        @foreach ($question->options as $option)
                                                            <li>
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" name="{{ $question->id }}" value="{{ $option->id }}" id="option{{ $option->id }}" />
                                                                    <label for="option{{ $option->id }}">{{ $option->option_values ?? "" }}</label>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @if ($step < count($groupedQuestions) - 1)
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                @else
                                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                                @endif
                            </div>
                        </fieldset>
                    @endforeach
                    <!-- Result Fieldset -->
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title">Result</h2>
                            <div id="result"></div>
                        </div>
                    </fieldset>
                </form>

                {{--                <form id="msform">--}}

{{--                    <div class="progress">--}}
{{--                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                    </div> <br> <!-- fieldsets -->--}}
{{--                    <fieldset>--}}
{{--                        <div class="form-card">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12 col-lg-7">--}}
{{--                                    <h2 class="fs-title"><span>Step 1 of 6</span> - Overview of your business--}}
{{--        	</h2>--}}
{{--          <div class="form-step-row">--}}
{{--               @foreach ($questions as $question)--}}
{{--      <p class="step-1-para">→ {{ $question->text ?? "" }}<span class="gfield_required gfield_required_asterisk"></span></p>--}}

{{--      <div class="radio-btn-collections d-flex">--}}
{{--          <ul>--}}
{{--              @foreach ($question->options as $option)--}}
{{--                  <li >--}}
{{--                      <div class="custom-control custom-radio">--}}
{{--                          <input type="radio" name="{{ $question->id }}" value="{{ $option->id }}" id="option{{ $option->id }}" />--}}
{{--                          <label for="option{{ $option->id }}">{{ $option->option_values ?? "" }}</label>--}}
{{--                      </div>--}}
{{--                  </li>--}}
{{--              @endforeach--}}
{{--          </ul>--}}
{{--      </div>--}}
{{--  @endforeach--}}
{{--</div>--}}

{{--</div>--}}
{{--                               --}}{{-- <div class="form-step-row">--}}
{{--        <p class="step-1-para">1→ Is the business a registered limited company?<span class="gfield_required gfield_required_asterisk">*</span></p>--}}

{{--        <div class="radio-btn-collections d-flex">--}}
{{--        	  <div class="custom-control custom-radio">--}}

{{--    <input type="radio" name="limited_company" value="green" id="test1" />--}}
{{--   <label for="test1">Yes</label>--}}
{{--</div>--}}

{{--<div class="custom-control custom-radio">--}}

{{--    <input type="radio" name="limited_company" value="red" id="test2"/>--}}
{{--   <label for="test2">No</label>--}}
{{--</div>--}}
{{--        </div>--}}
{{--        </div>     --}}




{{--<div id="green" class="show-hide">--}}


{{--	  <div class="form-step-row">--}}

{{--        <p class="step-1-para">2→ Has the business been trading for at least 12 months?<span class="gfield_required gfield_required_asterisk">*</span></p>--}}

{{--        <div class="radio-btn-collections d-flex">--}}
{{--  <div class="custom-radio">--}}
{{--    <input type="radio" id="been_trading" name="radio-group">--}}
{{--    <label for="been_trading">Yes</label>--}}
{{--  </div>--}}
{{-- <div class="custom-radio">--}}
{{--    <input type="radio" id="been_trading2" name="radio-group">--}}
{{--    <label for="been_trading2">No</label>--}}
{{--  </div>--}}

{{--        </div>--}}
{{--        </div>--}}


{{--          <div class="form-step-row">--}}

{{--        <p class="step-1-para">3→ What areas does your business have expenditure?<span class="gfield_required gfield_required_asterisk">*</span></p>--}}

{{--         <div class="custom-control custom-checkbox">--}}
{{--        <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--        <label class="custom-control-label" for="customCheck1">Wages & Salaries</label>--}}
{{--      </div>--}}

{{--      <div class="custom-control custom-checkbox">--}}
{{--        <input type="checkbox" class="custom-control-input" id="customCheck2">--}}
{{--        <label class="custom-control-label" for="customCheck2"> Sub-contractor costs</label>--}}
{{--      </div>--}}

{{--       <div class="custom-control custom-checkbox">--}}
{{--        <input type="checkbox" class="custom-control-input" id="customCheck3">--}}
{{--        <label class="custom-control-label" for="customCheck3"> 	Purchases of products or materials</label>--}}
{{--      </div>--}}


{{--       <div class="custom-control custom-checkbox">--}}
{{--        <input type="checkbox" class="custom-control-input" id="customCheck4">--}}
{{--        <label class="custom-control-label" for="customCheck4">	IT or software costs</label>--}}
{{--      </div>--}}

{{--       <div class="custom-control custom-checkbox">--}}
{{--        <input type="checkbox" class="custom-control-input" id="customCheck5">--}}
{{--        <label class="custom-control-label" for="customCheck5">Consultancy fees</label>--}}
{{--      </div>--}}

{{--       <div class="custom-control custom-checkbox">--}}
{{--        <input type="checkbox" class="custom-control-input" id="customCheck6">--}}
{{--        <label class="custom-control-label" for="customCheck6">Other direct costs</label>--}}
{{--      </div>--}}

{{--        </div>--}}


{{--</div>--}}


{{--<div id="red" class="show-hide">--}}


{{--	<div class="highlight-form-text"><p style="color: red; font-weight: 700">--}}
{{--Thank you but unfortunately we cannot proceed with your claim, please leave your Name, phone &amp; email &amp; a member of the team will be in touch soon.--}}
{{--</p></div>--}}


{{--<div class="row g-4 limited_company_form">--}}
{{--                                            <div class="col-lg-12">--}}
{{--                                                <label>Name<span class="text-danger">*</span></label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>--}}
{{--                                                    <input type="text" class="form-control">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-sm-12 col-lg-6">--}}
{{--                                                <label>Email<span class="text-danger">*</span></label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>--}}
{{--                                                    <input type="email" class="form-control">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                              <div class="col-sm-12 col-lg-6">--}}
{{--                                                <label>Telephone<span class="text-danger">*</span></label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-text"><i class="bi bi-phone-fill"></i></div>--}}
{{--                                                    <input type="text" class="form-control">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}




{{--                                    </div>--}}



{{--</div>--}}


{{--                            </div>--}}





{{--                        </div>--}}
{{--                         <input type="button" name="next" class="next action-button" value="Next" />--}}
{{--                    </fieldset>--}}
{{--                    <fieldset>--}}
{{--                        <div class="form-card">--}}
{{--                            <div class="row">--}}
{{--                             <div class="col-sm-12 col-lg-7">--}}


{{--                                 <h2 class="fs-title"><span>Step 2 of 6</span> - Developing your business--}}
{{--        	</h2>--}}


{{--                                </div>--}}


{{--                                 <div class="form-step-row">--}}

{{--        <p class="step-1-para">1→ Has the business developed any new products or services in the two years?<span class="gfield_required gfield_required_asterisk">*</span></p>--}}

{{--        <div class="radio-btn-collections d-flex">--}}
{{--  <div class="custom-radio">--}}
{{--    <input type="radio" id="business_developed" name="radio-group-1">--}}
{{--    <label for="business_developed">Yes</label>--}}
{{--  </div>--}}
{{-- <div class="custom-radio">--}}
{{--    <input type="radio" id="business_developed2" name="radio-group-1">--}}
{{--    <label for="business_developed2">No</label>--}}
{{--  </div>--}}

{{--        </div>--}}
{{--        </div>--}}


{{--          <div class="form-step-row">--}}

{{--        <p class="step-1-para">2→ What was the purpose of these developments?<span class="gfield_required gfield_required_asterisk">*</span></p>--}}

{{--       <div class="radio-btn-collections d-flex flex-column development-rb">--}}
{{--        <div class="custom-radio">--}}
{{--            <input type="radio" id="developments" name="radio-group-2">--}}
{{--            <label for="developments">To improve sustainability</label>--}}
{{--        </div>--}}
{{--        <div class="custom-radio">--}}
{{--            <input type="radio" id="developments2" name="radio-group-2">--}}
{{--            <label for="developments2">To Improve efficiency</label>--}}
{{--        </div>--}}
{{--        <!-- Add more options as needed -->--}}

{{--				<div class="custom-radio">--}}
{{--				<input type="radio" id="developments3" name="radio-group-2">--}}
{{--				<label for="developments3">To improve safety</label>--}}
{{--			  </div>--}}

{{--			  <div class="custom-radio">--}}
{{--				<input type="radio" id="developments4" name="radio-group-2">--}}
{{--				<label for="developments4">To improve system or product quality’</label>--}}
{{--			  </div>--}}
{{--    </div>--}}
{{--        </div>--}}


{{--                            </div>--}}



{{--                        </div>--}}

{{--                         <input type="button" name="next" class="next action-button" value="Next" />--}}
{{--                         <input type="button" name="previous" class="previous action-button-previous" value="Previous" />--}}


{{--                    </fieldset>--}}

{{--                    <fieldset>--}}
{{--                        <div class="form-card">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12 col-lg-7">--}}
{{--                                <h2 class="fs-title"><span>Step 3 of 6</span> - Improving your business--}}
{{--        	</h2>--}}

{{--                                </div>--}}


{{--                                <div class="form-step-row">--}}

{{--        <p class="step-1-para">1→ Have you made any improvements to existing products, services or processes in the last two years?<span class="gfield_required gfield_required_asterisk">*</span></p>--}}

{{--        <div class="radio-btn-collections d-flex">--}}
{{--  <div class="custom-radio">--}}
{{--    <input type="radio" id="existing_products" name="radio-group3">--}}
{{--    <label for="existing_products">Yes</label>--}}
{{--  </div>--}}
{{-- <div class="custom-radio">--}}
{{--    <input type="radio" id="existing_products2" name="radio-group3">--}}
{{--    <label for="existing_products2">No</label>--}}
{{--  </div>--}}

{{--        </div>--}}
{{--        </div>--}}


{{--           <div class="form-step-row">--}}

{{--        <p class="step-1-para">2→ Do you have any specific plans or projects lined up for the next year to further improve the business?<span class="gfield_required gfield_required_asterisk">*</span></p>--}}

{{--        <div class="radio-btn-collections d-flex">--}}
{{--  <div class="custom-radio">--}}
{{--    <input type="radio" id="further_improve" name="radio-group4">--}}
{{--    <label for="further_improve">Yes</label>--}}
{{--  </div>--}}
{{-- <div class="custom-radio">--}}
{{--    <input type="radio" id="further_improve2" name="radio-group4">--}}
{{--    <label for="further_improve2">No</label>--}}
{{--  </div>--}}

{{--        </div>--}}
{{--        </div>--}}


{{--                            </div>--}}



{{--                        </div>--}}
{{--                         <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />--}}
{{--                    </fieldset>--}}


{{--                        <fieldset>--}}
{{--                        <div class="form-card">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12 col-lg-7">--}}
{{--                                <h2 class="fs-title"><span>Step 4 of 6</span> - Businesses challenges--}}
{{--        	</h2>--}}

{{--                                </div>--}}


{{--                                <div class="form-step-row">--}}

{{--        <p class="step-1-para">1→ What is your knowledge on R&D?<span class="gfield_required gfield_required_asterisk">*</span></p>--}}

{{--        <div class="radio-btn-collections d-flex flex-column flex-lg-row">--}}
{{--  <div class="custom-radio">--}}
{{--    <input type="radio" id="knowledge" name="radio-group5">--}}
{{--    <label for="knowledge">I have heard of it but never claimed</label>--}}
{{--  </div>--}}
{{-- <div class="custom-radio">--}}
{{--    <input type="radio" id="knowledge2" name="radio-group5">--}}
{{--    <label for="knowledge2">I have claimed in the past</label>--}}
{{--  </div>--}}

{{--   <div class="custom-radio">--}}
{{--    <input type="radio" id="knowledge3" name="radio-group5">--}}
{{--    <label for="knowledge3">I have claimed in the past</label>--}}
{{--  </div>--}}

{{--        </div>--}}
{{--        </div>--}}


{{--           <div class="form-step-row">--}}

{{--        <p class="step-1-para">2→ What prompted your interest in an R&D application?<span class="gfield_required gfield_required_asterisk">*</span></p>--}}

{{--      <div class="radio-btn-collections d-flex flex-column flex-lg-row">--}}
{{--  <div class="custom-radio">--}}
{{--    <input type="radio" id="application" name="radio-group6">--}}
{{--    <label for="application">I am eligible</label>--}}
{{--  </div>--}}
{{-- <div class="custom-radio">--}}
{{--    <input type="radio" id="application2" name="radio-group6">--}}
{{--    <label for="application2">I need help exploring the incentive</label>--}}
{{--  </div>--}}

{{--   <div class="custom-radio">--}}
{{--    <input type="radio" id="application3" name="radio-group6">--}}
{{--    <label for="application3">I am looking into funding options</label>--}}
{{--  </div>--}}

{{--        </div>--}}
{{--        </div>--}}


{{--                            </div>--}}



{{--                        </div>--}}
{{--                         <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />--}}
{{--                    </fieldset>--}}


{{--                      <fieldset>--}}
{{--                        <div class="form-card">--}}
{{--                            <div class="row">--}}
{{--                               <div class="col-sm-12 col-lg-7">--}}
{{--                                <h2 class="fs-title"><span>Step 5 of 6</span> - Extending knowledge--}}
{{--        	</h2>--}}

{{--                                </div>--}}


{{--                                <div class="form-step-row">--}}

{{--        <p class="step-1-para">Any other information you wish to provide to help us with understanding your business?</p>--}}


{{--       <textarea name="input_44" id="" class="form-control" aria-invalid="false" rows="10" cols="50"></textarea>--}}

{{--        </div>--}}





{{--                            </div>--}}



{{--                        </div>--}}
{{--                         <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />--}}
{{--                    </fieldset>--}}


{{--                       <fieldset>--}}
{{--                        <div class="form-card">--}}
{{--                            <div class="row">--}}
{{--                                 <div class="col-sm-12 col-lg-7">--}}
{{--                                <h2 class="fs-title"><span>Step 6 of 6</span> - Details--}}
{{--        	</h2>--}}

{{--                                </div>--}}


{{--                                <div class="form-step-row">--}}

{{--      <div class="row g-4 limited_company_form">--}}
{{--                                            <div class="col-sm-12 col-lg-6">--}}
{{--                                                <label>Name<span class="text-danger">*</span></label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>--}}
{{--                                                    <input type="text" class="form-control">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                               <div class="col-sm-12 col-lg-6">--}}
{{--                                                <label>Company name<span class="text-danger">*</span></label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-text"><i class="bi bi-building"></i></div>--}}
{{--                                                    <input type="text" class="form-control">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                           <div class="col-sm-12 col-lg-6">--}}
{{--                                                <label>Email<span class="text-danger">*</span></label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>--}}
{{--                                                    <input type="email" class="form-control">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                              <div class="col-sm-12 col-lg-6">--}}
{{--                                                <label>Telephone<span class="text-danger">*</span></label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-text"><i class="bi bi-phone-fill"></i></div>--}}
{{--                                                    <input type="text" class="form-control">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}




{{--                                    </div>--}}

{{--        </div>--}}





{{--                            </div>--}}



{{--                        </div>--}}
{{--                       <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />--}}
{{--                    </fieldset>--}}

{{--                            <fieldset>--}}
{{--                        <div class="form-card">--}}

{{--                            <h2 class="purple-text text-center mt-4"><strong>SUCCESS !</strong></h2> <br>--}}
{{--                            <div class="row justify-content-center">--}}
{{--                                <div class="col-12 text-center"><i class="bi bi-check-circle-fill check-edit"></i> </div>--}}
{{--                            </div>--}}
{{--                            <div class="mt-4 row justify-content-center">--}}
{{--                                <div class="col-12 text-center">--}}
{{--                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </fieldset>--}}


{{--                </form>--}}
            </div>
        </div>
    </div>
</div>


    </section><!-- End About Section -->



  </main><!-- End #main -->




  <!-- Vendor JS Files -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="{{ asset('usersassets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('usersassets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('usersassets/vendor/glightbox/js/glightbox.min.js')}}"></script>

  <script src="{{ asset('usersassets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('usersassets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('usersassets/js/main.js')}}"></script>




</body>

</html>
