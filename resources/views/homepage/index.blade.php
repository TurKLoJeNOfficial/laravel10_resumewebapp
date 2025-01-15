
<!DOCTYPE html>
<html>
<title>{{$settings->title}}</title>
<meta charset="UTF-8">
<meta name="description" content="{{$settings->description}} ">
<meta name="keywords" content="{{$settings->keyword}}">
<meta name="author" content="{{$settings->author}}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

        <!-- Left Column -->
        <div class="w3-third">

            <div class="w3-white w3-text-grey w3-card-4">
                <div class="w3-display-container">
                    <img src="{{asset($profile->image ?? '')}}" style="width:100%" alt="Avatar">
                    <div class="w3-display-bottomleft w3-container w3-text-black">
                        <h2 style="color: white;">{{$profile->name}}</h2>
                    </div>
                </div>
                <div class="w3-container">
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-{{$settings->color}}"></i>{{$profile->title}}</p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-{{$settings->color}}"></i>{{$profile->address}}</p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-{{$settings->color}}"></i>{{$profile->email}}</p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-{{$settings->color}}"></i>{{$profile->phone}}</p>
                    <hr>


                    <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-{{$settings->color}}"></i>Skills</b></p>
                    @foreach($skills as $skill)
                        <p>{{$skill->skill}}</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-{{$settings->color}}" style="width:{{$skill->ratio}}%">{{$skill->ratio}}%</div>
                        </div>
                    @endforeach

                    <br>


                    <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-{{$settings->color}}"></i>Languages</b></p>

                    @foreach($languages as $language)
                        <p>{{$language->language}}</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-container w3-center w3-round-xlarge w3-{{$settings->color}}" style="width:{{$language->ratio}}%">
                                @if($language->ratio == 100)
                                    Main Language
                                @else
                                    {{$language->ratio}}%
                                @endif
                            </div>
                        </div>
                    @endforeach

                    <br>
                    <br>


                    <p class="w3-large w3-text-theme"><b><i class="fa fa-users fa-fw w3-margin-right w3-text-{{$settings->color}}"></i>References</b></p>

                    @foreach($references as $reference)
                        <p><b>{{$reference->name}} ~</b>  {{$reference->company}} <br> ({{$reference->title}}) <br> <b> {{$reference->phone ?? ''}} <br> {{$reference->mail ?? ''}} </b>   </p>
                    @endforeach
                    <br>
                </div>
            </div><br>

            <!-- End Left Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-twothird">

            @if($experiences->count() > 0)
            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-{{$settings->color}}"></i>Work Experience</h2>

                @foreach($experiences as $experience)
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>{{$experience->title}} / {{$experience->company}}</b></h5>
                        <h6 class="w3-text-{{$settings->color}}"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$experience->start_date}} - <span class="w3-tag w3-{{$settings->color}} w3-round">{{$experience->finish_date ?? 'Current'}} </span></h6>
                        <p>.{{$experience->description}}</p>
                        <hr>
                    </div>
                @endforeach


            </div>@endif

            @if($educations->count() >0)
            <div class="w3-container w3-card w3-white">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-xxlarge w3-text-{{$settings->color}}"></i>Education</h2>

                @foreach($educations as $education)
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>{{$education->school_name}}</b></h5>
                        <h6 class="w3-text-{{$settings->color}}"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$education->start_date}} - <span class="w3-tag w3-{{$settings->color}} w3-round">{{$education->finish_date ?? 'Current'}} </span></h6>
                        <p>{{$education->description}}</p>
                        <hr>
                    </div>
                @endforeach
            </div>
                @endif


                @if($projects->count() >0)
                    <div class="w3-container w3-card w3-white w3-margin-bottom w3-margin-top">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-database fa-fw w3-margin-right w3-xxlarge w3-text-{{$settings->color}}"></i>Project</h2>

                        @foreach($projects as $project)
                            <div class="w3-container">
                                <h5 class="w3-opacity"><b>{{$project->project_name}} ( {{$project->project_type}} )</b></h5>
                                <h6 class="w3-text-{{$settings->color}}"><i class="fa fa-globe fa-fw w3-margin-right"></i><a href="{{$project->project_url}}">View Project</a></h6>
                                <p>{{$project->project_description}}</p>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                @endif


                @if($certificates->count() >0)
            <div class="w3-container w3-card w3-white w3-margin-bottom w3-margin-top">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-{{$settings->color}}"></i>Certificate</h2>

                @foreach($certificates as $certificate)
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>{{$certificate->title}}</b></h5>
                        <h6 class="w3-text-{{$settings->color}}"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$certificate->date}} - <span class="w3-tag w3-{{$settings->color}} w3-round"><a href="{{$certificate->url ?? ''}}">View Certificate</a> </span></h6>
                        <p>{{$certificate->description}}</p>
                        <hr>
                    </div>
                @endforeach
            </div>
                @endif



            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>

@if($settings->music!=null)
    <iframe width="0" height="0" src="https://www.youtube.com/embed/{{$settings->music}}?rel=0&amp;autoplay=1" frameborder="0"  allowfullscreen></iframe>
@endif


<footer class="w3-container w3-{{$settings->color}} w3-center w3-margin-top">
    <p>Find me on social media.</p>
    @foreach($socialmedias as $socialmedia)
        <i class="fa fa-{{strtolower($socialmedia->name) }} w3-hover-opacity"></i>
    @endforeach
    <p>{{$settings->footer}}</p>
</footer>

</body>
</html>
