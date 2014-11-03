<?phpsession_start();
define('ADMIN_EMAIL', 'friendsvrg@gmail.com', true);
define('UPLOAD_FOLDER', 'uploads/');
define('KEYWORDS', 'need');// Site Keywords, used if a page keywords is not set.
define('DESC', 'need');// Site Desc, used if a page desc is not set.
require('functions.php');
require('connect.php');
$connect = new mySQLConnect();
//User Setup: Session admin = 1 = admin and 0 = user?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56274210-1', 'auto');
  ga('send', 'pageview');
</script>
