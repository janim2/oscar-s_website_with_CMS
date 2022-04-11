<?php
  require_once 'partials/header.php'; 
  require_once 'database/config.php';
  require_once 'helpers/functions.php';

  $query = "SELECT * FROM blogs";
  $statement = $con->prepare($query);

  $statement->execute();

  $count = $statement->rowCount();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-md-10">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
              <a href="appointments.html">Appointments</a>
            </li>
            <li class="breadcrumb-item">
              <a href="blogs.html">Blogs</a>
            </li>
            <li class="breadcrumb-item active">Books</li>
          </ol>
        </nav>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#add_book">
          <span class="tf-icons bx bx-plus"></span>&nbsp; New Book
        </button>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/elements/7.jpg" alt="Card image cap" />
          <div class="card-body">
            <h5 class="card-title">Book Title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a est
              convallis lectus rhoncus euismod...</p>
          </div>

          <div class="card-body">
            <button type="button" class="btn rounded-pill btn-primary" data-bs-toggle="offcanvas"
              data-bs-target="#description_modal" aria-controls="offcanvasScroll">
              <span class="iconify" data-icon="akar-icons:eye-open"></span> </button>
            <button type="button" class="btn rounded-pill btn-secondary">
              <span class="tf-icons bx bx-edit" onclick="location.href='edit_book.html?bb_ref=4'"></span>
            </button>
            <button type="button" class="btn rounded-pill btn-danger" data-bs-toggle="modal"
              data-bs-target="#delete_modal">
              <span class="tf-icons bx bx-trash"></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->

  <?php include_once 'includes/Books/_add_book.php'; ?>
  <?php include_once 'includes/_delete.php'; ?>
  <?php include_once 'includes/_slide_in_view.php'; ?>


  <?php
  require_once 'partials/footer.php'; 
?>

<script>    
    $(document).on('submit', '#add_book_form', function (event) {
      event.preventDefault();
      submitFormQuery(this, "database/Book/add_book.php", ".loading", "Book Added Successfully", false);
    });

    // function display_in_slider(id){
    //   // console.log("checking");
    //   FetchItemQuery("database/Blog/fetch_blog.php", id);
    // }

    //delete
    // function _delete(){
    //   deleteItemQuery("database/Blog/delete_blog.php", ".loading", "Post Deleted Successfully");
    // }
</script>