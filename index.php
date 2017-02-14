<!DOCTYPE html>
<html>
<head>
  <title>Soup Exchange</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="scripts.js"> </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://use.typekit.net/pup1gxc.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>
<div class="body">
  <?php include 'header.php';?>
<div data-299="display:inherit;"data-300="display:none;">
  <div class="scroll">
    <h2 class="quote">What words come to mind when I say when I say "mental illness"?</h2>
    <span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
  </div>
</div>

<div data-300="display:none;"data-301="display:inherit;"data-600="display:none;">
  <h1 class="scroll">invisible</h1>
  <span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
</div>

<div data-600="display:none;"data-601="display:inherit;"data-900="display:none;">
  <h1 class="scroll">unfair</h1>
  <span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
</div>

<div data-900="display:none;"data-901="display:inherit;"data-1200="display:none;">
  <h1 class="scroll">constant</h1>
  <span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
</div>

<div data-1200="display:none;"data-1201="display:inherit;"data-1500="display:none;">
  <h1 class="scroll">debilitating</h1>
  <span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
</div>

<div data-1500="display:none;"data-1501="display:inherit;"data-1800="display:none;">
  <h1 class="scroll">common</h1>
  <span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
</div>

<div data-1800="display:none;"data-1801="display:inherit;"data-2300="display:none;">
  <h2 class="quote">When I think “illness” I think, “<i>Hey, that’s a bummer, you’re sick. Let’s get you some medicine and maybe some soup.</i>”</h2>
  <span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
</div>

<div data-2300="display:none;"data-2301="display:inherit;"data-3300="display:none;">
  <h2 class="quote">But when you throw “mental” in there suddenly the game changes and I don’t know why. People treat it like it’s something other than illness, like it’s scary or shameful or something you should hide.</h2>
  <span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
</div>

<div data-3300="display:none;"data-3301="display:inherit;"data-4100="display:none;">
  <h2 class="quote">I think that’s dumb. I think I would like it if people offered more soup.<br> -Christine</h2>
  <span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
</div>

<div data-4100="display:none;"data-4101="display:inherit;"data-4600="display:none;">
  <h2 class="scroll">
    <div id="home-title">
      Do you want to
      <a href="give-soup.html">give</a> or
      <a href="get-soup.html">get</a> soup?
    </div>
  </h2>
</div>


<!--Call Skroller *Important-->
<script src="src/skrollr.js"></script>
<script type="text/javascript">
    var s = skrollr.init({
        render: function(data) {
        //Debugging - Log the current scroll position.
        $("#curtop").html(data.curTop);
        console.log(data.curTop);
    }
});

</script>

</div>

<div class="footer">
</div>

</body>
</html>
