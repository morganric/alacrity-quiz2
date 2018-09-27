<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">

		<h1>Quiz2 Answers</h1>
		<hr/>

		<h2>Part 1</h2>
		<ol>

		<li>GET parameters are appended explicity to the destination url in the address bar whereas post parameters are hidden within the header of the outgoing POST request packet.</li>

		<li>Whether or not you are sumbiting data or requesting data with your form. </li>

		i.e. A search form might post a query parameter to a results page via a controller that would have access to the parameter (publicly) to run a database / search query for the results. Whereas a Model (post) create / update form might use POST parameters for the form submission post request to sent data to be updated / inserted into the DB or stored / processed server-side.

		<li>The default is GET method</li>

		<li>To change to a post you would change the form's method attribute to POST i.e.

		<code><form method="POST" action="/some.postable.route" ></form></code>

		<li>
			
		<form id="" action="{{ route('cars.handle') }}" method="POST">
			@csrf
			<label for="name">Car Name</label>
			<input type="text" name="name" id="name" />
			<label for="age">Car Age</label>
			<input	type="number" name="age" id="age" />
			<input type="submit" value="Go" />

		</form>

		</li>

		<li> In the CarController.php
			<br/>
			<code>
				public function handle() {

	        $name = $request["name"];
	        $age = $request["age"];

	        return view('cars.handle', compact('name', 'age'));
	    }
			</code>

		</li>

		<li>
			
			1. http://example.com/handle-form?type=cat
				<br/>
			2. http://example.com/handle-form?price=10

		</li>

		<li>
			
			In php you could just use the $_GET array i.e.
			<br/>
			<code>

			$type = $_GET["type"];

			$price = $_GET["price"];

			</code>


		</ol>

		<h2>Part 2</h2>

		<ol>
			<li>Cascading Style Sheets</li>

			<li>
				1. Using # to identify an element by id e.g. #app
				<br/>
				2. Using a .selector for the html class attribute of the element e.g. in csss .class-name
				<br/>
				3. Using the elements tag name e.g. body or div

			</li>
			<li>
				1. This is preferable when your element is uniquely identified with an id attribute the wint the page / DOM scope
				<br/>
				2. This is preferable when your element has the class attribute set (not neceserrily unique)
				<br/>
				3. This is preferably when the elemend has no id or class attributed assigned but is uniquely identifiable by it's tag e.g. body
				<br/>
			</li>

			<li>

				<span class="pod">The Pod</span>

				<style type="text/css">

					.pod {
						display: block;
						background-color:green;
						width: 100%;
						font-style: bold;
						border: 1px solid blue;
					}
				</style>

				<code>
					.pod {
						display: block;
						background-color:green;
						width: 100%;
						font-style: bold;
						border: 1px solid blue;
					}
				</code>

			</li>

			<li>
				<p class="token key">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</li>

			<style type="text/css">

				p.token.key {
					color:red;

				}

			</style>

			<code>

				p.token.key {
					color:red;

				}
			</code>

			<li>
				All elemets with a class of "reg", find their direct decendent paragraph element and right-justify the text content within them.
			</li>

			<li>
				The first is targeting all paragraphs within elements that have the "reg" class and the second targets the direct descendent p tag within all elements of the class "reg".
			</li>
			<li class="nav-item"> 
				This is a .nav-item element, please hover over it.
				<br/>
				<style type="text/css">

				.nav-item {
				    color: red;
				    transition: color 2s;
				}

				.nav-item:hover {
				    color: blue;
				}

				</style>

				<code>

				.nav-item {
				    color: red;
				    transition: color 2s;
				}

				.nav-item:hover {
				    color: blue;
				}

				</code>
				
			</li>
			<li>
				1. navs
				<br/>
				2. navbars
				<br/>
				3. cards
				<br/>
				4. buttons (.btn family)
				<br/>
				5. alerts
			</li>
			<li>
				See <fig>Fig. 1</fig> below.
			</li>
		</ol>


		<h2>Fig. 1</h2>

		<div class="row">
			<div class="col col-md-8">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div class="col col-md-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>

		<div class="row">
			<div class="col col-md-4">

						<div class="row">
							<div class="col col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, </div>
							<div class="col col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
						</div>

						<div class="row">
							<div class="col col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
							<div class="col col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
						</div>

			</div>
			<div class="col col-md-8">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>

		<style type="text/css">

		.col {
			border: 1px solid black;
		}

		</style>
		
	</div>

</body>
</html>




