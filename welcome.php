<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/handlebars.js"></script>
    <?php 
      
    ?>
</head>
<body>
   <nav>
    <div class="nav-wrapper">
      <a href="php/Logout.php" class="brand-logo right tooltipped" data-position="left" data-delay="50" data-tooltip="Logout"><i class="material-icons">person</i></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li class='active'><a href="welcome.html">Welcome to Goodreads!</a></li>
        <li><a href="about.html">About Me</a></li>
      </ul>
    </div>
  </nav>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>


 <script id="example-template" type="text/x-handlebars-template">
            <div class="row"> 
            {{#each people}}
                <div class="col s4 m3"> <div class="card"> <div class="card-image"> <img src={{photo}}>
              
            </div>
            <div class="card-content">
             {{author}}
            </div>
            <div class="card-action">
              <a class="modal-trigger" href="#{{ISBN}}">{{title}}</a>
            </div>
          </div>
        </div>
      
                
            {{/each}}</div>


            <!--killing joke-->
            <div id="0930289455" class="modal bottom-sheet">
    <div class="modal-content">
      <h3>Rate The Killing Joke!</h3>
      <form>
     <p>
      <input name="group1" type="radio" id="1" />
      <label for="1">1</label>
   &nbsp&nbsp
      <input name="group1" type="radio" id="2" />
      <label for="2">2</label>
    &nbsp&nbsp
      <input name="group1" type="radio" id="3"  />
      <label for="3">3</label>
    &nbsp&nbsp
        <input name="group1" type="radio" id="4" />
        <label for="4">4</label>
    &nbsp&nbsp
        <input name="group1" type="radio" id="5" />
        <label for="5">5</label>
    </p>
  </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Send</a>
    </div>
  </div>

  <div id="1421501686" class="modal bottom-sheet">
    <div class="modal-content">
      <h3>Rate Death Note!</h3>
      <form>
     <p>
      <input name="group1" type="radio" id="1" />
      <label for="1">1</label>
   &nbsp&nbsp
      <input name="group1" type="radio" id="2" />
      <label for="2">2</label>
    &nbsp&nbsp
      <input name="group1" type="radio" id="3"  />
      <label for="3">3</label>
    &nbsp&nbsp
        <input name="group1" type="radio" id="4" />
        <label for="4">4</label>
    &nbsp&nbsp
        <input name="group1" type="radio" id="5" />
        <label for="5">5</label>
    </p>
  </form>
    </div>
    <div class="modal-footer">
      <a href="" class=" modal-action modal-close waves-effect waves-green btn-flat">Send</a>
    </div>
  </div>


<!--hp1-->
  <div id="0747532699" class="modal bottom-sheet">
    <div class="modal-content">
      <h3>Rate Harry Potter 1!</h3>
      <form>
     <p>
      <input name="group1" type="radio" id="1" />
      <label for="1">1</label>
   &nbsp&nbsp
      <input name="group1" type="radio" id="2" />
      <label for="2">2</label>
    &nbsp&nbsp
      <input name="group1" type="radio" id="3"  />
      <label for="3">3</label>
    &nbsp&nbsp
        <input name="group1" type="radio" id="4" />
        <label for="4">4</label>
    &nbsp&nbsp
        <input name="group1" type="radio" id="5" />
        <label for="5">5</label>
    </p>
  </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Send</a>
    </div>
  </div>


<!--lotr-->
  <div id="0007440839" class="modal bottom-sheet">
    <div class="modal-content">
      <h3>Rate The Hobbit!</h3>
      <form>
     <p>
      <input name="group1" type="radio" id="1" />
      <label for="1">1</label>
   &nbsp&nbsp
      <input name="group1" type="radio" id="2" />
      <label for="2">2</label>
    &nbsp&nbsp
      <input name="group1" type="radio" id="3"  />
      <label for="3">3</label>
    &nbsp&nbsp
        <input name="group1" type="radio" id="4" />
        <label for="4">4</label>
    &nbsp&nbsp
        <input name="group1" type="radio" id="5" />
        <label for="5">5</label>
    </p>
  </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Send</a>
    </div>
  </div>
          
        </script>

<script type="text/javascript">
$(function () {
  // Grab the template script
  var theTemplateScript = $("#example-template").html();

  // Compile the template
  var theTemplate = Handlebars.compile(theTemplateScript);

  // This is the default context, which is passed to the template
  var context = {
    people: [ 
      { photo: 'img/hp1.jpg', title: 'Harry Potter 1', author: 'J K Rowling', ISBN: '0747532699'},
      { photo: 'img/lotr.jpg', title: 'Lord of the rings', author: 'J R R Tolkien',ISBN: '0007440839' },
      { photo: 'img/killingjoke.jpg', title: 'The Killing Joke', author: 'Alan Moore',ISBN: '0930289455' },
       { photo: 'img/deathnote.jpg', title: 'Death Note', author: 'Tsugumi Ohba',ISBN: '1421501686' }
      ]
  };

  // Pass our data to the template
  var theCompiledHtml = theTemplate(context);

  // Add the compiled html to the page
  $(document.body).append(theCompiledHtml);
});

</script>





<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>
</html>
