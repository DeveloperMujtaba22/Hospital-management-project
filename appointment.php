<div class="page-section">
  <div class="container">
    <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
    <?php 
    
    if(!isset($_SESSION['email'])){
      echo "<p class='text-center text-danger'>Please Sign in to book your appointmnt</p>";
    }
    ?>
    <form class="main-form" action="./app_data.php" method="POST">
      <div class="row mt-5 ">
        <div class="col-12 col-sm-12 py-2 wow fadeInLeft">
          <input name="name" required type="text" class="form-control" placeholder="name">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input required type="date" class="form-control" name="date">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select required name="speciality" id="departement" class="custom-select">
          <option value=''>Select Dr / Speciality</option>
            <?php
            include('./connection.php');
            $query = "select * from doctors ";
            $result = mysqli_query($con , $query);
            if(!$result){
              echo "Query Failed";
            }else{

              foreach($result as $r){
                echo "<option value='$r[dr_name] / $r[dr_speciality]'>$r[dr_name] / $r[dr_speciality]</option>";
              }
            }
            ?>
          </select>
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <input name="phone" required type="text" class="form-control" placeholder="Number..">
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <textarea required name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
        </div>
      </div>
      <?php 
    
    if(!isset($_SESSION['email'])){
      echo "<button type='submit' class='btn btn-primary mt-3 wow zoomIn' disabled>Submit Request</button>";
    }else{
      echo "<button type='submit' class='btn btn-primary mt-3 wow zoomIn'>Submit Request</button>";
    }
    ?>
    </form>
  </div>
</div> 