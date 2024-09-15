<?php include 'db_connect.php' ?>
<style>
    body {
        background-image: url('welcome.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 100vh;
    }
    .card {
        background-color: rgba(255, 255, 255, 0.8); 
    }
</style>

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            
        </div>
    </div>

    <div class="row mt-3 ml-3 mr-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h1><?php echo "Welcome back ". $_SESSION['login_name']."!"  ?></h1>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    
</script>
