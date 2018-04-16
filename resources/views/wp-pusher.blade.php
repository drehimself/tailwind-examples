<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WP Pusher</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="/css/wp-pusher.css">
</head>
<body class="bg-grey-lighter font-wp-pusher antialiased">
  <div class="nav-container mx-16">
    <div class="navbar flex flex-col md:flex-row justify-between items-center border-b-2 border-grey-light py-8 mb-16">
      <a href="#" class="mb-4 md:mb-0"><img src="/img/wp-pusher/logo.png" alt="logo"></a>
      <div class="flex flex-col md:flex-row font-bold text-sm">
        <div class="mb-2 md:mb-0">
          <a href="#" class="hover:text-grey-darker">Download</a>
        </div>
        <div class="ml-0 md:ml-10 mb-2 md:mb-0">
          <a href="#" class="hover:text-grey-darker">Learn More</a>
        </div>
        <div class="ml-0 md:ml-10 mb-2 md:mb-0">
          <a href="#" class="hover:text-grey-darker">Pricing</a>
        </div>
        <div class="ml-0 md:ml-10 mb-8 md:mb-0">
          <a href="#" class="hover:text-grey-darker">Help</a>
        </div>
        <div class="ml-0 md:ml-10 mb-2 md:mb-0">
          <a href="#" class="px-4 py-3 rounded-lg border-2 border-black hover:bg-black hover:text-white">Account</a>
        </div>
      </div>
    </div> <!-- end navbar -->
  </div> <!-- end nav-container -->

  <div class="checkout max-w-wp-pusher mx-auto">
    <div class="panel flex flex-col md:flex-row mb-8 shadow-lg">
      <div class="panel-left w-full md:w-2/3 bg-white rounded-l">
        <form action="#">
          <h1 class="text-3xl font-normal p-10 border-b border-grey-light">Checkout</h1>
          <div class="p-10 pt-8 border-b border-grey-light">
            <div class="flex items-center mb-4">
              <div class="border-2 border-blue-wp-pusher py-2 px-3 rounded-full font-bold mr-2 text-blue-wp-pusher">1</div>
              <h2 class="text-lg">Your Basic Information</h2>
            </div>

            <div class="flex flex-wrap">
              <div class="w-3/4 md:w-1/2-almost mb-4 md:mb-0">
                <label for="first_name" class="block text-sm mb-2">First Name</label>
                <input id="first_name" type="text" class="w-full text-sm bg-grey-light text-grey-darkest rounded px-3 py-3 outline-0">
              </div>
              <div class="w-3/4 md:w-1/2-almost mb-4 ml-0 md:ml-4">
                <label for="last_name" class="block text-sm mb-2">Last Name</label>
                <input id="last_name" type="text" class="w-full text-sm bg-grey-light text-grey-darkest rounded px-3 py-3 outline-0">
              </div>
              <div class="w-3/4">
                <label for="email" class="block text-sm mb-2">E-mail</label>
                <input id="email" type="email" class="w-full text-sm bg-grey-light text-grey-darkest rounded px-3 py-3 outline-0">
              </div>
            </div>
          </div>

          <div class="p-10 pt-8 border-b border-grey-light">
            <div class="flex items-center mb-4">
              <div class="border-2 border-blue-wp-pusher py-2 px-3 rounded-full font-bold mr-2 text-blue-wp-pusher">2</div>
              <h2 class="text-lg">Your Payment Information</h2>
            </div>
            <div class="w-full">
              <label for="payment" class="block text-sm mb-2">Credit Card</label>
              <input id="payment" type="text" class="w-full text-sm bg-grey-light text-grey-darkest rounded px-3 py-3 outline-0">
            </div>
          </div>

          <div class="p-10 pt-8">
            <button type="submit" class="bg-green-wp-pusher text-white w-full rounded px-4 py-4 mb-6 text-lg hover:bg-green-dark">Buy WP Pusher</button>
            <div class="flex items-center justify-center mb-8">
              <svg class="mr-2" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Mask</title>
                <desc>Created with Sketch.</desc>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-386.000000, -863.000000)" fill="#548BC5" fill-rule="nonzero">
                    <g transform="translate(262.000000, 186.000000)">
                      <g transform="translate(49.000000, 602.000000)">
                        <g transform="translate(75.000000, 75.000000)">
                          <path d="M10,20 C4.4771525,20 0,15.5228475 0,10 C0,4.4771525 4.4771525,0 10,0 C15.5228475,0 20,4.4771525 20,10 C20,15.5228475 15.5228475,20 10,20 Z M10,18 C14.418278,18 18,14.418278 18,10 C18,5.581722 14.418278,2 10,2 C5.581722,2 2,5.581722 2,10 C2,14.418278 5.581722,18 10,18 Z M8.58578644,6.58578644 C8.19526215,6.97631073 7.56209717,6.97631073 7.17157288,6.58578644 C6.78104858,6.19526215 6.78104858,5.56209717 7.17157288,5.17157288 C8.73367004,3.60947571 11.26633,3.60947571 12.8284271,5.17157288 C14.3905243,6.73367004 14.3905243,9.26632996 12.8279866,10.8288674 L10.7066662,12.9475468 C10.3158988,13.3378278 9.6827339,13.3374334 9.29245293,12.946666 C8.90217195,12.5558985 8.90256633,11.9227337 9.29333378,11.5324527 L11.4142136,9.41421356 C12.1952621,8.63316498 12.1952621,7.36683502 11.4142136,6.58578644 C10.633165,5.80473785 9.36683502,5.80473785 8.58578644,6.58578644 Z M10,16 C9.44771525,16 9,15.5522847 9,15 C9,14.4477153 9.44771525,14 10,14 C10.5522847,14 11,14.4477153 11,15 C11,15.5522847 10.5522847,16 10,16 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
              <div>
                <span class="font-bold">Need any help?</span>
                <span class="text-grey-darker">Don't hesitate to <a href="#" class="text-grey-darker underline">contact support</a>!</span>
              </div>
            </div>
            <div class="text-center">
              <img src="/img/wp-pusher/powered_by_stripe.png" alt="stripe">
            </div>
          </div>
        </form>
      </div> <!-- end panel-left -->
      <div class="panel-right w-full md:w-1/3 bg-blue-wp-pusher text-white rounded-r">
        <div class="p-10">
          <h2 class="font-bold text-xl mb-4">Freelancer</h2>
          <div class="mb-4">
            <span class="text-2xl align-top">$</span>
            <span class="text-5.5xl font-light lh-fix">99</span>
            <span class="text-lg">/ year</span>
          </div>
          <div class="italic w-3/4 leading-normal mb-8">
            Automatically renews after 1 year
          </div>
          <div class="list-items mb-8">
            <div class="flex items-center mb-4">
              <svg class="mr-2" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-887.000000, -489.000000)" fill="#B9F5FF">
                    <g transform="translate(262.000000, 186.000000)">
                      <g transform="translate(580.000000, 0.000000)">
                        <g transform="translate(44.000000, 42.000000)">
                          <g transform="translate(1.000000, 188.000000)">
                            <path d="M10,93 C4.4771525,93 0,88.5228475 0,83 C0,77.4771525 4.4771525,73 10,73 C15.5228475,73 20,77.4771525 20,83 C20,88.5228475 15.5228475,93 10,93 Z M10,91 C14.418278,91 18,87.418278 18,83 C18,78.581722 14.418278,75 10,75 C5.581722,75 2,78.581722 2,83 C2,87.418278 5.581722,91 10,91 Z M7.70710678,82.2928932 L9,83.5857864 L12.2928932,80.2928932 C12.6834175,79.9023689 13.3165825,79.9023689 13.7071068,80.2928932 C14.0976311,80.6834175 14.0976311,81.3165825 13.7071068,81.7071068 L9.70710678,85.7071068 C9.31658249,86.0976311 8.68341751,86.0976311 8.29289322,85.7071068 L6.29289322,83.7071068 C5.90236893,83.3165825 5.90236893,82.6834175 6.29289322,82.2928932 C6.68341751,81.9023689 7.31658249,81.9023689 7.70710678,82.2928932 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
              <div>Use on <span class="font-bold">5</span> client sites</div>
            </div>
            <div class="flex items-center mb-4">
              <svg class="mr-2" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-887.000000, -489.000000)" fill="#B9F5FF">
                    <g transform="translate(262.000000, 186.000000)">
                      <g transform="translate(580.000000, 0.000000)">
                        <g transform="translate(44.000000, 42.000000)">
                          <g transform="translate(1.000000, 188.000000)">
                            <path d="M10,93 C4.4771525,93 0,88.5228475 0,83 C0,77.4771525 4.4771525,73 10,73 C15.5228475,73 20,77.4771525 20,83 C20,88.5228475 15.5228475,93 10,93 Z M10,91 C14.418278,91 18,87.418278 18,83 C18,78.581722 14.418278,75 10,75 C5.581722,75 2,78.581722 2,83 C2,87.418278 5.581722,91 10,91 Z M7.70710678,82.2928932 L9,83.5857864 L12.2928932,80.2928932 C12.6834175,79.9023689 13.3165825,79.9023689 13.7071068,80.2928932 C14.0976311,80.6834175 14.0976311,81.3165825 13.7071068,81.7071068 L9.70710678,85.7071068 C9.31658249,86.0976311 8.68341751,86.0976311 8.29289322,85.7071068 L6.29289322,83.7071068 C5.90236893,83.3165825 5.90236893,82.6834175 6.29289322,82.2928932 C6.68341751,81.9023689 7.31658249,81.9023689 7.70710678,82.2928932 Z" id="Combined-Shape-Copy-2"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
              <div>Private Repositories</div>
            </div>
            <div class="flex items-center mb-4">
              <svg class="mr-2" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-887.000000, -489.000000)" fill="#B9F5FF">
                    <g transform="translate(262.000000, 186.000000)">
                      <g transform="translate(580.000000, 0.000000)">
                        <g transform="translate(44.000000, 42.000000)">
                          <g transform="translate(1.000000, 188.000000)">
                            <path d="M10,93 C4.4771525,93 0,88.5228475 0,83 C0,77.4771525 4.4771525,73 10,73 C15.5228475,73 20,77.4771525 20,83 C20,88.5228475 15.5228475,93 10,93 Z M10,91 C14.418278,91 18,87.418278 18,83 C18,78.581722 14.418278,75 10,75 C5.581722,75 2,78.581722 2,83 C2,87.418278 5.581722,91 10,91 Z M7.70710678,82.2928932 L9,83.5857864 L12.2928932,80.2928932 C12.6834175,79.9023689 13.3165825,79.9023689 13.7071068,80.2928932 C14.0976311,80.6834175 14.0976311,81.3165825 13.7071068,81.7071068 L9.70710678,85.7071068 C9.31658249,86.0976311 8.68341751,86.0976311 8.29289322,85.7071068 L6.29289322,83.7071068 C5.90236893,83.3165825 5.90236893,82.6834175 6.29289322,82.2928932 C6.68341751,81.9023689 7.31658249,81.9023689 7.70710678,82.2928932 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
              <div>Email Support</div>
            </div>
          </div> <!-- end list-items -->
          <div class="mb-10 pb-2">
            <div class="mb-2">Need <span class="font-bold">20</span> clients?</div>
            <a href="#" class="text-white font-bold border-b-2 border-blue-light">Switch to the Agency plan.</a>
          </div>

          <div class="border-b border-blue-light"></div>

          <div class="testimonial pt-10 text-lg italic leading-normal mb-4">
            FTP is horrible to deal with. <span class="font-bold">WP Pusher</span> solves that issue, and the customer support is awesome!
          </div>

          <div class="flex items-center">
            <img src="/img/wp-pusher/avatar.png" alt="avatar" class="rounded-full mr-2">
            <div class="text-lg font-bold">Kirk Beard</div>
          </div>
        </div>
      </div>
    </div> <!-- end panel -->
    <div class="copyright text-grey-dark text-center text-sm mb-8">
      &copy; 2018 WP Pusher IVS &middot; <a href="#" class="text-blue-wp-pusher">Terms of Service</a>
    </div>
  </div> <!-- end checkout -->
</body>
</html>
