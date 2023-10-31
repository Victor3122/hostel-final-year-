<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css"/>
	<style>
		/* body {
			background-image: url('https://images.unsplash.com/photo-1558980664-1d8d03b7f9a5');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			height: 100vh;
		} */
	</style>
</head>
<body class="bg-image h-screen flex flex-col">

<div class="navbar">
	<div class="navbar-start">
		<a class="navbar-item text-amber-400 hover:text-gray-700" href="home">PRIME TRS HOSTEL</a>
	</div>
	<div class="navbar-end">
		<a class="my-1 text-amber-400 font-medium md:mx-4 md:my-0 hover:text-gray-700" href="home">Home</a>
        <a class="my-1 text-amber-400 font-medium md:mx-4 md:my-0 hover:text-gray-700" href="addData">Contact</a>
	</div>
</div>

<div class="flex-grow flex justify-center items-center bg-black">
    <div class="text-center text-white">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to Our Hostel!</h1>
        <p class="text-xl md:text-2xl">TRS PRIME HOSTEL.</br>We gather, we love, we enjoy.</p></br>
        <a href="/hostel"
            class="mt-8 px-6 py-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 text-lg font-semibold transition duration-300">Get Started</a>
    </div>
</div>

<hr>

<div class="accordion-group accordion-group-hover bg-black">
    <div class="accordion">
        <input type="checkbox" id="toggle-5" class="accordion-toggle" />
        <label for="toggle-5" class="accordion-title text-white">ABOUT US</label>
        <div class="accordion-content text-content2">
            <div class="min-h-0">Welcome to TRS PRIME HOSTEL, where every student's home away from home is a heartbeat away. Our mission is to provide comfortable, affordable, and safe accommodation to students who are embarking on their academic journeys.

We understand the unique needs of students, and that's why TRS PRIME HOSTEL has become the preferred choice for hundreds of students. Our prime location, friendly atmosphere, and reasonable pricing are just a few of the reasons why we're the first choice for students seeking a place to live and grow.</div>
        </div>
    </div>
</div>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src='https://unpkg.com/ripple-ui@0.0.6/dist/ripple-ui.min.js'></script>

</body>
</html>
