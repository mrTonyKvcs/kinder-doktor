@extends('layouts.app')

@section('content')


                <!-- Write code -->

                <div class="section-subbanner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="caption">Blog Slidebar 2 columns</div>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a> </li>
                                    <li><a href="#">Pages</a> </li>
                                    <li class="active">Album Gallery 3 columns with title</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- E: .section-banner -->

                <div class="primary-content">
                <div class="blog blog-columns">
                <div class="container">
                <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-sm-push-8 col-md-push-8">

                    <div class="widget recent-post">
                        <div class="widget-title">
                            <h4>Recent Post</h4>
                        </div>
                        <div class="widget-body">
                            @for($i = 0; $i < 3; $i++)
                            <div class="media">
                                <div class="media-left pull-left">
                                    <a href="#">
                                        <img src="/images/demo.jpg" class="media-object" alt="Sample Image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#" title="">What is the success rate of a Root Canel?</a></h4>
                                    <p class="postago">Posted <span class="color-333">20 December 2016</span></p>
                                </div>
                            </div>
                            @endfor
                            
                        </div>
                    </div>
                    <!-- E: .recent-post -->

                    <!-- E: . -->

                    <!-- E: . -->
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-sm-pull-4 col-md-pull-4">
                    <div class="blog blogpost">
                        <article class="type-post">
                            <div class="entry-author"></div>
                            <div class="entry-title">
                                <h3>Here are some pictures of our jobs Electric did </h3>
                            </div>
                            <div class="entry-cover">
                                <img class="img-responsive" src="/images/blog.png" alt="image">
                            </div>
                            <div class="entry-content">
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt
                                </p>
                                <h4 class="tt06">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him </p>
                                <h4 class="tt06">The standard Lorem Ipsum passage, used since the 1500s</h4>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                            </div>
                            <div class="entry-meta">
                                <label>SHARE:</label>
                                <div class="post-share">
                                    <ul>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i> </a> </li>
                                        <li><a href="#" title="instagram"><i class="fa fa-instagram"></i> </a> </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <!-- E: article.type-post -->
                    </div>
                </div>
                </div>
                </div>
                </div>
                <!-- E: . -->
                </div>




            
@endsection
