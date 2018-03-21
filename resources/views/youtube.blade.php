<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tailwind Example - YouTube</title>
  <link rel="stylesheet" href="/css/youtube.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body class="bg-grey-lighter">
  <div class="top-bar bg-white shadow grid grid-columns-12 px-8 py-3">
    <div class="col-span-12 lg:col-span-2 flex items-center">
      <div class="mr-8"><a href="#"><i class="fa fa-bars text-grey-dark"></i></a></div>
      <div><a href="#"><svg viewBox="0 0 200 60" preserveAspectRatio="xMidYMid meet" focusable="false" class="w-24 style-scope ytd-topbar-logo-renderer"><g viewBox="0 0 200 60" preserveAspectRatio="xMidYMid meet" class="style-scope ytd-topbar-logo-renderer">
              <g class="style-scope ytd-topbar-logo-renderer">
                <path fill="#FF0000" d="M63,14.87c-0.72-2.7-2.85-4.83-5.56-5.56C52.54,8,32.88,8,32.88,8S13.23,8,8.32,9.31
                  c-2.7,0.72-4.83,2.85-5.56,5.56C1.45,19.77,1.45,30,1.45,30s0,10.23,1.31,15.13c0.72,2.7,2.85,4.83,5.56,5.56
                  C13.23,52,32.88,52,32.88,52s19.66,0,24.56-1.31c2.7-0.72,4.83-2.85,5.56-5.56C64.31,40.23,64.31,30,64.31,30
                  S64.31,19.77,63,14.87z" class="style-scope ytd-topbar-logo-renderer"></path>
                <polygon fill="#FFFFFF" points="26.6,39.43 42.93,30 26.6,20.57" class="style-scope ytd-topbar-logo-renderer"></polygon>
              </g>
              <g class="style-scope ytd-topbar-logo-renderer">
                <g id="youtube-paths" class="style-scope ytd-topbar-logo-renderer">
                  <path fill="#282828" d="M92.69,48.03c-1.24-0.84-2.13-2.14-2.65-3.91c-0.52-1.77-0.79-4.12-0.79-7.06v-4
                    c0-2.97,0.3-5.35,0.9-7.15c0.6-1.8,1.54-3.11,2.81-3.93c1.27-0.82,2.94-1.24,5.01-1.24c2.04,0,3.67,0.42,4.9,1.26
                    c1.23,0.84,2.13,2.15,2.7,3.93c0.57,1.78,0.85,4.16,0.85,7.12v4c0,2.94-0.28,5.3-0.83,7.08c-0.55,1.78-1.45,3.09-2.7,3.91
                    c-1.24,0.82-2.93,1.24-5.06,1.24C95.65,49.29,93.93,48.87,92.69,48.03z M99.66,43.71c0.34-0.9,0.52-2.37,0.52-4.4v-8.59
                    c0-1.98-0.17-3.42-0.52-4.34c-0.34-0.91-0.95-1.37-1.82-1.37c-0.84,0-1.43,0.46-1.78,1.37c-0.34,0.91-0.52,2.36-0.52,4.34v8.59
                    c0,2.04,0.16,3.51,0.49,4.4c0.33,0.9,0.93,1.35,1.8,1.35C98.71,45.06,99.31,44.61,99.66,43.71z" class="style-scope ytd-topbar-logo-renderer"></path>
                  <path fill="#282828" d="M188.16,37.13v1.39c0,1.77,0.05,3.09,0.16,3.98c0.1,0.88,0.32,1.53,0.65,1.93
                    c0.33,0.4,0.84,0.61,1.53,0.61c0.93,0,1.57-0.36,1.91-1.08c0.34-0.72,0.53-1.92,0.56-3.6l5.35,0.31
                    c0.03,0.24,0.04,0.57,0.04,0.99c0,2.55-0.7,4.45-2.09,5.71c-1.39,1.26-3.36,1.89-5.91,1.89c-3.06,0-5.2-0.96-6.43-2.88
                    c-1.23-1.92-1.84-4.88-1.84-8.9v-4.81c0-4.14,0.64-7.15,1.91-9.06c1.27-1.9,3.45-2.85,6.54-2.85c2.13,0,3.76,0.39,4.9,1.17
                    c1.14,0.78,1.94,1.99,2.41,3.64c0.46,1.65,0.7,3.93,0.7,6.83v4.72H188.16z M188.95,25.53c-0.31,0.39-0.52,1.03-0.63,1.91
                    c-0.11,0.88-0.16,2.23-0.16,4.02v1.98h4.54v-1.98c0-1.77-0.06-3.11-0.18-4.02c-0.12-0.91-0.34-1.56-0.65-1.93
                    c-0.31-0.37-0.8-0.56-1.46-0.56C189.75,24.94,189.26,25.14,188.95,25.53z" class="style-scope ytd-topbar-logo-renderer"></path>
                  <path fill="#282828" d="M77.59,36.61l-7.06-25.49h6.16l2.47,11.55c0.63,2.85,1.09,5.27,1.39,7.28h0.18
                    c0.21-1.44,0.67-3.85,1.39-7.24l2.56-11.6h6.16L83.7,36.61v12.23h-6.11V36.61z" class="style-scope ytd-topbar-logo-renderer"></path>
                  <path fill="#282828" d="M126.45,21.28v27.55h-4.85l-0.54-3.37h-0.13c-1.32,2.55-3.3,3.82-5.93,3.82c-1.83,0-3.18-0.6-4.05-1.8
                    c-0.87-1.2-1.3-3.07-1.3-5.62V21.28h6.2v20.23c0,1.23,0.13,2.11,0.4,2.63c0.27,0.52,0.72,0.79,1.35,0.79
                    c0.54,0,1.06-0.16,1.55-0.49c0.49-0.33,0.86-0.75,1.1-1.26V21.28H126.45z" class="style-scope ytd-topbar-logo-renderer"></path>
                  <path fill="#282828" d="M158.27,21.28v27.55h-4.85l-0.54-3.37h-0.13c-1.32,2.55-3.3,3.82-5.93,3.82c-1.83,0-3.18-0.6-4.05-1.8
                    c-0.87-1.2-1.3-3.07-1.3-5.62V21.28h6.2v20.23c0,1.23,0.13,2.11,0.4,2.63c0.27,0.52,0.72,0.79,1.35,0.79
                    c0.54,0,1.06-0.16,1.55-0.49c0.49-0.33,0.86-0.75,1.1-1.26V21.28H158.27z" class="style-scope ytd-topbar-logo-renderer"></path>
                  <path fill="#282828" d="M143.31,16.11h-6.16v32.72h-6.07V16.11h-6.16v-4.99h18.38V16.11z" class="style-scope ytd-topbar-logo-renderer"></path>
                  <path fill="#282828" d="M178.8,25.69c-0.38-1.74-0.98-3-1.82-3.78c-0.84-0.78-1.99-1.17-3.46-1.17c-1.14,0-2.2,0.32-3.19,0.97
                    c-0.99,0.64-1.75,1.49-2.29,2.54h-0.05l0-14.52h-5.98v39.11h5.12l0.63-2.61h0.13c0.48,0.93,1.2,1.66,2.16,2.2
                    c0.96,0.54,2.02,0.81,3.19,0.81c2.1,0,3.64-0.97,4.63-2.9c0.99-1.93,1.48-4.95,1.48-9.06v-4.36
                    C179.36,29.84,179.17,27.43,178.8,25.69z M173.11,36.93c0,2.01-0.08,3.58-0.25,4.72c-0.16,1.14-0.44,1.95-0.83,2.43
                    c-0.39,0.48-0.91,0.72-1.57,0.72c-0.51,0-0.98-0.12-1.42-0.36c-0.43-0.24-0.79-0.6-1.06-1.08V27.71
                    c0.21-0.75,0.57-1.36,1.08-1.84c0.51-0.48,1.06-0.72,1.66-0.72c0.63,0,1.12,0.25,1.46,0.74c0.34,0.49,0.58,1.33,0.72,2.49
                    c0.13,1.17,0.2,2.83,0.2,4.99V36.93z" class="style-scope ytd-topbar-logo-renderer"></path>
                </g>
              </g>
            </g></svg></a></div>

    </div>
    <div class="col-span-12 lg:col-span-10 flex flex-col lg:flex-row items-center justify-between">
      <div>
        <form action="#" class="flex">
          <input type="text" class="border border-grey py-2 px-2 w-64 lg:w-128" placeholder="Search">
          <button type="submit" class="border-t border-r border-b border-grey py-2 px-6 bg-grey-lighter hover:bg-grey-light">
            <i class="fa fa-search text-grey-darker"></i>
          </button>
        </form>
      </div>
      <div class="flex items-center mt-4 lg:mt-0">
        <a href="#"><i class="fa fa-upload text-grey-dark mr-8"></i></a>
        <a href="#"><i class="fa fa-calendar text-grey-dark mr-8"></i></a>
        <a href="#"><i class="fa fa-bell text-grey-dark mr-8"></i></a>
        <a href="#"><img src="/img/youtube/avatar-top.jpg" alt="avatar" class="rounded-full w-8"></a>
      </div>
    </div>

  </div> <!-- end top-bar -->

  <div class="youtube-body grid grid-columns-12">
    <div class="left-sidebar col-span-12 lg:col-span-2 py-6 bg-grey-custom min-h-screen">
      <div class="mb-6">
        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-home fa-lg fa-fw text-red mr-4"></i>
          <span class="font-semibold text-sm">Home</span>
        </a>
        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-fire fa-lg fa-fw text-grey-dark mr-4"></i>
          <span class="font-normal text-sm">Trending</span>
        </a>
        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-list fa-lg fa-fw text-grey-dark mr-4"></i>
          <span class="font-normal text-sm">Subscriptions</span>
        </a>
      </div>

      <div class="mb-6">
        <div class="uppercase px-6 text-grey-darkest text-sm mb-4">Library</div>

        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-clock-o fa-lg fa-fw text-grey-dark mr-4"></i>
          <div class="text-sm">Subscriptions</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-hourglass-o fa-lg fa-fw text-grey-dark mr-4"></i>
          <div class="text-sm">Watch Later</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-tag fa-lg fa-fw text-grey-dark mr-4"></i>
          <div class="text-sm">Purchases</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-list-ul fa-lg fa-fw text-grey-dark mr-4"></i>
          <div class="text-sm">Laravel Ecommerce</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-thumbs-up fa-lg fa-fw text-grey-dark mr-4"></i>
          <div class="text-sm">Liked Videos</div>
        </a>
      </div>

      <div class="mb-6">
        <div class="uppercase px-6 text-grey-darkest text-sm mb-4">Subscriptions</div>

        <a href="#" class="flex items-center py-3 px-6 text-black transition-slow hover:bg-grey">
          <img src="/img/youtube/avatar1.jpg" alt="avatar" class="rounded-full w-6 mr-5">
          <div class="text-sm">freeCodeCamp</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 text-black transition-slow hover:bg-grey">
          <img src="/img/youtube/avatar2.jpg" alt="avatar" class="rounded-full w-6 mr-5">
          <div class="text-sm">John Doe</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 text-black transition-slow hover:bg-grey">
          <img src="/img/youtube/avatar3.jpg" alt="avatar" class="rounded-full w-6 mr-5">
          <div class="text-sm">Jeffrey Way</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 text-black transition-slow hover:bg-grey">
          <img src="/img/youtube/avatar4.jpg" alt="avatar" class="rounded-full w-6 mr-5">
          <div class="text-sm">Adam Wathan</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 text-black transition-slow hover:bg-grey">
          <img src="/img/youtube/avatar5.jpg" alt="avatar" class="rounded-full w-6 mr-5">
          <div class="text-sm">Barack Obama</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 text-black transition-slow hover:bg-grey">
          <img src="/img/youtube/avatar6.jpg" alt="avatar" class="rounded-full w-6 mr-5">
          <div class="text-sm">Aubrey Graham</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 text-black transition-slow hover:bg-grey">
          <img src="/img/youtube/avatar7.jpg" alt="avatar" class="rounded-full w-6 mr-5">
          <div class="text-sm">Demar DeRozan</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 text-black transition-slow hover:bg-grey">
          <img src="/img/youtube/avatar8.jpg" alt="avatar" class="rounded-full w-6 mr-5">
          <div class="text-sm">Lebron James</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 text-black transition-slow hover:bg-grey">
          <img src="/img/youtube/avatar9.jpg" alt="avatar" class="rounded-full w-6 mr-5">
          <div class="text-sm">Casey Neistat</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-chevron-down fa-fw text-grey-dark mr-8"></i>
          <div class="text-sm">Show 140 more</div>
        </a>
      </div>

      <div class="mb-6">
        <div class="uppercase px-6 text-grey-darkest text-sm mb-4">More From YouTube</div>

        <a href="#" class="flex items-center py-3 px-6 mb-6 text-black transition-slow hover:bg-grey">
          <i class="fa fa-film fa-lg fa-fw text-grey-dark mr-4"></i>
          <div class="text-sm">YouTube Movies</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-cog fa-lg fa-fw text-grey-dark mr-4"></i>
          <div class="text-sm">Settings</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-question-circle fa-lg fa-fw text-grey-dark mr-4"></i>
          <div class="text-sm">Help</div>
        </a>

        <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition-slow hover:bg-grey">
          <i class="fa fa-exclamation-triangle fa-lg fa-fw text-grey-dark mr-4"></i>
          <div class="text-sm">Send Feedback</div>
        </a>

      </div>

      <div class="px-6 text-sm text-grey-darker">&copy; 2018 YouTube, LLC</div>
    </div> <!-- end left-sidebar -->

    <div class="youtube-videos col-span-12 lg:col-span-10 container mx-auto py-6">
      <div class="font-semibold mb-6">
        Recommended
      </div>
      <div class="grid grid-columns-1 lg:grid-columns-5 grid-gap-2 mb-6">
        <div>
            <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
            <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
            <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
            <span class="text-sm text-grey-dark">618K views &middot; 2 days ago</span>

        </div>
        <div>
            <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
            <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
            <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
            <span class="text-sm text-grey-dark">618K views &middot; 2 days ago</span>
        </div>
        <div>
            <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
            <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
            <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
            <span class="text-sm text-grey-dark">618K views &middot; 2 days ago</span>
        </div>
        <div>
          <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
            <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
            <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
            <span class="text-sm text-grey-dark">618K views &middot; 2 days ago</span>
        </div>
        <div>
            <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
            <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
            <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
            <span class="text-sm text-grey-dark">618K views &middot; 2 days ago</span>
        </div>
      </div>
      <div class="grid grid-columns-1 lg:grid-columns-5 grid-gap-2 mb-6">
        <div>
            <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
            <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
            <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
            <span class="text-sm text-grey-dark">618K views &middot; 2 days ago</span>
        </div>
        <div>
            <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
            <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
            <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
            <span class="text-sm text-grey-dark">618K views &middot; 2 days ago</span>
        </div>
        <div>
            <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
            <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
            <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
            <span class="text-sm text-grey-dark">618K views &middot; 2 days ago</span>
        </div>
        <div>
            <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
            <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
            <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
            <span class="text-sm text-grey-dark">618K views &middot; 2 days ago</span>
        </div>
        <div>
            <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
            <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
            <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
            <span class="text-sm text-grey-dark">618K views &middot; 2 days ago</span>
        </div>
      </div>

      <div class="mb-6">
        <a href="#" class="text-sm text-grey-dark uppercase">Show More</a>
      </div>

      <div class="border-b border-solid mb-6"></div>

      <div class="flex justify-between items-center mb-6">
        <div class="flex items-center">
          <a href="#"><img src="/img/youtube/avatar1.jpg" alt="avatar" class="rounded-full w-8 mr-2"></a>
          <a href="#" class="font-semibold text-black">TubeBuddy</a>
        </div>
        <a href="#"><div class="text-2xl font-light text-grey-dark hover:text-grey-darkest">&times;</div></a>
      </div>

      <div class="grid grid-columns-1 lg:grid-columns-5 grid-gap-2 mb-6">
        <div>
          <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
          <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
          <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
          <div class="text-sm text-grey-dark">618K views &middot; 2 days ago</div>
        </div>

        <div>
          <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
          <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
          <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
          <div class="text-sm text-grey-dark">618K views &middot; 2 days ago</div>
        </div>

        <div>
          <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
          <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
          <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
          <div class="text-sm text-grey-dark">618K views &middot; 2 days ago</div>
        </div>

        <div>
          <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
          <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
          <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
          <div class="text-sm text-grey-dark">618K views &middot; 2 days ago</div>
        </div>

        <div>
          <a href="#"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
          <div class="text-sm mb-2"><a href="#" class="text-black">PIGGY PIGGY DUDE ON NIGHTMARE MODE!!</a></div>
          <div class="text-sm"><a href="#" class="text-grey-dark hover:text-black">DashieGames <i class="fa fa-check-circle"></i></a></div>
          <div class="text-sm text-grey-dark">618K views &middot; 2 days ago</div>
        </div>

      </div>

      <div class="border-b border-solid mb-6"></div>

      <div class="flex justify-between items-center mb-6">
        <div class="flex items-center">
          <a href="#"><img src="/img/youtube/avatar2.jpg" alt="avatar" class="rounded-full w-8 mr-2"></a>
          <a href="#" class="font-semibold text-black">Andre Madarang</a>
        </div>
        <a href="#"><div class="text-2xl font-light text-grey-dark hover:text-grey-darkest">&times;</div></a>
      </div>

      <div class="flex flex-col lg:flex-row">
        <a href="#" class="mr-4"><img src="/img/youtube/thumbnail01.jpg" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
        <div class="w-128 max-w-full">
          <div class="mb-1"><a href="#" class="text-black">Machine Learning Tutorial for Beginners - USING JAVASCRIPT!</a></div>
          <div class="text-sm mb-3"><a href="#" class="text-grey-dark hover:text-black">DashieGames &middot; 12K views &middot; 3 months ago <i class="fa fa-check-circle"></i></a></div>
          <div class="text-sm"><a href="#" class="text-grey-dark leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad temporibus explicabo, possimus labore non atque eveniet id modi inventore reprehenderit deleniti. Porro alias illo minima ratione. Quos possimus, natus.</a></div>
        </div>

      </div>

    </div> <!-- end youtube-videos -->

  </div> <!-- end youtube-body -->
</body>
</html>
