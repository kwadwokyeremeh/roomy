@extends('individualHostel.master')

@section('main-content')

    <!--BENGIN Reviews and Comments-->
    <section class="site-content-area">
        <div class="vk-gallery-grid-full-banner">
            <div class="vk-about-banner">
                <div class="vk-about-banner-destop">
                    <div class="vk-banner-img"></div>
                    <div class="vk-about-banner-caption">
                        <h2>Reviews and Comments</h2>

                    </div>
                </div>
            </div>
        </div>
        <!--Comments and reviews body-->
        <div class="vk-posts-details-body" id="comments">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="vk-posts-details-body-left">
                            <!--Add a comment-->

                            <div class="vk-event-details-left-add-comment">
                                <h4> Add Your Comments</h4>
                                <div class="row">
                                    <form action="{{url($hostel->slug.'/comments')}}" method="POST">{{method_field('PUT')}}
                                        @csrf
                                        {{--<div class="form-group">
                                            <div class="col-md-6">
                                                <input type="text" id="yourName" placeholder="Your name ..." class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="email" id="youremail" placeholder="Your email ..." class="form-control">
                                            </div>
                                        </div>--}}
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        @if(auth()->check())
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="vk-event-details-submit">
                                                        <button type="submit" class="vk-btn vk-btn-submit">COMMENT</button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        @endif
                                    </form>
                                    @if(auth()->guest())
                                        <b> You have login before your can comment or give a testimony</b>
                                    @endif
                                </div>
                            </div>
                            <!--Add a comment-->
                            <div class="vk-event-details-left-comment">
                                @if($comments)
                                <h4>{{count($comments)}} comments</h4>
                                <ul>
                                    @foreach($comments as $comment)

                                    <li>
                                        <div class="vk-event-details-comments-img">
                                            <img src="../images/06_03_event_detail/comment/img.jpg" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-event-details-comments-text">
                                            <div class="vk-events-details-author">
                                                <span class="author-name">{{$comment->user->firstName}}</span>
                                                <span class="author-time">{{$comment->updated_at->diffForHumans()}} </span>
                                            </div>
                                            <div class="vk-event-details-des">
                                                <p>
                                                    {{$comment->message}}

                                                </p>
                                            </div>
                                            <div class="vk-event-details-btn">
                                                <a href="#">Reply <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                <a href="#">20<i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                                <a href="#">10<i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    <li>
                                        <div class="vk-event-details-comments-img">
                                            <img src="../images/06_03_event_detail/comment/img1.jpg" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-event-details-comments-text">
                                            <div class="vk-events-details-author">
                                                <span class="authour-name">Jessica</span>
                                                <span class="author-time">09 may 2017 </span>
                                            </div>
                                            <div class="vk-event-details-des">
                                                <p>
                                                    Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                    fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                    ultricies eget, tempor sit amet, ante. Donec eu libero sit amet
                                                    quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat
                                                    eleifend leo.
                                                </p>
                                            </div>
                                            <div class="vk-event-details-btn">
                                                <a href="#">Reply <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                <a href="#">20<i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                                <a href="#">10<i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="vk-event-details-comments-img">
                                            <img src="../images/06_03_event_detail/comment/img1.jpg" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-event-details-comments-text">
                                            <div class="vk-events-details-author">
                                                <span class="authour-name">Jessica</span>
                                                <span class="author-time">09 may 2017 </span>
                                            </div>
                                            <div class="vk-event-details-des">
                                                <p>
                                                    Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                    fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                    ultricies eget, tempor sit amet, ante. Donec eu libero sit amet
                                                    quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat
                                                    eleifend leo.
                                                </p>
                                            </div>
                                            <div class="vk-event-details-btn">
                                                <a href="#">Reply <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                <a href="#">20<i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                                <a href="#">10<i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="vk-event-details-comments-img">
                                            <img src="../images/06_03_event_detail/comment/img1.jpg" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-event-details-comments-text">
                                            <div class="vk-events-details-author">
                                                <span class="authour-name">Jessica</span>
                                                <span class="author-time">09 may 2017 </span>
                                            </div>
                                            <div class="vk-event-details-des">
                                                <p>
                                                    Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                    fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                    ultricies eget, tempor sit amet, ante. Donec eu libero sit amet
                                                    quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat
                                                    eleifend leo.
                                                </p>
                                            </div>
                                            <div class="vk-event-details-btn">
                                                <a href="#">Reply <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                <a href="#">20<i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                                <a href="#">10<i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END of Reviews and Comments-->

    @endsection

@section('custom-script')
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        let app =new Vue({
            el: '#comments',
            data: {
               viewers: [],
               counter: 0
            },
            mounted() {
                this.listen()
            },
            methods: {
                listen(){
                    Echo.join('comments'{{ $hostel->id }} ).here((user) => {this.count = user.length;}).joining((user) => {this.count++;}).leaving((user) => {this.count--;})
                }
            }
        })
    </script>
@endsection
