<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="styleh.css">
    <style type="text/css">


    </style>

    <title>Voting System</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="#"><img src="img/logo2.png" height="110" width="110"></a>
            <div class="col-12 col-sm-6 align-self-center">
                <h3>VOTEINDIA</h3>
                <p class="d-none d-sm-block">Your Vote is Your Pride.<br>Your Vote is Your Voice.</p>
            </div >
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php" style="color: #444747">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.html" style="color: #444747"> CANDIDATES</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactus.html" style="color: #444747"></span> CONTACT</a></li>
                    <li class="nav-item"><a class="nav-link" href ="#new"style="color: #444747">REGISTSER</a></li>
                    <li class="nav-item">
                    <span class="navbar-text">
                        <a  data-toggle="modal" data-target="#loginmodal"style="color: #444747">
                           LOGIN
                        </a>
                    </span>
                  </li>
                </ul>

            </div>
        </div>
    </nav>


    <div id="loginmodal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #30c4e6">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                     <form action="login_action.php"methode="post"id="myform">
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                    <label class="sr-only">User-ID</label>
                                    <input type="text"class="form-control form-control-sm mr-1" name="username"placeholder="Enter User-ID">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1"name="password" id="exampleInputPassword3" placeholder="Password">
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary btn-sm ml-1"><input type="submit" name="login" value="Login"></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <header class="jumbotron">

    </header>




     <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carausel">
                    <div class="carousel-inner" role="listbox">


                        <div class="carousel-item active ">
                        <div class="carousel-caption d-none d-md-block" style="color: white">
                                <h2 >DEMOCRATIC RIGHT </h2>
                                <p class="d-none d-sm-block"  >VOTING IS A DEMOCRATIC RIGHT GENERATIONS HAVE FOUGHT FOR, AND WE TAKE THAT SERIOUSLY.hey knew voting is the most basic privilege in a democratic society, and they wanted their voices – and the voices of others – to be hear.Voting is a formal expression of preference for a candidate for office or for a proposed resolution of an issue.Voting generally takes place in the context of a large-scale national or regional election, however, local and small-scale community elections can be just as critical to individual participation in government.</p>
                            </div>
                        </div>


                        <div class="carousel-item ">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Not voting is giving up your voice.</span> </h2>
                                <p class="d-none d-sm-block">Any time someone says, “One vote won’t make a difference,” or, “I don’t like any of the candidates so I’m not going to vote,” or any other excuse for not voting, that is the regrettable choice to give up a treasured right of our free society. So many have sacrificed so much over the years to create and preserve this foundational aspect of our government. It is truly a loss when we lose sight of the importance of fulfilling our hard-won civic duty.The Ruth Law Team is all about protecting your rights and helping you to get justice. In order to have that opportunity, we must all share our voice by going to the ballot box on election day. </p>

                            </div>

                        </div>

                        <div class="carousel-item ">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Voting is an opportunity for change. </h2>
                                <p class="d-none d-sm-block">“Voting is your civic duty.” Do you want to make a positive impact? Voting gives you that chance! Support the candidates and ballot measures that can help your community, state, and even the nation for the greater good. Make your voice heard in these elections. Our communities are made up of friends, loved ones, neighbors, and children. Some may not know how important voting is, while others don’t have the privilege. Make the decision to vote for yourself and those around you.  </p>
                            </div>
                        </div>

                        <ol class="carousel-indicators">
                            <li data-target="#mycarousel" data-slide-to="o" class="active"></li>
                            <li data-target="#mycarousel" data-slide-to="1"></li>
                            <li data-target="#mycarousel" data-slide-to="2"></li>
                        </ol>
                        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                            <button class="btn btn-info btn-sm" id="carouselbtn">
                                <span class="fa fa-pause"></span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<div class="container">



    <div class="row row-content">
            <div class="col-12 col-sm-8 offset-sm-2 align-self-center">
                <div class="card" id="new">
                    <div class="card-header text-white" style="background-color:#30c4e6 ">Register Voter</div>
                    <div class="card-body">
                      <form action="reg_action.php"methode="post">

                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="text"class="form-control" name="firstname" id="fullname" placeholder="First Name">
                            <input type="text"class="form-control" name="lastname" id="fullname" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="text"class="form-control" name="username" id="Adhar Number" placeholder="Adhar Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="password"class="form-control" name="password" id="Adhar Number" placeholder="Password">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary">Register ME</button>
                        </div>
                    </div>

                </form>
                    </div>
                </div>
            </div>
        </div>
</div>




<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="indexh.html">Home</a></li>
                        <li><a href="aboutus.html">Candidates</a></li>
                        <li><a href="contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5 ">
                    <h5>Our Address</h5>
                    <address>
                      Near Modern College<br>
                      JM Road, Shivajinagar<br>
                      Pune,Maharashtra-411005<br>
                      <i class="fa fa-phone fa-lg"></i>.: +91 1234 5678<br>
                      <i class="fa fa-fax fa-lg"></i>: +91 888214542<br>
                      <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:voteindia@online.gov">voteindia@online.gov</a>
                   </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin"href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a  class="btn btn-social-icon btn-youtube"href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon btn"href="mailto:"><i class="fa fa-envelope fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2020</p>
                </div>
           </div>
        </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
