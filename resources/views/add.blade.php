<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link
   rel="stylesheet"
   href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css"/>
    
</head>

<body class="bg-image h-screen flex flex-col">

<div class="navbar">
	<div class="navbar-start">
		<a class="navbar-item  text-amber-400  hover:text-gray-700" href="home">PRIME TRS HOSTEL</a>
	</div>
	<div class="navbar-end">
		<a class="my-1 text-amber-400 font-medium md:mx-4 md:my-0 hover:text-gray-700" href="home">Home</a>
		
        <a class="my-1 text-amber-400 font-medium md:mx-4 md:my-0 hover:text-gray-700" href="addData">Contact</a>
	</div>
</div>
<div class="h-screen flex items-center justify-center bg-black">
<div class="container mx-auto">
<section class="bg-gray-2 rounded-xl">
	<div class="p-8 shadow-lg">
		<form class="space-y-4">
			<div class="w-full">
				<label class="sr-only" for="name">Name</label>
				<input class="input input-solid max-w-full" placeholder="Name" type="text" id="name" />
			</div>

			<div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
				<div>
					<label class="sr-only" for="email">Email</label>
					<input class="input input-solid" placeholder="Email address" type="email" id="email" />
				</div>

				<div>
					<label class="sr-only" for="phone">Phone</label>
					<input class="input input-solid" placeholder="Phone Number" type="tel" id="phone" />
				</div>
			</div>

			<div class="w-full">
				<label class="sr-only" for="message">Message</label>

				<textarea class="textarea textarea-solid max-w-full" placeholder="Message" rows="8" id="message"></textarea>
			</div>

			<div class="mt-4">
				<!-- <button type="button" class="rounded-lg btn btn-primary btn-block bg-blue-100 ">Send Enquiry</button> -->
                <a href="/hostel"
            class="mt-8 px-6 py-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 text-lg font-semibold transition duration-300">SEND</a>

</button>
			</div>
		</form>
	</div>
</section>
</div>
</div>