<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link rel="stylesheet" href="beginner.css">
  <title>CPPSECRETS | Typing Master - Beginner</title>
</head>

<body>
  <nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
      <a href="https://cppsecrets.com/"><img src="logo.png" width="150" height="60"></a>
    </div>
  </nav>

  <div class="container-fluid main-content">
    <div class="row">
      <div class="col-sm-6 col-md-2 order-md-0 px-5">
        <ul class="list-unstyled text-center small">
          <li class="list-item my-1 py-4 border rounded cpm">
            Score<span class="d-block display-4 curr_cpm" id="score">0</span>
          </li>
          <li class="list-item my-1 py-4 border rounded accuracy">
            High Score<span class="d-block display-4 curr_accuracy" id="highscore">0</span>
          </li>
        </ul>
      </div>
      <div class="col-sm-12 col-md-8 order-md-1">
        <div class="container">
          <div class="text-center mt-2 header">
            <h1 class="mb-3">LEVEL : Beginner</h1>
            <p class="lead">Type The Given Word Within
              <span class="text-success" id="seconds">7</span> Seconds and find out how fast can
              you type in real world!
            </p>
            <div class="alert alert-danger" role="alert" style="background-color: #f9bfc400; color: #c30012;">Type each word in the given amount of seconds to score. To play again, just type the current word. Your score
              will reset
            </div>
          </div>

          <div class="container text-center">
            <div class="row">
              <div class="col-md-6 mx-auto">
                <h2 class="display-2 mb-3" id="current-word">hello</h2>
                <input type="text" class="form-control form-control-lg" placeholder="Start typing..." id="word-input" autofocus>
                <button id="startgame" onclick="startGame(this)" class="btn btn-success mt-4 mx-2">Start</button>
                <h4 class="mt-4" id="message"></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-2 order-md-2 px-5 ">
        <ul class="list-unstyled text-center small">
          <li class="list-item my-1 py-4 border rounded">
            Timers<span class="d-block display-4 curr_time" id="time">7</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <script src="beginner.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>