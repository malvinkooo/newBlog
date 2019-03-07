<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('application/views/common/head.php');?>
<!-- START main wrapper -->
<div class="layout-wrapper">
    <!-- START main content -->
    <div class="layout-content">

        <header>
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between">
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="/">Главная</a></li>
                        </ul>
                    </nav>
                    <div class="navbar-right">
                        <form class="Search">
                            <input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
                            <label for="Search-box" class="Search-box-label">
                                <span class="lnr lnr-magnifier"></span>
                            </label>
                            <span class="Search-close">
                                <span class="lnr lnr-cross"></span>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <div class="db-error-page">
            <div class="container no-padding">
                <div class="db-error-wrap row">
                    <div class="col-lg-12">
                        <h2 class="db-error-title">Произошла ошибка в базе данных, попробуйте снова через некоторое время.</h2>
                        <?php if(ENVIRONMENT !== 'production') { ?>
                            <h3 class="db-error-title"><?php echo $heading; ?></h3>
                            <div class="db-error-text">
                            <?php echo $message; ?>
                            </div>
                        <?php } ?>

                        <div class="db-error-btn-wrap">
                            <a href="/" class="primary-btn">Перейти на главную</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('application/views/common/footer.php');?>
</html>