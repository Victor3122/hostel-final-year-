<!-- <!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
</head>
<body>
<div class="bg-white">
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">TRS Hostel</span>
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">TRS MENU</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="/cookie" class="text-sm font-semibold leading-6 text-gray-900">Hostel</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">joyful Joyful We adore thee</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      >
      </div>
    </nav>

    <div class="lg:hidden" role="dialog" aria-modal="true">
     
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">TRS PRIME HOSTEL</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Canncel</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
            Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
        <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Hostel Registration Website</h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">Welcome to TRS Hostel</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/cookie" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
            <a href="/cookie" class="text-sm font-semibold leading-6 text-gray-900">View Room<span aria-hidden="true">→</span></a>
            </div>
        </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
    </div>
        <div class="container mx-auto">
        
        <h3>Rooms</h3>
        <ul role="list" class="divide-y divide-gray-100">
            @foreach($hostel as $hosteled)
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://www.allrecipes.com/thmb/t23d-TvzuurCM5H64VwgULUlh7c=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/4462051-448e9227c9f34204b2413fd7802a73d8.jpg" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $hosteled->name }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $hosteled->profile_detail }}</p>
                    </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">By TRS</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Date <time datetime="2023-01-23T13:23Z">1-1-2023</time></p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html> -->
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
   rel="stylesheet"
   href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css"
/>


  <!-- <style>
    .bg-my-background {
      background-image: url('/img/hostel1.jpg');
      background-size: cover;
      background-position: center;
    } -->
  </style>
</head>

<body>
<div class="navbar">
	<div class="navbar-start">
		<a class="navbar-item  text-amber-400" href="home">PRIME TRS HOSTEL</a>
	</div>
	<div class="navbar-end">
		<a class="my-1 text-amber-400 font-medium md:mx-4 md:my-0 hover:text-gray-700" href="home">Home</a>
		
    <a class="my-1 text-amber-400 font-medium md:mx-4 md:my-0 hover:text-gray-700" href="addData">Contact</a>
	</div>
</div>


  <div class="h-screen flex items-center justify-center bg-black">
    <div class="container mx-auto">
      <div class="flex w-full overflow-x-auto justify-center">
        <table class="table-compact table max-w-4xl table-fixed bg-transparent">
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Profile</th>
            </tr>
          </thead>
          <tbody>
            @foreach($hostel as $row)
            <tr>
              <td>{{ $row->id }}</td>
              <td>{{ $row->name }}</td>
              <td><button>{{ $row->profile_detail }}</button></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>


    </div>
  </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>

</body>

</html>



