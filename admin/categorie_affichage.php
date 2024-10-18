<?php

require_once('./categorie/categorie.php');



$categorie = new categories();
$categories = $categorie->getAll();

include "./categorie/import/head.php"

?>

<body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">

                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="./assets/images/logo-sm-dark.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="./assets/images/logo-dark.png" alt="" height="44">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="article/assets/images/logo-sm-light.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="article/assets/images/logo-light.png" alt="" height="44">
                            </span>
                        </a>
                    </div>

                    <!-- Menu Icon -->

                    <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <button class="btn btn-header waves-effect" type="button" id="addCategoryBtn"
                        style="width: 120px; height: 50px;">
                        <i class="mdi mdi-plus"></i> Ajouter
                    </button>



                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- App Search -->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="mdi mdi-magnify"></span>
                        </div>
                    </form>
                    <!-- User -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-4.jpg"
                                alt="Header Avatar">
                        </button>

                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-account-circle font-size-16 align-middle me-2 text-muted"></i>
                                <span>Profile</span></a>

                            <a class="dropdown-item d-block" href="#"><span
                                    class="badge bg-success float-end">11</span><i
                                    class="mdi mdi-wrench font-size-16 align-middle text-muted me-2"></i>
                                <span>Settings</span></a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-primary" href="#"><i
                                    class="mdi mdi-power font-size-16 align-middle me-2 text-primary"></i>
                                <span>Logout</span></a>
                        </div>
                    </div>
                    <!-- Setting -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="mdi mdi-cog bx-spin"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">r
                <div class="user-details">
                    <div class="d-flex">
                        <div class="me-2">
                            <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="user-info w-100">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Donald Johnson
                                    <i class="mdi mdi-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i
                                                class="mdi mdi-account-circle text-muted me-2"></i>
                                            Profile<div class="ripple-wrapper me-2"></div>
                                        </a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i
                                                class="mdi mdi-cog text-muted me-2"></i>
                                            Settings</a>
                                    </li>

                                    <li><a href="javascript:void(0)" class="dropdown-item"><i
                                                class="mdi mdi-power text-muted me-2"></i>
                                            Logout</a></li>
                                </ul>
                            </div>

                            <p class="text-white-50 m-0">Administrator</p>
                        </div>
                    </div>
                </div>
                <!--- Sidemenu -->
                <?php include_once('./side-bar.php')?>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <div class="page-title">
                                    <h4 class="mb-0 font-size-18">Catégorie</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Devnano</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Catégories</a></li>
                                        <li class="breadcrumb-item active">Liste des catégories</li>
                                    </ol>
                                </div>

                                <div class="state-information d-none d-sm-block">
                                    <div class="state-graph">
                                        <div id="header-chart-1"></div>
                                    </div>
                                    <div class="state-graph">
                                        <div id="header-chart-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- Start Page-content-Wrapper -->
                    <div class="col-md-12">
                        <!-- Posts -->
                        <?php
                                    if (isset($_GET['action'])) {
                                        if ($_GET['action'] == 'success') {
                                            echo "
                                                <div class='alert alert-success' id='success-alert'>
                                                    <button type='button' class='close' data-dismiss='alert'>x</button>
                                                    <strong>Success! </strong> Changes have been saved.
                                                </div>
                                            ";
                                        } else if ($_GET['action'] == 'exists') {
                                            echo "
                                                <div class='alert alert-danger' id='danger-alert'>
                                                    <button type='button' class='close' data-dismiss='alert'>x</button>
                                                    <strong>Error! </strong> Category already exists.
                                                </div>
                                            ";
                                        } else if ($_GET['action'] == 'empty') {
                                            echo "
                                                <div class='alert alert-danger' id='danger-alert'>
                                                    <button type='button' class='close' data-dismiss='alert'>x</button>
                                                    <strong>Error! </strong> Category name cannot be empty.
                                                </div>
                                            ";
                                        }
                                    }
                               ?>
                        <table class="table table-bordered table-hover inner-box">
                            <thead>
                                <tr style="background-color:#1b82ec; color:#fff;" class="text-center">
                                    <th>#</th>
                                    <th>Nom de la catégorie</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" style="background-color:#fff;">
                                <?php foreach ($categories as $categorie) : ?>
                                <tr>
                                    <td><?= $categorie->id ?></td>
                                    <td><?= $categorie->name ?></td>
                                    <td>
                                        <!-- Ajoutez un lien avec une icône pour modifier la catégorie -->
                                        <a href="#" class="btn edit" style="color:#007bff;"
                                            onclick="openEditModal(<?= $categorie->id ?>, '<?= $categorie->name ?>')"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <!-- Ajoutez un lien avec une icône pour supprimer la catégorie -->
                                        <a href="./categorie/delete_categorie.php?id=<?= $categorie->id ?>"
                                            class="btn edit" style="color:#f16c69;">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>

                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>



                    </div>
                </div>


            </div>
        </div>
        <!-- Posts End -->
    </div>
    <!-- Main End -->
    </div>
    <!-- Main Section End -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Devnano
                </div>

            </div>
        </div>
    </footer>
    </div>
    <!-- end main content-->

    </div>
    <div id="editModal" class="modal"
        style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
        <div class="modal-content"
            style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 30%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);">
            <!-- Bouton de fermeture pour la fenêtre modale -->
            <span class="close" onclick="closeEditModal()"
                style="color: #aaa; float: right; font-size: 28px; font-weight: bold;">&times;</span>
            <!-- Champ de saisie pour le nouveau nom de la catégorie -->
            <input type="text" id="newCategoryName" placeholder="Nouveau nom de la catégorie"
                style="width: 100%; margin-bottom: 10px;">
            <!-- Bouton pour enregistrer les modifications -->
            <button onclick="saveCategoryName()" style="width: 100%;">Enregistrer</button>
        </div>
    </div>
    <!-- Bouton "Ajouter" -->
    <button onclick="openAddModal()">Ajouter</button>

    <!-- Fenêtre modale pour ajouter une nouvelle catégorie -->
    <div id="addModal" class="modal"
        style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
        <!-- Contenu de la fenêtre modale -->
        <div class="modal-content"
            style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 30%; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);">
            <!-- Bouton de fermeture pour la fenêtre modale -->
            <span class="close" onclick="closeAddModal()"
                style="color: #aaa; float: right; font-size: 28px; font-weight: bold;">&times;</span>
            <!-- Champ de saisie pour le nom de la nouvelle catégorie -->
            <input type="text" id="addNewCategoryName" placeholder="Nom de la nouvelle catégorie"
                style="width: 100%; margin-bottom: 10px;">
            <!-- Bouton pour ajouter la catégorie -->
            <button onclick="addCategory()" style="width: 100%;">Ajouter</button>
        </div>
    </div>
    </div>

    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-end">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>
            <!-- Settings -->
            <hr class="" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.png" class="img-fluid img-thumbnail" alt="">
                </div>

                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.png" class="img-fluid img-thumbnail" alt="">
                </div>

                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-5">
                    <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                        data-appStyle="assets/css/app-rtl.min.css" />
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

            </div>

        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        // Fonction pour ouvrir la fenêtre modale
        function openEditModal(categoryId, categoryName) {
            var categoryNameInput = document.getElementById('newCategoryName');
            var modal = document.getElementById('editModal');
            categoryNameInput.value = categoryName;
            modal.style.display = 'block';
        }

        // Fonction pour fermer la fenêtre modale
        function closeEditModal() {
            var modal = document.getElementById('editModal');
            modal.style.display = 'none';
        }

        // Fonction pour sauvegarder les modifications

        function saveCategoryName() {
            var newName = document.getElementById('newCategoryName').value;
            console.log('Nouveau nom de catégorie : ' + newName); // Vérifier les données
            // Envoi de la requête XMLHttpRequest
            console.log("La fonction saveCategoryName() est appelée.");
            // Récupérer le nouveau nom de la catégorie depuis le champ de saisie
            var newName = document.getElementById('newCategoryName').value;

            // Code pour créer et envoyer la requête AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', './categorie/update_categorie.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('newName=' + encodeURIComponent(newName));

            // Afficher le résultat de la requête dans la console pour le débogage
            xhr.onload = function () {
                console.log(xhr.responseText);
            };
        }


        // Ouvrir la fenêtre modale d'ajout de catégorie
        $('#addCategoryBtn').click(function () {
            $('#addModal').show();
        });

        // Fermer la fenêtre modale d'ajout de catégorie
        $('.close').click(function () {
            $('#addModal').hide();
        });

        // Fonction pour ajouter une nouvelle catégorie
        function addCategory() {
            console.log('La fonction addCategory() est appelée.');
            var newName = $('#addNewCategoryName').val();

            // Créer une nouvelle instance de l'objet XMLHttpRequest
            var xhr = new XMLHttpRequest();
            // Définir la méthode et l'URL pour la requête
            xhr.open('POST', './categorie/add_categorie.php', true);
            // Définir l'en-tête de la requête pour indiquer le type de contenu
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            // Envoyer la requête avec les données de la nouvelle catégorie
            xhr.send('name=' + encodeURIComponent(newName));

            // Réaction à la réponse de la requête
            xhr.onload = function () {
                if (xhr.status == 200) {
                    // Si la requête réussit, recharger la page pour afficher les changements
                    location.reload();
                } else {
                    // Si la requête échoue, afficher un message d'erreur dans la console
                    console.error('La requête a échoué avec un statut : ' + xhr.status);
                }
            };
        }
    </script>
</body>

</html>