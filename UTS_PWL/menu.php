<div class="row">
    <div class="col-md-12 mt-1">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Hani</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?hal=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?hal=aboutUs">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?hal=dataPegawai">Pegawai</a>
                        </div>
                    </li>
                    <?php
                    $member = $_SESSION['MEMBER'];
                    if (!isset($member)) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?hal=login">Login</a>
                        </li>
                    <?php
                    } 
                    else {
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $member['fullname']; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Users</a></li>
                                    <li><a class="dropdown-item" href="index.php?page=profile">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Anda akan logout')">Logout</a></li>
                                </ul>
                            </li>
                        <?php 
                    } ?>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search..." autocomplete="off">
                    <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                </form>
            </div>
        </nav>
    </div>
</div>