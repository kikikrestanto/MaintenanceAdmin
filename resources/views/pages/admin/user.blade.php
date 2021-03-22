<html>

<head>
    <title>User</title>
    <meta charset="UTF-8">
    <meta name="description" content="Login TiketSaya Admin">
    <meta name="keywords" content="TiketSaya, Web Dashboard TiketSaya, Login TiketSaya">
    <meta name="author" content="BWA Team">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

    @include('includes.sidebar')

    <div class="main-content">
        <div class="header row">
            <div class="col-md-12">
                <p class="header-title">
                    Customers
                </p>
                <p class="sub-header-title">
                    They are your lovely users who love travelling
                </p>
            </div>
        </div>
        <div class="row report-group">

            <div class="col-md-4">
                <div class="item-customer item-unique-customer  col-md-12">
                    <div class="row">
                        <div class="content col-md-12">

                            <p class="description">
                                    Wanna try to
                                    create a customer
                                    manually?
                            </p>

                            <a href="add_new_user.html" class="btn btn-active btn-view btn-primary btn-primary-tiketsaya">Add New</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="item-customer col-md-12">
                    <div class="row">
                        <div class="content col-md-12">

                            <div class="wrap-picture">
                                <img class="primary-user-picture-circle" src="images/user_1.png" />
                            </div>

                            <p class="title">
                                Julia Fynn
                            </p>
                            <p class="sub-title">
                                Traveller
                            </p>

                            <a href="user_details.html" class="btn btn-view btn-primary btn-primary-tiketsaya">View Profile</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="item-customer col-md-12">
                    <div class="row">
                        <div class="content col-md-12">

                            <div class="wrap-picture">
                                <img class="primary-user-picture-circle" src="images/user_1.png" />
                            </div>

                            <p class="title">
                                Julia Fynn
                            </p>
                            <p class="sub-title">
                                Traveller
                            </p>

                            <a href="#" class="btn btn-view btn-primary btn-primary-tiketsaya">View Profile</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="item-customer col-md-12">
                    <div class="row">
                        <div class="content col-md-12">

                            <div class="wrap-picture">
                                <img class="primary-user-picture-circle" src="images/user_1.png" />
                            </div>

                            <p class="title">
                                Julia Fynn
                            </p>
                            <p class="sub-title">
                                Traveller
                            </p>

                            <a href="#" class="btn btn-view btn-primary btn-primary-tiketsaya">View Profile</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="item-customer col-md-12">
                    <div class="row">
                        <div class="content col-md-12">

                            <div class="wrap-picture">
                                <img class="primary-user-picture-circle" src="images/user_1.png" />
                            </div>

                            <p class="title">
                                Julia Fynn
                            </p>
                            <p class="sub-title">
                                Traveller
                            </p>

                            <a href="#" class="btn btn-view btn-primary btn-primary-tiketsaya">View Profile</a>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="item-customer col-md-12">
                    <div class="row">
                        <div class="content col-md-12">

                            <div class="wrap-picture">
                                <img class="primary-user-picture-circle" src="images/user_1.png" />
                            </div>

                            <p class="title">
                                Julia Fynn
                            </p>
                            <p class="sub-title">
                                Traveller
                            </p>

                            <a href="#" class="btn btn-view btn-primary btn-primary-tiketsaya">View Profile</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.script')
</body>
</html>