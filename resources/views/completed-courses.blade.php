@extends('layouts.header')

@section('content')
<script srs="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<div class="container">
    @if(Session::has('flash_message'))
        <div class="alert alert-success"> {!! session('flash_message') !!}</div>
        <script>
            $("div.alert").delay(2000).slideUp(300);
        </script>
    @endif
    

      <div class="row" style="padding-top:30px;">

        <div>
          <p style="padding-top:20px"><i> Below is the general course sequence for software engineering, please select the courses you have already completed. It will be useful when generating your schedules!</i></p>

          <p><a href="https://www.concordia.ca/encs/computer-science-software-engineering/students/course-sequences/sept-soen-general.html"  target="_blank">See the sequence at Concordia website</a></p>
        </div>

        <form role="form" action="{{ url('/courses/completed/save') }}" method="post" class="login-form">
        <div class="col-sm-3">
          <p style="text-align: center;padding-top:30px;"><strong>Year 1</strong></p>
            <div class="row">
              <div class="col-sm-6">

                    <input type="checkbox" id="COMP232" name="completedCourses[]" value = "COMP232" class="vis-hidden"  @if (in_array('COMP232', $completedCourses)) checked="checked" @endif><label class="course-label"  for="COMP232">COMP232 </label>
                    <input type="checkbox" id="COMP248" name="completedCourses[]" value = "COMP248" class="vis-hidden"  @if (in_array('COMP248', $completedCourses)) checked="checked" @endif><label class="course-label"  for="COMP248">COMP248</label>
                    <input type="checkbox" id="ENGR213" name="completedCourses[]" value = "ENGR213" class="vis-hidden"  @if (in_array('ENGR213', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ENGR213">ENGR213</label>
                    <input type="checkbox" id="ENGR201" name="completedCourses[]" value = "ENGR201" class="vis-hidden"  @if (in_array('ENGR201', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ENGR201">ENGR201</label>
                    <input type="checkbox" class="vis-hidden" checked="checked"><label class="course-label"  for="G.ELEC">G. ELEC</label>
                </div>
                <div class="col-sm-6">

                    <input type="checkbox" id="COMP249" name="completedCourses[]" value = "COMP249" class="vis-hidden" @if (in_array('COMP249', $completedCourses)) checked="checked" @endif><label class="course-label"  for="COMP249">COMP249</label>
                    <input type="checkbox" id="SOEN228" name="completedCourses[]" value = "SOEN228" class="vis-hidden" @if (in_array('SOEN228', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN228">SOEN228</label>
                    <input type="checkbox" id="SOEN287" name="completedCourses[]" value = "SOEN287" class="vis-hidden" @if (in_array('SOEN287', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN287">SOEN287</label>
                    <input type="checkbox" id="ENGR233" name="completedCourses[]" value = "ENGR233" class="vis-hidden" @if (in_array('ENGR233', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ENGR233">ENGR233</label>
                    <input type="checkbox" class="vis-hidden" checked="checked"><label class="course-label"  for="B.SCI">B.SCI</label>
                    </div>

            </div>
        </div>

        <div class="col-sm-3">
          <p style="text-align: center; padding-top:30px;"><strong>Year 2</strong></p>
            <div class="row">
              <div class="col-sm-6">
                    <input type="checkbox" id="COMP352" name="completedCourses[]" value = "COMP352" class="vis-hidden" @if (in_array('COMP352', $completedCourses)) checked="checked" @endif><label class="course-label" for="COMP352">COMP352</label>
                    <input type="checkbox" id="COMP348" name="completedCourses[]" value = "COMP348" class="vis-hidden" @if (in_array('COMP348', $completedCourses)) checked="checked" @endif><label class="course-label"  for="COMP348">COMP348</label>
                    <input type="checkbox" id="ENCS282" name="completedCourses[]" value = "ENCS282" class="vis-hidden" @if (in_array('ENCS282', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ENCS282">ENCS282</label>
                    <input type="checkbox" id="ENGR202" name="completedCourses[]" value = "ENGR202" class="vis-hidden" @if (in_array('ENGR202', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ENGR202">ENGR202</label>
                    <input type="checkbox" class="vis-hidden" checked="checked"><label class="course-label"  for="B.SCI">B.SCI</label>
                </div>
                <div class="col-sm-6">

                    <input type="checkbox" id="SOEN331" name="completedCourses[]" value = "SOEN331" class="vis-hidden" @if (in_array('SOEN331', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN331">SOEN331</label>
                    <input type="checkbox" id="SOEN341" name="completedCourses[]" value = "SOEN341" class="vis-hidden" @if (in_array('SOEN341', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN341">SOEN341</label>
                    <input type="checkbox" id="COMP346" name="completedCourses[]" value = "COMP346" class="vis-hidden" @if (in_array('COMP346', $completedCourses)) checked="checked" @endif><label class="course-label"  for="COMP346">COMP346</label>
                    <input type="checkbox" id="ELEC275" name="completedCourses[]" value = "ELEC275" class="vis-hidden" @if (in_array('ELEC275', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ELEC275">ELEC275</label>
                    <input type="checkbox" id="ENGR371" name="completedCourses[]" value = "ENGR371" class="vis-hidden" @if (in_array('ENGR371', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ENGR371">ENGR371</label>
            </div>

            </div>
        </div>

        <div class="col-sm-3">
          <p style="text-align: center; padding-top:30px;"><strong>Year 3</strong></p>
            <div class="row">
              <div class="col-sm-6">
                    <input type="checkbox" id="COMP335" name="completedCourses[]" value = "COMP335" class="vis-hidden" @if (in_array('COMP335', $completedCourses)) checked="checked" @endif><label class="course-label"  for="COMP335">COMP335</label>
                    <input type="checkbox" id="SOEN342" name="completedCourses[]" value = "SOEN342" class="vis-hidden" @if (in_array('SOEN342', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN342">SOEN342</label>
                    <input type="checkbox" id="SOEN343" name="completedCourses[]" value = "SOEN343" class="vis-hidden" @if (in_array('SOEN343', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN343">SOEN343</label>
                    <input type="checkbox" id="SOEN384" name="completedCourses[]" value = "SOEN384" class="vis-hidden" @if (in_array('SOEN384', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN384">SOEN384</label>
                    <input type="checkbox" id="ENGR391" name="completedCourses[]" value = "ENGR391" class="vis-hidden" @if (in_array('ENGR391', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ENGR391">ENGR391</label>
            </div>
                <div class="col-sm-6">

                    <input type="checkbox" id="SOEN357" name="completedCourses[]" value = "SOEN357" class="vis-hidden" @if (in_array('SOEN357', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN357">SOEN357</label>
                    <input type="checkbox" id="SOEN390" name="completedCourses[]" value = "SOEN390" class="vis-hidden" @if (in_array('SOEN390', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN390">SOEN390</label>
                    <input type="checkbox" id="SOEN344" name="completedCourses[]" value = "SOEN344" class="vis-hidden" @if (in_array('SOEN344', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN344">SOEN344</label>
                    <input type="checkbox" id="SOEN345" name="completedCourses[]" value = "SOEN345" class="vis-hidden" @if (in_array('SOEN345', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN345">SOEN345</label>
                    <input type="checkbox" id="ELECTIVE0" name="completedCourses[]" value = "ELECTIVE0" class="vis-hidden" @if (in_array('ELECTIVE0', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ELECTIVE0">ELECTIVE</label>
            </div>

            </div>
        </div>

        <div class="col-sm-3">
          <p style="text-align: center; padding-top:30px;"><strong>Year 4</strong></p>
            <div class="row">
              <div class="col-sm-6">
                    <input type="checkbox" id="SOEN390" name="completedCourses[]" value = "SOEN390" class="vis-hidden" @if (in_array('SOEN390', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN390">SOEN490</label>
                    <input type="checkbox" id="SOEN321" name="completedCourses[]" value = "SOEN321" class="vis-hidden" @if (in_array('SOEN321', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN321">SOEN321</label>
                    <input type="checkbox" id="ENGR301" name="completedCourses[]" value = "ENGR301" class="vis-hidden" @if (in_array('ENGR301', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ENGR301">ENGR301</label>
                    <input type="checkbox" id="T.ELECTIVE1" name="completedCourses[]" value = "T.ELECTIVE1" class="vis-hidden" @if (in_array('T.ELECTIVE1', $completedCourses)) checked="checked" @endif><label class="course-label"  for="T.ELECTIVE1">T. ELEC</label>
                    <input type="checkbox" id="T.ELECTIVE2" name="completedCourses[]" value = "T.ELECTIVE2" class="vis-hidden" @if (in_array('T.ELECTIVE2', $completedCourses)) checked="checked" @endif><label class="course-label"  for="T.ELECTIVE2">T. ELEC</label>
            </div>
                <div class="col-sm-6">

                    <input type="checkbox" id="SOEN490" name="completedCourses[]" value = "SOEN490" class="vis-hidden" @if (in_array('SOEN490', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN490">SOEN490</label>
                    <input type="checkbox" id="SOEN385" name="completedCourses[]" value = "SOEN385" class="vis-hidden" @if (in_array('SOEN385', $completedCourses)) checked="checked" @endif><label class="course-label"  for="SOEN385">SOEN385</label>
                    <input type="checkbox" id="ENGR292" name="completedCourses[]" value = "ENGR392" class="vis-hidden" @if (in_array('ENGR392', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ENGR292">ENGR392</label>
                    <input type="checkbox" id="ELECTIVE1" name="completedCourses[]" value = "ELECTIVE1" class="vis-hidden" @if (in_array('ELECTIVE1', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ELECTIVE1">ELECTIVE</label>
                    <input type="checkbox" id="ELECTIVE2" name="completedCourses[]" value = "ELECTIVE2" class="vis-hidden" @if (in_array('ELECTIVE2', $completedCourses)) checked="checked" @endif><label class="course-label"  for="ELECTIVE2">ELECTIVE</label>
            </div>

            </div>
        </div>
            <button type="submit" class="btn completed-btn" style="float:right;margin-top:20px;width:25%">Set Completed Courses</button>
        </form>
      </div>

    </div>
@endsection
