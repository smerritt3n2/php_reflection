
<!--==============================================================================================================-->
<!-- Subject Gallery Elements -->
<!--==============================================================================================================-->
        <div class="subject-container">
                <div class="row1">
                    <div class="sb-container id-bs">
                        <i class="fas fa-th"></i>
                        <h2>Bespoken Software</h2>
                        <hr>
                        <p>Tailored software solutions to improve business productivity and online profits. Our expert team will ensure a software solution.</p>
                        <button class="dd-bespoke-software" type="button">READ MORE</button>
                    </div>
                    <div class="sb-container id-is">
                            <i class="fas fa-desktop"></i>
                            <h2>IT Support</h2>
                            <hr>
                            <p>Remotely managed IT services that is catered to your businesses needs, adds value and reduces costs.</p>
                            <button class="dd-it-support" type="button">READ MORE</button>
                    </div>
                    <div class="sb-container id-dm">
                            <i class="fas fa-signal"></i>
                            <h2>Digital Marketing</h2>
                            <hr>
                            <p>Driving brand awareness and ROI through creative digital marketing campagins. We review and monitor online performances</p>
                            <button class="dd-digital-marketing" type="button">READ MORE</button>
                    </div>
                </div>
            </div>
            <div class="subject-container">
                <div class="row2">
                    <div class="sb-container id-ts">
                            <i class="fas fa-phone-volume"></i>
                            <h2>Telecoms Services</h2>
                            <hr>
                            <p>Stay connected with bespoke telecoms solutions when you need it most.</p>
                            <button class="dd-telecoms-services" type="button">READ MORE</button>
                    </div>
                    <div class="sb-container id-wd">
                            <i class="fas fa-code"></i>
                            <h2>Web Design</h2>
                            <hr>
                            <p>User-centric design for business looking to make a lasting first impresson.</p>
                            <button class="dd-web-design" type="button">READ MORE</button>
                    </div>
                    <div class="sb-container id-cs">
                            <i class="fas fa-shield-alt"></i>
                            <h2>Cyber Security</h2>
                            <hr>
                            <p>Ensuring your online business stays secure 24/7, 365 days of the year.</p>
                            <button class="dd-cyber-security" type="button">READ MORE</button>
                    </div>
                    <div class="sb-container id-wd">
                            <i class="fas fa-th"></i>
                            <h2>Developer Training</h2>
                            <hr>
                            <p>Have you considered a career in web development but you aren't sure where to start?</p>
                            <button class="dd-web-design" type="button">READ MORE</button>
                    </div>
                </div>
            </div>
<!--==============================================================================================================-->
<!--==============================================================================================================-->

<!--==============================================================================================================-->
<!-- Banner Elements -->
<!--==============================================================================================================-->
        <div class="banner-container">
            <div class="content-container2">
                <h1>NETMATERS</h1>
                <p>Netmatters Ltd is a leading web design, IT support and digital marketing agency based in Wymondham, Norfolk.</p>
                <p>Founded in 2008, we work with buisness from a variety of industries to gain new prospects existing leads and further grow their sales.</p>
                <p>We provide cost effective, reliable solutions to a range of services; from bespoke cloud-based management systems, workflow and IT solutions through to creative website development and integrated digital campaigning.</p>
                <button type="button">OUR CULTURE<i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
<!--==============================================================================================================-->
<!--==============================================================================================================-->

<!--==============================================================================================================-->
<!-- Latest-news Elements -->
<!--==============================================================================================================-->
        <div class="underline-b">
                <h1 style="color:black;font-size: x-large;">Latest</h1>
                <hr style="color:black">
        </div>

        <div class="latest-container">
            <?php 
            $connect = mysqli_connect("localhost", "root", "", "mydatabase");
            if ($connect-> connect_error) { /* Checks that we have connected to database, if not then inform user */
                die("Connection Failed:". $connectio-> connect_error);
            }

            $sql = "SELECT id, title, description, date, image, colour FROM latest_news LIMIT 3"; /* Gathers data stored within selected Columns & selected Table */
            $result = $connect-> query($sql);

            if ($result-> num_rows > 0) { /* Checks that if database has multiple rows of data, repeat code below */
                while ($row = $result-> fetch_assoc()) { /* Allocates data associated with a certain row within the database */
                    echo '<div class="latest-content last-news">';
                        echo '<div class="latest-img">';
                            echo '<p class="' . $row['colour'] . '">NEWS</p>'; /* Places data into variable im column called "colour" */
                            echo '<img src="data:image/png;base64,'.base64_encode( $row['image'] ).'" alt="Birthday News"/>'; /* Places data into variable im column called "image" */
                        echo "</div>";
                        echo '<div class="details-container">';
                            echo '<h3><a href="#" class="peopleNews">"' . $row["title"] . '"</a></h3>'; /* Places data into variable im column called "title" */
                            echo '<p>' . $row["description"] . '</p>'; /* Places data into variable im column called "description" */
                            echo '<button class="' . $row['colour'] . '" type="button">READ MORE</button>';
                            echo '<hr>';
                            echo '<div class="posted-container">';
                                echo '<img src="img/netmatter_icon.png" alt="Netmatters Icon">';
                                echo '<p><b>Posted by Netmatters Ltd</b><br />' . $row["date"] . '</p>'; /* Places data into variable im column called "date" */
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "0 result";
            }

            $connect-> close(); /* Removes the connection to the database to protect it from unaurthorized users */
            ?>
        </div>
<!--==============================================================================================================-->
<!--==============================================================================================================-->
