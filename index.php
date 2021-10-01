<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-sm-6 col-md-2 order-md-0 px-5 left_side">
                <ul class="list-unstyled text-center small">
                    <li class="list-item my-1 py-4 border rounded wpm">
                        WPM<span class="d-block display-4 curr_wpm">0</span>
                    </li>
                    <li class="list-item my-1 py-4 border rounded cpm">
                        CPM<span class="d-block display-4 curr_cpm">0</span>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-8 order-md-1">
                <div class="container">
                    <div class="text-center mt-4 header">
                        <h1>How Fast Can You Type?</h1>
                        <p class="lead">
                            Start the one-minute Typing speed test and find out how fast can
                            you type in real world!
                        </p>
                        <div class="alert alert-danger" role="alert"
                            style="background-color: #f9bfc400; color: #c30012;">Just start typing and you can use
                            <b>backspace</b> to
                            correct your mistakes. Your mistakes will be marked in <u>Red</u> color and shown below the
                            writing box. Good luck!
                        </div>
                    </div>
                    <div class="quote my-4 rounded"> Click on the area below to start typing</div>
                    <textarea class="p-4 mt-4 bg-dark text-light rounded lead input_area"
                        placeholder="Start typing here..." onfocus="startGame()"
                        oninput="processCurrentText()"></textarea>

                    <button class="btn btn-outline-success restart_btn" id="editbtn"
                        onclick="resetValues()">
                        Restart</button><span class="btn-circle-animation"></span>

                    <hr class="my-4" />
                    <div class="mb-5">
                        <h6 class="py-2">Average Typing Speeds</h6>
                        <div class="d-flex text-white meter-gauge">
                            <span class="col" style="background: rgb(235, 72, 65)">0 - 20 Slow</span><span class="col"
                                style="background: rgb(244, 136, 71)">20 - 40 Average</span><span class="col"
                                style="background: rgb(255, 200, 74)">40 - 60 Fast</span><span class="col"
                                style="background: rgb(166, 195, 76)">60 - 80 Professional</span><span class="col"
                                style="background: rgb(78, 192, 78)">80 - 100+ Top</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 order-md-2 px-5">
                <ul class="list-unstyled text-center small">
                    <li class="list-item my-1 py-4 border rounded">
                        Timers<span class="d-block display-4 curr_time">60</span>
                    </li>
                    <li class="list-item my-1 py-4 border rounded errors">
                        Errors<span class="d-block display-4 curr_errors">0</span>
                    </li>
                    <li class="list-item my-1 py-4 border rounded accuracy">
                        Acuracy<span class="d-block display-4 curr_accuracy">0</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>