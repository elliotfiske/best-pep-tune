<!doctype html>
<head>

  <!-- <?php include('../analyticstracking.php'); ?> -->
  <meta charset="utf-8">

  <title>BEST PEP TUNE</title>
  <meta name="description" content="Mangle any names that you ">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Jake weary -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="http://www.parsecdn.com/js/parse-latest.js"></script>

  <!-- Bower junk -->
  <script src="bower_components/webcomponentsjs/webcomponents.min.js"></script>
  <link rel="import" href="bower_components/core-scaffold/core-scaffold.html">
  <link rel="import" href="bower_components/core-item/core-item.html"> 
  <link rel="import" href="bower_components/paper-input/paper-input.html">
  <link rel="import" href="bower_components/paper-fab/paper-fab.html">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">

      <div class="col-md-12">
        <h1>
          CHOOSE THE BETTER PEP TUNE
        </h1>
      </div>

      <div class="col-md-12">
        <h3>
          Not all pep tunes are created equal
        </h3>
      </div>

      <div class="col-md-12">&nbsp;</div>
      <div class="col-md-12">&nbsp;</div>
      <div class="col-md-12">&nbsp;</div>
      <div class="col-md-12">&nbsp;</div>
      <div class="col-md-12">&nbsp;</div>
      <div class="col-md-12">&nbsp;</div>

      <a id="choice1" onclick="chose1()"><div class="col-md-5 panel panel-info choice"><h1 id="choiceText1"></h1></div></a>
      <div class="col-md-2" ><h3>Vs.</h3></div>
      <a id="choice2" onclick="chose2()"><div class="col-md-5 panel panel-info choice"><h1 id="choiceText2"></h1></div></a>

      <div class="col-md-12">&nbsp;</div>

      <div class="col-md-12">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span id="instr">What Instrument Are You?</span>
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="left: 50%; margin-left: -102px;">
            <li><a class="instrument-picker" href="#Trombone">Trombone</a></li>
            <li><a class="instrument-picker" href="#Director" style="color: blue">Director</a></li>
            <li><a class="instrument-picker" href="#Flute">Flute</a></li>
            <li><a class="instrument-picker" href="#Piccolo">Piccolo</a></li>
            <li><a class="instrument-picker" href="#Clarinet">Clarinet</a></li>
            <li><a class="instrument-picker" href="#AltoSax">Alto Sax</a></li>
            <li><a class="instrument-picker" href="#TenorSax">Tenor Sax</a></li>
            <li><a class="instrument-picker" href="#Trumpet">Trumpet</a></li>
            <li><a class="instrument-picker" href="#FrenchHorn">French Horn</a></li>
            <li><a class="instrument-picker" href="#Trombone">Trombone</a></li>
            <li><a class="instrument-picker" href="#Baritone">Baritone</a></li>
            <li><a class="instrument-picker" href="#Tuba">Tuba</a></li>
            <li><a class="instrument-picker" href="#Cymbals">Cymbals</a></li>
            <li><a class="instrument-picker" href="#Snare">Snare</a></li>
            <li><a class="instrument-picker" href="#TenorDrum">Tenor Drum</a></li>
            <li><a class="instrument-picker" href="#BassDrum">Bass Drum</a></li>
            <li><a class="instrument-picker" href="#Geeuuaard">Guard</a></li>
            <li><a class="instrument-picker" href="#Twirler">Twirler</a></li>
            <li><a class="instrument-picker" href="#DrumMajor">Drum Major</a></li>
          </ul>
        </div>
      </div>

    </div><!-- /.container -->

  <script type="text/javascript">
    var tunez = ["I Want You Back", "Runaway Baby", "Get It On", "This Page Intentionally Left Blank", "Uptown Funk", "Free Bird", "Swing, Swing, Swing", "James Bond Theme", "Ain't Nothin' Wrong With That", "Alive and Amplified", "Skyfall", "Birdland", "Mission: Impossible", "All Hail Green and Gold", "All Along the Watchtower", "Any Way You Want It", "America The Beautiful", "Safety Dance, The", "Apache", "Bad Medicine", "Back in Black", "Camino Real", "Blister in the Sun", "Bang the Drum All Day", "Aqualung", "All Right Now", "Centerfold", "Christmas Promenade", "Carry On My Wayward Son", "Dirty Deeds", "Crazy Train", "Don't Stop Believin'", "Freeze Frame", "Forget You", "Dynamite", "Gimme Some Lovin", "Final Countdown", "Don't Stop Till You Get Enough", "Happy", "Come On Feel the Noize", "Gonna Fly Now", "Hey Pachuco!", "Hey Baby!", "I Can't Turn You Loose", "I Can See for Miles", "Hold On, I'm Comin'", "Holiday", "I Don't Care", "I Don't Wanna Stop", "I Like It", "I Want You Back", "Green Onions", "Hammerhead", "I'm a Man", "Impression That I Get, The", "In A Young Man's Mind", "In The Stone", "Iron Man", "I Saw Her Standing There", "Johnny B. Goode", "Jungle Boogie", "Karn Evil 9", "Let's Groove", "Knock On Wood", "Kung Fu Fighting", "Lion Sleeps Tonight, The", "Little Bitty Pretty One", "Magic Carpet Ride", "Jump In The Line", "Main Title, Prince of Thieves (Robin Hood)", "Lips are Movin'", "Master of Puppets", "Monster", "Mustang Sally", "My Sharona", "One Way or Another", "On Mustangs", "My Songs Know What You Did In The Dark (Light 'Em Up)", "Ow!", "Poker Face", "Pretender, The", "Malagueña", "Moves Like Jagger", "Radar Love", "Pretty Fly (For A White Guy)", "Ride High You Mustangs", "Rock and Roll Part II", "Shake", "Rock Lobster", "School's Out", "Sell Out", "Send Out A Cheer", "7 Nation Army", "Proud Mary", "Shake", "Shake It Off", "She Blinded Me with Science", "Sir Duke", "Stadium Jams - Vol.1", "Stadium Jams - Vol. 5", "Stadium Jams - Vol. 3", "Soul Man", "Star Spangled Banner, The", "Surf", "Superstition", "Think", "Takin' It To The Streets", "Thnks Fr Th Mmrs", "Touch Me", "Too Hip", "Time Warp", "Thunder And Lightning", "Vehicle", "Wake Me Up!", "We're an American Band", "Wild, Wild West", "Word Up", "White Rabbit", "Who Are You?", "You Can Call Me Al", "You Dropped A Bomb On Me", "You Really Got Me", "Yea Poly", "You Shook Me All Night Long"];
    var PepComparison = Parse.Object.extend("PepComparison");
    var countdown = 8;

    function genTunes() {
      var tune1 = tunez[Math.floor(Math.random()*tunez.length)];
      do {
        var tune2 = tunez[Math.floor(Math.random()*tunez.length)];
      } while (tune1 == tune2);

      $("#choiceText1").text(tune1);
      $("#choiceText2").text(tune2);
    }

    function compared(name1, name2) {
      var newComp = new PepComparison();
      newComp.save({yeah: name1, lame: name2, instrument: instrument}).then(function(object) {
        genTunes();
      });
      countdown--;
      if (countdown == 0)  {
        ga('send', {
          hitType: 'event',
          eventAction: 'participated',
          eventLabel: '8 times'
        });
        countdown = 8;
      }
    }

    Parse.initialize("1QOrGcGEXlkaE0HiMiCf9aR8vUC0vDQ5diErXt1Q", "MuQXq7b3cMDNKoh1neHL9lqLi4raKmM657Y63k4V");

    var instrument = "None";

    genTunes();

    function chose1() {
      compared($("#choiceText1").text(), $("#choiceText2").text());

    };

    function chose2() {
      compared($("#choiceText2").text(), $("#choiceText1").text());
    };

    var haaash = window.location.hash.slice(1);
    if (haaash.length > 1) {
      instrument = haaash;
      $("#instr").text(window.location.hash.slice(1));
          ga('send', 'pageview', {
            'page': location.pathname + location.search  + location.hash
          });
    }
    else {
      $("#instr").text("What Instrument Are You?");
    }

    $(".instrument-picker").click(function() {
        setTimeout(function() {
          $("#instr").text(window.location.hash.slice(1));
          instrument = window.location.hash.slice(1);
          ga('send', 'pageview', {
            'page': location.pathname + location.search  + location.hash
          });
      }, 100);
        
    });

    // mobile users click dropdown
    $("#dropdownMenu1").click(function() {
      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      $("body").animate({
        scrollTop: 6000
      }, 100); /* increase / decrease animation speed */
      }
    });
  </script>
</body>

</html>
