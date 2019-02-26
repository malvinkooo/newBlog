<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('common/head.php');?>
<?php include('common/header.php');?>

<div class="site-main-container add-category-page">
    <div class="container no-padding">
        <div class="row add-category-form">
            <form action="/categories/add" method="POST" class="col-lg-6 offset-lg-3">
                <div class="col-lg-12"><h1 class="mb-30">What Our Client’s Say</h1></div>
                <div class="col-lg-12"><input type="text" class="form-control mb-15" placeholder="Название категории" name="name"></div>
                <div class="col-lg-12"><input type="file" class="form-control mb-15" name="img"></div>
                <div class="col-lg-12"><button class="primary-btn primary">Send Message</button></div>
            </form>
        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>