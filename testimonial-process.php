<?php
	
	// Check if form was sent
    if( isset($_POST['f_submit']) ) {
    	// Check if form was not empty
		if( !empty($_POST) ) {
			// Make Connection Variables
			$host = "localhost";
            $username = "silviojo_w8user";
            $password = "K0881Tya6ReO";
            $db = "silviojo_week08_db";

			// Make Connection
			$conn = mysqli_connect($host, $username, $password, $db);

			mysqli_set_charset($conn, 'utf8');

			// Check if connection has been estabilished
			if($conn) {
                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $gender = intval($_POST['gender']);
                $company = mysqli_real_escape_string($conn, $_POST['company']);
                $position = mysqli_real_escape_string($conn, $_POST['position']);
                $testimonial = mysqli_real_escape_string($conn, $_POST['testimonial']);
                // Insert item to database
                $insert = "INSERT INTO testimonial_tb (name, gender, company, position, testimonial) VALUES ('" . $name . "', " . $gender . ", '" . $company . "', '" . $position . "', '" . $testimonial . "')";
                
                $resultInsert = mysqli_query($conn, $insert);
                // Return to the page
                header('location:testimonials.php');

                // Close Connection
                mysqli_close($conn);

			} else {
				die('<p>Connection failed: ' . mysqly_connect_error() . '</p>');
			}
		} else {
			echo "<p>Information not submitted or empty form</p>";
		}
	}
?>