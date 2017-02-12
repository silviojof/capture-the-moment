<?php $name="testimonials"; include "partials/header.php"; ?>

            <!-- Start of Intro Banner -->
            <div class="banner-wrapper">
                <div class="row banner-container">
                    <div class="small-12 medium-7 column">
                        <h2>Our clients' testimonials.</h2>
                        <hr class='bar'>
                        <p>We are proud to have served more than 150 couples. And all happy.</p>
                    </div>
                    <div class="small-12 medium-5 column banner-btn-container">
                        <ul class="btn-container">
                            <li>
                                <a href="gallery.php">
                                    Check our Work
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#leave-testimonial">
                                    Leave a Testimonial
                                    <i class="fa fa-long-arrow-down"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End of Intro Banner -->
            
            <!-- Start of Testimonials -->
            <div class="testimonial-wrapper">
                <div class="row testimonial-container">

                <?php
                    // PHP code to retrieve and display testimonials
                    
                    //1 Make Connection Variables
                    $host = "localhost";
                    $username = "silviojo_w8user";
                    $password = "K0881Tya6ReO";
                    $db = "silviojo_week08_db";

                    //2 Make Connection
                    $conn = mysqli_connect($host, $username, $password, $db);

                    mysqli_set_charset($conn, 'utf8');

                    // 3 Check if connection has been estabilished
                    if (!$conn) {
                        die('<p>Connectiion failed: ' . mysqli_connect_error() . '</p>');
                    } else {
                    //4 Make an SQL query to database and store result
                    $query = "SELECT * FROM testimonial_tb";
                    //5 Send query
                    $queryResult = mysqli_query($conn, $query);

                    $numOfRows = mysqli_num_rows($queryResult);

                    if ($numOfRows > 0) {
                        //6 Get all items from table and echo html
                        while ($rowArray = mysqli_fetch_assoc($queryResult)) {
                            $name = $rowArray['name'];
                            $gender = $rowArray['gender'];
                            $company = $rowArray['company'];
                            $position = $rowArray['position'];
                            $testimonial = $rowArray['testimonial'];
                            
                            echo "<div class='small-12 medium-4 column testimonial-box'>";
                            echo "<div class='testimonial-img'>";
                            if($gender == 0) {
                                echo "<img src='img/male_avatar.png' alt='Male Picture'/>";
                            } else {
                                echo "<img src='img/female_avatar.png' alt='Female Picture'/>";
                            }
                            echo "</div>";
                            echo "<div class='testimonial-text'>";
                            echo "<p>" . $testimonial . "</p>";
                            echo "<hr>";
                            echo "<p class='testimonial-text-details'><span>" . $name . "</span>, <span>" . $position . "</span></p>";
                            echo "<p class='testimonial-text-footer'>" . $company . "</p>";
                            echo "</div>";
                            echo "</div>";
                        }
                       
                    } else {
                        echo "<p>There is no data in the table</p>";
                    }

                    //5 Close Connection
                    mysqli_close($conn);
                    }
                ?>
        
                </div>
            </div>
            <!-- End of Testimonials -->

            <!-- Start of Testomonials Form -->
            <div class="form-wrapper" id="leave-testimonial">
                <div class="form-container row">
                    <div class="small-12 medium-6 column feedback-box">
                        <h2>Testimonials</h2>
                        <hr class="bar">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed est eu <a href="#"> lacus</a> pulvinar ultrices eget eu massa. Nulla euismod vehicula pretium. Donec id urna lacinia metus auctor euismod. Etiam eget consequat tellus. <a href="#"> lacinia</a> convallis pharetra eros nec cursus. In congue pellentesque massa, et efficitur ante mollis non. Donec vehicula, ligula id euismod <a href="#"> mollis</a>, odio tortor dignissim risus, id pulvinar nisl sapien vitae urna.</p>
                        <h4>Social Media</h4>
                        <p>Donec sed est eu <a href="#"> lacus</a> pulvinar ultrices eget eu massa. Nulla euismod vehicula pretium:</p>
                        <nav>
                            <ul class="social-icons clearfix">
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="small-12 medium-6 column form-box">
                        <form method="post" action="testimonial-process.php">
                            <label class="label-container" for="form-name">
                                <p>name</p>
                                <input type="text" name="name" id="form-name" placeholder="Your name" required/>
                            </label>
                            <label class="label-container" id="gender">
                                <p>Gender</p>
                                <div>
                                    <label class="label-secondary" for="form-male">Male</label>
                                    <input type="radio" name="gender" id="form-male" value="0" required/>
                                    <label class="label-secondary" for="form-female">Female</label>
                                    <input type="radio" name="gender" id="form-female" value="1" required/>
                                </div>
                            </label>
                            <label class="label-container" for="form-company">
                                <p>Company Name</p>
                                <input type="text" name="company" id="form-company" placeholder="Your company" required />
                            </label>
                            <label class="label-container" for="form-position">
                                <p>Your Position</p>
                                <input type="text" name="position" id="form-position" placeholder="Your Position" required />
                            </label>
                            <label class="label-container" for="form-testimonial">
                                <p>Your Testimonial</p>
                                <textarea name="testimonial" id="form-testimonial" placeholder="Maximum 200 characters." maxlength="200"></textarea>
                            </label>
                            <button class="btn-signup" type="submit" name="f_submit">Send your testimonial<i class="fa fa-long-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End of Testomonials Form -->

<?php include "partials/footer.php"; ?>