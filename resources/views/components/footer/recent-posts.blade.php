<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="widget recent-posts-entry-date">
        <h4 class="widget-title">Recent Posts</h4>
        <div class="widget-post-bx">
            @php
                // Sample recent posts - you can replace with actual data from database
                $recent_posts = [
                    [
                        'date' => '24',
                        'month' => 'April',
                        'year' => '2023',
                        'title' => 'On these beams, we\'re building dreams.',
                        'comments' => 28
                    ],
                    [
                        'date' => '30',
                        'month' => 'May',
                        'year' => '2023',
                        'title' => 'We\'ll be a sensation for you next renovation',
                        'comments' => 29
                    ]
                ];
            @endphp

            @foreach($recent_posts as $post)
                <div class="bdr-light-blue widget-post clearfix bdr-b-1 m-b10 p-b10">
                    <div class="mt-post-date text-center text-uppercase text-white p-tb5">
                        <strong class="p-date">{{ $post['date'] }}</strong>
                        <span class="p-month">{{ $post['month'] }}</span>
                        <span class="p-year">{{ $post['year'] }}</span>
                    </div>
                    <div class="mt-post-info">
                        <div class="mt-post-header">
                            <h6 class="post-title">
                                <a href="javascript:void(0)">{{ $post['title'] }}</a>
                            </h6>
                        </div>
                        <div class="mt-post-meta">
                            <ul>
                                <li class="post-author"><i class="fa fa-user"></i> By Admin</li>
                                <li class="post-comment"><i class="fa fa-comments"></i> {{ $post['comments'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
