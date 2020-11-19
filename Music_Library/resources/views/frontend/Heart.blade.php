@extends('frontendtemplate')
@section('content')

     <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand">Music Library</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{route('mainpage')}}">Home</a></li>
                                    <li><a href="{{route('songs')}}">Songs</a></li>
                                    
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                     <li><a href="{{route('Heart')}}">Favourite</a></li>
                                    <li class="nav-item dropdown">
                                        

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();" style="color: black;">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>

                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                    </li>
                                </ul>

                                
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay mb-5" style="background-image:url({{asset('frontend_asset/img/bg-img/breadcumb3.jpg')}});">
        <div class="bradcumbContent">
            
            <h2>Favourite Songs</h2>
        </div>
    </section>
   

    <div class="container mb-5 filter_active">
        
        <a  href="{{route('songs')}}" class="filter_btn_all my-3">All</a>
       
        <a  href="{{route('AllClassMusicOnePage2',"Internation" )}}" class="filter_btn_inter my-3">International</a>
        <a  href="{{route('AllClassMusicOnePage2',"Local" )}}" class="filter_btn_local my-3">Local</a>
        <a  href="{{route('AllClassMusicOnePage2',"Kpop" )}}" class="filter_btn_kpop my-3">K Pop</a>
        <a  href="{{route('AllClassMusicOnePage',"Male" )}}" class="filter_btn_male my-3">Male</a>
        <a  href="{{route('AllClassMusicOnePage',"Female" )}}" class="filter_btn_female my-3">Female</a>
        
    </div>


    <!-- ##### Song Area Start ##### -->
    <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row filter_songs " id="tbody">

                <!-- Single Song Area -->
                
        <script src="{{asset('frontend_asset/js/jquery/jquery-2.2.4.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/fontawesome/css/all.min.css')}}">
        <script type="text/javascript">
        $(document).ready(function(){

            showdata();

            function showdata()
            {
                var itemlist=localStorage.getItem("Heart_song");
                var itemArray=JSON.parse(itemlist);
                var html="";
                var j=1;

                $.each(itemArray,function(i,v)
                {
                    html+=`

                    <div class="col-12">
                        <p ><spam class="remove" data-id=${i} style="color:red;border: 1px solid red; padding: 5px; border-radius: 10px;">x</spam>&nbsp;${j++}. ${v.name}
                        </p>
                        <audio preload="auto" controls style="background-color:black;padding:7px;">
                            <source src="${v.url}">
                        </audio>
                    </div>`
                })
                $("#tbody").html(html);

            }

            $("#tbody").on("click",".remove",function()
            {
            
                var r = confirm("Do you want to delete?");
                if(r==true)
                {
                    var id=$(this).data("id");
                    //console.log(id);
                    var itemlist=localStorage.getItem("Heart_song");
                    var ItemArray=JSON.parse(itemlist);
                    ItemArray.splice(id,1);
                    var itemstring=JSON.stringify(ItemArray);
                    localStorage.setItem("Heart_song", itemstring);
                    showdata();
                   
                }
            
            })


        });

        </script>

                

            </div>
        </div>
    </div>
    <!-- ##### Song Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url({{asset('frontend_asset/img/bg-img/bg-2.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    
@endsection


@section('script')
</script>
    
@endsection