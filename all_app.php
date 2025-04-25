<?php
include ('./header.php');
?>

<div class="back-to-top"></div>

<?php
include ('./navbar.php');
?>

<div class="container my-5">
        <h1 class="text-center my-2">All Appointments</h1>
        <table class="my-3 table table-bordered border border-danger">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Dr / Speciality</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('./connection.php');
                if(isset( $_SESSION['email'])){
                    $email = $_SESSION['email'];
                }

                $query  = "select * from appointment where email = '$email'";
                $result = mysqli_query($con , $query);
                if(!$result){
                    echo "Query failed";
                }else{
                    foreach($result as $r){
                        echo "
                        <tr>
                    <td>$r[app_id]</td>
                    <td>$r[name]</td>
                    <td>$r[email]</td>
                    <td>$r[app_date]</td>
                    <td>$r[dr_speciality]</td>
                    <td>$r[phone]</td>
                    <td>$r[app_status]</td>
                    <td><a href='./delete_app.php?id=$r[app_id]' class='btn btn-sm btn-primary'>Delete</a></td>
                </tr>
                        ";
                    }
                }
                 ?>
                
            </tbody>
        </table>
    </div>


<?php
include('./footer.php');
include('./script.php')
?>