@extends('master')



@section('content')

    <div id="body" class="home">
        <div class="header">
            <div>
                <img src="{{asset('asset/images/satellite.png')}}" alt="" class="satellite">
                <h1>SOYUZ TMA-M</h1>
                <h2>SPACECRAFT</h2>
                <a href="{{url('blog')}}" class="more">Read More</a>
                <h3>FEATURED PROJECTS</h3>
                <ul>
                    <li>
                        <a href="{{url('projects')}}"><img src="{{asset('asset/images/project-image1.jpg')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="{{url('projects')}}"><img src="{{asset('asset/images/project-image2.jpg')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="{{url('project')}}"><img src="{{asset('asset/images/project-image3.jpg')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="{{url('projects')}}"><img src="{{asset('asset/images/project-image4.jpg')}}" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="body">
        <div>
            <h1>OUR MISSION</h1>
            <p>This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.</p>
        </div>
    </div>


        <div class="footer">
            <div>
                <ul>
                    <li>
                        <h1>FEATURED VIDEO</h1>
                        <a href="{{asset('blog')}}"><img src="{{asset('asset/images/mars-rover.jpg')}}" alt=""><span></span></a>
                    </li>
                    <li>
                        <h1>LATEST BLOG</h1>
                        <ul>
                            <li>
                                <a href="{{url('blog')}}"><img src="{{asset('asset/images/finding-planet.jpg')}}" alt=""></a>
                                <h1>FINDING PLANET X-123</h1>
                                <span>FEBRUARY 6, 2023</span>
                                <a href="{{url('blog')}}" class="more">Read More</a>
                            </li>
                            <li>
                                <a href="{{url('blog')}}"><img src="{{asset('asset/images/new-satellitedish.jpg')}}" alt=""></a>
                                <h1>NEW SATELLITE DISH</h1>
                                <span>FEBRUARY 3, 2023</span>
                                <a href="{{url('blog')}}" class="more">Read More</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    @endsection
