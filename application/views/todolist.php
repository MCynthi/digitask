<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
    <title>Todo list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center activity">
                <div><i class="fa fa-clock-o"></i><span class="ml-2">11h 25m</span></div>
                <div><span class="activity-done">Done Activities(4)</span></div>
                <div class="icons"><i class="fa fa-search"></i><i class="fa fa-ellipsis-h"></i></div>
            </div>
            <div class="mt-3">
                <ul class="list list-inline">
                    <li class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center"><i class="fa fa-check-circle checkicon"></i>
                            <div class="ml-2">
                                <a href=""><span class="glyphicon glyphicon-eye-open"></span>Voir</a>
                                <h6 class="mb-0">Kickoff meeting</h6>
                                <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                    <div><i class="fa fa-calendar-o"></i><span class="ml-2">22 May 2020 11:30 PM</span></div>
                                    <div class="ml-3"><i class="fa fa-clock-o"></i><span class="ml-2">6h</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-column mr-2">
                                <div class="profile-image">
                                    <a class="btn btn-success" href=""><span class="glyphicon glyphicon-share-alt"></span> Affecter a</a>
                                    <a class="btn btn-primary" id="btn_envoyer" href=""><span class="glyphicon glyphicon-ok"></span> Terminer</a>
                                    <a class="btn btn-warning" href=""><span class="glyphicon glyphicon-pencil"></span> Editer</a>
                                    <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-remove"></span> Effacer</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center"><i class="fa fa-check-circle checkicon"></i>
                            <div class="ml-2">
                                <h6 class="mb-0">User Interview</h6>
                                <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                    <div><i class="fa fa-calendar-o"></i><span class="ml-2">25 May 2020 12:34 AM</span></div>
                                    <div class="ml-3"><i class="fa fa-clock-o"></i><span class="ml-2">4h</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-column mr-2">
                                <div class="profile-image"><img class="rounded-circle" src="https://i.imgur.com/xbxOs06.jpg" width="30"><img class="rounded-circle" src="https://i.imgur.com/wwd9uNI.jpg" width="30"></div><span class="date-time">12/5/2020 12:55</span>
                            </div><i class="fa fa-ellipsis-h"></i>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center"><i class="fa fa-check-circle checkicon"></i>
                            <div class="ml-2">
                                <h6 class="mb-0">Prototyping</h6>
                                <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                    <div><i class="fa fa-calendar-o"></i><span class="ml-2">17 May 2020 1:34 PM</span></div>
                                    <div class="ml-3"><i class="fa fa-clock-o"></i><span class="ml-2">6h</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-column mr-2">
                                <div class="profile-image"><img class="rounded-circle" src="https://i.imgur.com/xbxOs06.jpg" width="30"><img class="rounded-circle" src="https://i.imgur.com/KIJewDa.jpg" width="30"></div><span class="date-time">16/4/2020 1:55</span>
                            </div><i class="fa fa-ellipsis-h"></i>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center"><i class="fa fa-check-circle checkicon"></i>
                            <div class="ml-2">
                                <h6 class="mb-0">Call with client</h6>
                                <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                    <div><i class="fa fa-calendar-o"></i><span class="ml-2">12 May 2020 12:35 AM</span></div>
                                    <div class="ml-3"><i class="fa fa-clock-o"></i><span class="ml-2">6h</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-column mr-2">
                                <div class="profile-image"><img class="rounded-circle" src="https://i.imgur.com/wwd9uNI.jpg" width="30"></div><span class="date-time">11/4/2020 12:55</span>
                            </div><i class="fa fa-ellipsis-h"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>