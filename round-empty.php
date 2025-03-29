<?php return [
	'pointScale' => 200,
	'categories' => [
		[
			'name' => 'HTML',
			'questions' =>  [
				[
				 	'question' => 'What does HTML stand for?',
				 	'answer'   => 'HyperText Markup Language',
					'difficulty' => 'easy',
				],
				[
				 	'question' => 'Which HTML tag is used to define a hyperlink?',
				 	'answer'   => '<a>',
					'difficulty' => 'easy',
				],
				[
				 	'question' => 'What is the purpose of the <head> tag in HTML?',
				 	'answer'   => 'To contain metadata and links to external resources',
					'difficulty' => 'medium',
				],
				[
				 	'question' => 'Which attribute is used to uniquely identify an HTML element?',
				 	'answer'   => 'id',
					'difficulty' => 'medium',
				],
				[
				 	'question' => 'What is the correct HTML element for inserting a line break?',
				 	'answer'   => '<br>',
					'difficulty' => 'easy',
				],
			]
		],
		[
			'name' => 'CSS',
			'questions' =>  [
				[
				 	'question' => 'What does CSS stand for?',
				 	'answer'   => 'Cascading Style Sheets',
					'difficulty' => 'easy',
				],
				[
				 	'question' => 'Which property is used to change the background color in CSS?',
				 	'answer'   => 'background-color',
					'difficulty' => 'easy',
				],
				[
				 	'question' => 'What is the default position value of an HTML element in CSS?',
				 	'answer'   => 'static',
					'difficulty' => 'medium',
				],
				[
				 	'question' => 'Which CSS property is used to control the text size?',
				 	'answer'   => 'font-size',
					'difficulty' => 'easy',
				],
				[
				 	'question' => 'What is the purpose of the z-index property in CSS?',
				 	'answer'   => 'To specify the stack order of elements',
					'difficulty' => 'medium',
				],
			]
		],
		[
			'name' => 'JavaScript',
			'questions' =>  [
				[
				 	'question' => 'What is the correct syntax for referring to an external JavaScript file?',
				 	'answer'   => '<script src="filename.js"></script>',
					'difficulty' => 'easy',
				],
				[
				 	'question' => 'Which method is used to write a message to the browser console?',
				 	'answer'   => 'console.log()',
					'difficulty' => 'easy',
				],
				[
				 	'question' => 'What is the purpose of the "this" keyword in JavaScript?',
				 	'answer'   => 'It refers to the object it belongs to',
					'difficulty' => 'medium',
				],
				[
				 	'question' => 'Which JavaScript method is used to parse a JSON string into an object?',
				 	'answer'   => 'JSON.parse()',
					'difficulty' => 'medium',
				],
				[
				 	'question' => 'What is the difference between "==" and "===" in JavaScript?',
				 	'answer'   => '"==" checks for value equality, while "===" checks for both value and type equality',
					'difficulty' => 'medium',
				],
			]
		],
		[
			'name' => 'PHP',
			'questions' =>  [
				[
				 	'question' => 'What does PHP stand for?',
				 	'answer'   => 'PHP: Hypertext Preprocessor',
					'difficulty' => 'easy',
				],
				[
				 	'question' => 'Which symbol is used to start a variable in PHP?',
				 	'answer'   => '$',
					'difficulty' => 'easy',
				],
				[
				 	'question' => 'What is the purpose of the "include" statement in PHP?',
				 	'answer'   => 'To include and evaluate a specified file',
					'difficulty' => 'medium',
				],
				[
				 	'question' => 'Which function is used to connect to a MySQL database in PHP?',
				 	'answer'   => 'mysqli_connect()',
					'difficulty' => 'medium',
				],
				[
				 	'question' => 'What is the difference between "echo" and "print" in PHP?',
				 	'answer'   => 'Both output data, but "echo" is faster and does not return a value',
					'difficulty' => 'medium',
				],
			]
		],
		[
			'name' => 'General',
			'questions' =>  [
				[
				 	'question' => 'What is the purpose of a web server?',
				 	'answer'   => 'To serve web pages to clients',
					'difficulty' => 'easy',
				],
				[
				 	'question' => 'What is the difference between client-side and server-side scripting?',
				 	'answer'   => 'Client-side runs in the browser, server-side runs on the server',
					'difficulty' => 'medium',
				],
				[
				 	'question' => 'What is the purpose of an API in web development?',
				 	'answer'   => 'To allow communication between different software applications',
					'difficulty' => 'medium',
				],
				[
				 	'question' => 'What is the HTTP status code for "Not Found"?',
				 	'answer'   => '404',
					'difficulty' => 'easy',
				],
				[
				 	'question' => 'What is the purpose of a CDN in web development?',
				 	'answer'   => 'To deliver content faster by using distributed servers',
					'difficulty' => 'medium',
				],
			]
		],
	]
];
?>