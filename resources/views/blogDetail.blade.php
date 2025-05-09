@extends('layout.main')
@section('content')

<!-- Start Page Title -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Blog Details</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title -->
@if($blog)
<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-image">
                        <img src='{{asset("$blog->image")}}' alt="image">
                    </div>

                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li>
                                    <i class='bx bx-folder-open'></i>
                                    <span>Category</span>
                                    <a href="#">Fashion</a>
                                </li>
                                <li>
                                    <i class='bx bx-group'></i>
                                    <span>View</span>
                                    <a href="#">813,454</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    <span>Last Updated</span>
                                    <a href="#">01/14/2024</a>
                                </li>
                            </ul>
                        </div>

                        <h3>{{$blog->title}}</h3>

                        <div>{!!$blog->content!!}</div>

                    </div>

                    <div class="article-footer">
                        <div class="article-tags">
                            <span><i class='bx bx-purchase-tag'></i></span>

                            <a href="#">Fashion</a>,
                            <a href="#">Games</a>,
                            <a href="#">Travel</a>
                        </div>

                        <div class="article-share">
                            <ul class="social">
                                <li><span>Share:</span></li>
                                <li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="article-author">
                        <div class="author-profile-header"></div>
                        <div class="author-profile">
                            <div class="author-profile-title">
                                <img src="assets/img/user1.jpg" class="shadow-sm" alt="image">

                                <div class="author-profile-title-details d-flex justify-content-between">
                                    <div class="author-profile-details">
                                        <h4>Chris Orwig</h4>
                                        <span class="d-block">Photographer, Author, Writer</span>
                                    </div>

                                    <div class="author-profile-raque-profile">
                                        <a href="#" class="d-inline-block">View profile on Xton</a>
                                    </div>
                                </div>
                            </div>
                            <p>Orwig is a celebrated photographer, author, and writer who brings passion to everything he does.</p>
                        </div>
                    </div>

                    <div class="xton-post-navigation">
                        <div class="prev-link-wrapper">
                            <div class="info-prev-link-wrapper">
                                <a href="#">
                                    <span class="image-prev">
                                        <img src="assets/img/blog/img5.jpg" alt="image">
                                        <span class="post-nav-title">Prev</span>
                                    </span>

                                    <span class="prev-link-info-wrapper">
                                        <span class="prev-title">Latest ecommerce trend: The rise of shoppable posts</span>
                                        <span class="meta-wrapper">
                                            <span class="date-post">January 21, 2024</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="next-link-wrapper">
                            <div class="info-next-link-wrapper">
                                <a href="#">
                                    <span class="next-link-info-wrapper">
                                        <span class="next-title">Building eCommerce wave: Social media shopping</span>
                                        <span class="meta-wrapper">
                                            <span class="date-post">January 19, 2024</span>
                                        </span>
                                    </span>

                                    <span class="image-next">
                                        <img src="assets/img/blog/img6.jpg" alt="image">
                                        <span class="post-nav-title">Next</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="comments-area">
                        <h3 class="comments-title">{{$totalComments}} Comments:</h3>

                        <ol class="comment-list">
                            @foreach($blog->comments as $comment)
                            <li class="comment">
                                <article class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img src="assets/img/user1.jpg" class="avatar" alt="image">
                                            <b class="fn">{{ $comment->user->name }}</b>
                                            <span class="says">says:</span>
                                        </div>

                                        <div class="comment-metadata">
                                            <a href="#">
                                                <span>April 24, 2024 at 10:59 am</span>
                                            </a>
                                        </div>
                                    </footer>

                                    <div class="comment-content">
                                        <p>{{ $comment->comment }}</p>
                                    </div>

                                    <div class="reply">
                                        <a href="javascript:void(0);" class="comment-reply-link" onclick="toggleReplyForm({{ $comment->id }})">Reply</a>

                                        @auth
                                        @if(Auth::id() === $comment->user_id)
                                        <form method="POST" action="{{ route('comments.destroy', $comment->id) }}" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="comment-delete" onclick="return confirm('Delete this comment?')">Delete</button>
                                        </form>
                                        @endif

                                        {{-- Hidden reply form --}}
                                        <div id="reply-form-{{ $comment->id }}" style="display: none;">
                                            <form method="POST" class="replay-comment-form" action="{{ route('comments.store') }}">
                                                @csrf
                                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                                <textarea name="comment" required placeholder="Write your reply..."></textarea>
                                                <button type="submit">Post Reply</button>
                                            </form>
                                        </div>
                                        @endauth
                                    </div>

                                    <script>
                                        function toggleReplyForm(commentId) {
                                            const form = document.getElementById('reply-form-' + commentId);
                                            if (form.style.display === 'none') {
                                                form.style.display = 'block';
                                            } else {
                                                form.style.display = 'none';
                                            }
                                        }
                                    </script>

                                </article>

                                <ol class="children">
                                    <li class="comment">
                                        @foreach($comment->replies as $reply)
        
                                        <article class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img src="assets/img/user2.jpg" class="avatar" alt="image">
                                                    <b class="fn">{{ $reply->user->name }}</b>
                                                    <span class="says">says:</span>
                                                </div>

                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <span>April 24, 2024 at 10:59 am</span>
                                                    </a>
                                                </div>
                                            </footer>

                                            <div class="comment-content">
                                                <p>{{ $reply->comment }}</p>
                                            </div>

                                            <div class="reply">
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                        </article>
                                        @endforeach

                                    </li>
                                </ol>
                            </li>
                            @endforeach
                        </ol>

                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply</h3>

                            @auth
                            <form class="comment-form" method="POST" action="{{ route('comments.store') }}">
                                @csrf
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <p class="comment-form-comment">
                                    <label>Comment</label>
                                    <textarea name="comment" id="comment" cols="45" placeholder="Your Comment..." rows="5" maxlength="65525" required="required"></textarea>
                                </p>
                                <p class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="submit" value="Post A Comment">
                                </p>
                            </form>
                            @else
                            <p><a href="{{ route('login') }}">Login</a> to comment.</p>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">
                    <section class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit"><i class="bx bx-search-alt"></i></button>
                        </form>
                    </section>

                    <section class="widget widget_xton_posts_thumb">
                        <h3 class="widget-title">Popular Posts</h3>

                        @foreach($otherBlogs as $blogs)

                        <article class="item">
                            <a href="/blog/{{$blogs->id}}" class="thumb">
                                <span class="fullimage cover" role="img"><img style="height: 100%; width:100%;" src="{{asset("$blogs->image")}}" alt=""></span>
                            </a>
                            <div class="info">
                                <span>June 10, 2024</span>
                                <h4 class="title usmall"><a href="/blog/{{$blogs->id}}">{{$blogs->title}}</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article>

                        @endforeach

                        <!-- <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg2" role="img"></span>
                            </a>
                            <div class="info">
                                <span>June 21, 2024</span>
                                <h4 class="title usmall"><a href="#">Introducing the 2024 bigCommerce partner</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article> -->
                    </section>

                    <section class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>

                        <ul>
                            <li><a href="#">Design <span class="post-count">(03)</span></a></li>
                            <li><a href="#">Lifestyle <span class="post-count">(05)</span></a></li>
                            <li><a href="#">Script <span class="post-count">(10)</span></a></li>
                            <li><a href="#">Device <span class="post-count">(08)</span></a></li>
                            <li><a href="#">Tips <span class="post-count">(01)</span></a></li>
                        </ul>
                    </section>

                    <section class="widget widget_tag_cloud">
                        <h3 class="widget-title">Xton Tags</h3>

                        <div class="tagcloud">
                            <a href="#">Business <span class="tag-link-count"> (3)</span></a>
                            <a href="#">Design <span class="tag-link-count"> (3)</span></a>
                            <a href="#">Xton <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                        </div>
                    </section>

                    <section class="widget widget_instagram">
                        <h3 class="widget-title">Instagram</h3>

                        <ul>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/img1.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/img2.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/img3.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/img4.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/img5.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/img6.jpg" alt="image">
                                </a>
                            </li>
                        </ul>
                    </section>

                    <section class="widget widget_contact">
                        <div class="text">
                            <div class="icon">
                                <i class='bx bx-phone-call'></i>
                            </div>
                            <span>Emergency</span>
                            <a href="tel:+098798768753">+0987-9876-8753</a>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Details Area -->
@endif

<!-- Start Facility Area -->
<section class="facility-area pb-70">
    <div class="container">
        <div class="facility-slides owl-carousel owl-theme">
            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-tracking'></i>
                </div>
                <h3>Free Shipping Worldwide</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-return'></i>
                </div>
                <h3>Easy Return Policy</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-shuffle'></i>
                </div>
                <h3>7 Day Exchange Policy</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-sale'></i>
                </div>
                <h3>Weekend Discount Coupon</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-credit-card'></i>
                </div>
                <h3>Secure Payment Methods</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-location'></i>
                </div>
                <h3>Track Your Package</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-customer-service'></i>
                </div>
                <h3>24/7 Customer Support</h3>
            </div>
        </div>
    </div>
</section>
<!-- End Facility Area -->


@endsection
