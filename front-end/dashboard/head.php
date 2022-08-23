<meta charset="UTF-8">
<title>Wolf Gym</title>
<link rel="stylesheet" type="text/css" href="/WolfGym/front-end/vendor/css/login_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="shortcut icon" href="/WolfGym/images/FLogo.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/WolfGym/front-end/vendor/css/NewStyle.css">
<meta name="viewport" content="width=device-width, user-scalable=none initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Bootstrap core CSS -->
<link href="/WolfGym/front-end/vendor/css/bootstrap.min.css" rel="stylesheet">

<script>
  function show() {
    var password = document.getElementById("password");
    var icon = document.querySelector(".fas")

    // ========== Checking type of password ===========
    if (password.type === "password") {
      password.type = "text";
    } else {
      password.type = "password";
    }
  };
</script>
<script>
  //Get the button:
  mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button


  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }
</script>

<link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<!--<link href="/WolfGym/front-end/vendor/css/dashboard.css" rel="stylesheet">-->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="/WolfGym/front-end/vendor/js/jquery.slim.min.js"><\/script>')
</script>
<script src="/WolfGym/front-end/vendor/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script src="/WolfGym/front-end/vendor/js/dashboard.js"></script>
<script src="/WolfGym/front-end/vendor/js/main.js"></script>