<?php
require_once '../links.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Sampsa Saarela | sampsa.info</title>

	<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
	<link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" />

	<meta name="DC.subject" content="" />
	<meta name="keywords" content="" />

	<meta name="DC.Description" content="" />
	<meta name="description" content="" />

	<meta name="robots" content="index,follow" />
	<meta name="creator" content="Sampsa Saarela" />
	<meta name="DC.creator" content="Sampsa Saarela" />
	<meta name="DC.creator.email" content="info@sampsa.info" />
	<meta name="DC.creator.url" content="http://www.sampsa.info/" />

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<div class="wrap">
    <img src="http://www.gravatar.com/avatar/3aea969d5128e7690d4479bd831a8ac0.png?s=100" alt="" class="photo" />
    <div class="sitename">SAMPSA.INFO</div>
    <div class="name">SAMPSA SAARELA</div>
    <div class="social">
      <?php foreach($some_links as $name => $link) { ?>
        <div class="<?php echo $name; ?> iconblock" data-name="<?php echo $name; ?>" data-image="shots/<?php echo $shots[$name]; ?>.png"><a href="<?php echo $link; ?>"><img src="icons/<?php echo $name; ?>.png" alt="<?php echo $name; ?>"></a></div>
        <?php } ?>
    </div>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1933586-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
