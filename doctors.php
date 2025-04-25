<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            <?php
            include('./connection.php');

            $query = "select * from doctors ";
            $result = mysqli_query($con, $query);
            if (!$result) {
                echo "Query failed";
            } else {
                foreach ($result as $r) {
                    echo "
                        <div class='item'>
                <div class='card-doctor'>
                    <div class='header'>
                        <img src='./upload/$r[dr_image]' alt=''>
                        <div class='meta'>
                            <a href='#'><span class='mai-call'></span></a>
                            <a href='#'><span class='mai-logo-whatsapp'></span></a>
                        </div>
                    </div>
                    <div class='body'>
                        <p class='text-xl mb-0'>Dr. $r[dr_name]</p>
                        <span class='text-sm text-grey'>$r[dr_speciality]</span>
                    </div>
                </div>
            </div>
                        ";
                }
            }
            ?>


        </div>
    </div>
</div>