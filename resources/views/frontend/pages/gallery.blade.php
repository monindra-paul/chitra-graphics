@extends('frontend.layout.app')
@section('mainsection')


<!-- 
			=============================================
				Theme Solid Inner Banner
			============================================== 
			-->
<div class="solid-inner-banner">
    <h2 class="page-title">Gallery</h2>
    <ul class="page-breadcrumbs">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li>Gallery</li>
    </ul>
</div> <!-- /.solid-inner-banner -->


<div class="element-section mb-200">
    <div class="our-project project-with-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/1.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/1.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">Minimal Iphone</a></h4>
                                <p>Mockup</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- -->
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/2.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/2.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">Logo Branding</a></h4>
                                <p>Logo</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- -->
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/3.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/3.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">User Interface</a></h4>
                                <p>Web Design</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- --> 
                
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/4.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/4.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">User Interface</a></h4>
                                <p>Web Design</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- -->
                
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/5.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/5.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">User Interface</a></h4>
                                <p>Web Design</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- -->
                
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/6.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/6.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">User Interface</a></h4>
                                <p>Web Design</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- -->
                
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/7.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/7.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">User Interface</a></h4>
                                <p>Web Design</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- -->
                
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/8.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/8.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">User Interface</a></h4>
                                <p>Web Design</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- -->
                
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/9.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/9.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">User Interface</a></h4>
                                <p>Web Design</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- -->
                
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/10.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/10.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">User Interface</a></h4>
                                <p>Web Design</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- -->
                
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/11.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/11.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">User Interface</a></h4>
                                <p>Web Design</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- -->
                
                <div class="col-lg-4">
                    <div class="project-item">
                        <div class="img-box">
                            <img src="{{asset('assets/images/chitra/sw/12.webp')}}" alt="">
                            <a href="{{asset('assets/images/chitra/sw/12.webp')}}" class="zoom fancybox"
                                data-fancybox="gallery"><img src="{{asset('assets/images/icon/zoom-in.svg')}}" alt="" class="svg"></a>
                        </div>
                        {{-- <div class="hover-coco">
                            <div>
                                <h4 class="title"><a href="#">User Interface</a></h4>
                                <p>Web Design</p>
                            </div>
                        </div> <!-- /.hover-coco --> --}}
                    </div> <!-- /.project-item -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div>
    </div> <!-- /.our-project -->
</div>



@endsection