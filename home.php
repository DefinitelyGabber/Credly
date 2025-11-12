<?php 
require_once '../includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home // Reverie Pavilion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .herosecpic{
        display: block;
        width: 100%;
    }
    
    .lead{
        margin: 0 auto;
    }

</style>

</head>
<body style="background-color: #fffef4; font-family: Red Hat Display;">
    <div class="content-one-section">
        <img src="https://cdn.i-scmp.com/sites/default/files/d8/images/canvas/2024/10/21/be6877ff-2c2c-4598-acd5-60ceb785fdd9_ad1aa3fe.jpg" alt="" class="herosecpic d-block w-100 h-50 object-fit-cover">
        <div class="content-one-container container-lg">
            
        </div>
    </div>

    <div class="content-two-section mt-5">
        <div class="content-one-container container-lg text-center">
            Puerto Galera, Philippines<br>
            <h1 class="display-1">Welcome to Reverie Pavilion!</h1>
            <p class="lead w-50">Here at Reverie Pavilion, we make your dreams come true.
                Looking for a serene getaway from the city life? 
                Or a delightful staycation somewhere
                nearby, we’ve got you covered in Puerto Galera!</p>
        </div>
    </div>


    <!-- Carousel Section -->
    <div class="carousel-section mt-5 pb-3">
      <div class="container lg">
        <div class="carousel-content">
          <!-- Carousel -->
          <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <!-- Slides -->
            <div class="carousel-inner mb-5 shadow-1-strong rounded-3">
              <div class="carousel-item active">
                <img src="https://www.travelorientalmindoro.ph/Content/img/uploads/552e072d-a7fe-40df-a20f-fa490f5f7daa.jpg" class="d-block w-100 h-75" />
              </div>
              <div class="carousel-item">
                <img src="https://www.travelorientalmindoro.ph/Content/img/uploads/23a824f6-89cb-485e-8ad5-ab94eaabbaaa.jpg" class="d-block w-100 h-75"/>
              </div>
              <div class="carousel-item">
                <img src="https://www.rappler.com/tachyon/2021/03/shutterstock-filipino-outrigger-boats.jpeg" class="d-block w-100 h-75" />
              </div>
              <div class="carousel-item">
                <img src="https://cdn.getyourguide.com/image/format=auto,fit=crop,gravity=auto,quality=60,dpr=1/tour_img/23801cea9583e7aa1d946ded6303116a664d324cbe14f3a40560dfae47c22fe2.jpg" class="d-block w-100 h-75"/>
              </div>
              <div class="carousel-item">
                <img src="https://www.toureast.net/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBZ0FVIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--df9a2357a4186f75e3abc73f0f4cea00a36be515/Fridays-Puerto-Galera_Main.jpg" class="d-block w-100 h-75"/>
              </div>
            </div>
            <!-- Slides -->

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            <!-- Controls -->

            <!-- Indicators -->
            <div class="carousel-indicators" style="margin-bottom: -25px;">
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="width: 120px;">
                <img class="d-block w-100 shadow-1-strong rounded" src="https://www.travelorientalmindoro.ph/Content/img/uploads/552e072d-a7fe-40df-a20f-fa490f5f7daa.jpg" alt="Thumbnail 1" />
              </button>
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2" style="width: 120px;">
                <img class="d-block w-100 shadow-1-strong rounded" src="https://www.travelorientalmindoro.ph/Content/img/uploads/23a824f6-89cb-485e-8ad5-ab94eaabbaaa.jpg" alt="Thumbnail 2" />
              </button>
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3" style="width: 120px;">
                <img class="d-block w-100 shadow-1-strong rounded" src="https://www.rappler.com/tachyon/2021/03/shutterstock-filipino-outrigger-boats.jpeg" alt="Thumbnail 3"/>
              </button>
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4" style="width: 120px;">
                <img class="d-block w-100 shadow-1-strong rounded" src="https://cdn.getyourguide.com/image/format=auto,fit=crop,gravity=auto,quality=60,dpr=1/tour_img/23801cea9583e7aa1d946ded6303116a664d324cbe14f3a40560dfae47c22fe2.jpg" alt="Thumbnail 4"/>
              </button>
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 5" style="width: 120px;">
                <img class="d-block w-100 shadow-1-strong rounded" src="https://www.toureast.net/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBZ0FVIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--df9a2357a4186f75e3abc73f0f4cea00a36be515/Fridays-Puerto-Galera_Main.jpg" alt="Thumbnail 5"/>
              </button>
            </div>
            <!-- Indicators -->
          </div>
        </div>
      </div>
    </div>


    <!-- Section 2 -->
  <div class="content-three-section mt-5 pt-5 mb-5 pb-3">
    <div class="content-two-container container-lg">
        <div class="row">
          <div class="col-md-6">
            <div class="suites-card">
              <img src="https://www.royalzanzibar.com/resourcefiles/home-room-images/home-rooms-superior-deluxe.jpg" alt="Suites" class="img-fluid h-75 w-100">
              <div class="suites-content p-2">
                <h3 class="suites-title">Accommodations</h3>
                <p class="suites-text">Only the best living quarters to make your visit as comfortable and pleasant as possible!</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="amenities-card">
              <img src="https://traveler.marriott.com/wp-content/uploads/2016/12/JW_MRKFL_Kane_beachbar.jpg" alt="Amenities" class="img-fluid h-75 w-100">
              <div class="amenities-content p-2">
                <h3 class="amenities-title">Amenities</h3>
                <p class="amenities-text">Make your trip even better with amenities that Reverie Pavilion has to offer to maximize your stay!</p>
              </div>
            </div>
          </div>

          </div>
        </div>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>

<?php
require_once '../includes/footer.php';
?>