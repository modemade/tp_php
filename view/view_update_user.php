<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
<div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="../user/show_all_user.php" class="nav-link active"
                        aria-current="page">Liste des users</a></li>
                <li class="nav-item"><a href="../user/deconnexion.php" class="nav-link">déconnexion</a></li>
            </ul>
        </header>
    </div>

    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Update an account</h2>

                                <form action="" method="post">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="name" class="form-control form-control-lg" placeholder="Your Name" name="name"/>
                                        <label class="form-label" for="name"  ></label>
                                    </div>

                                        <div class="form-outline mb-4">
                                        <input type="text" id="firstname"placeholder="firstname" name="firstname"
                                            class="form-control form-control-lg"  />
                                        <label class="form-label" for="firstname" ></label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="login" class="form-control form-control-lg" placeholder="Your Email"  name="login"/>
                                        <label class="form-label" for="login" ></label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="mdp"
                                            class="form-control form-control-lg" placeholder="Enter your password" name="mdp"/>
                                        <label class="form-label" for="mdp"  ></label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" 
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="submit" >confirmer</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>