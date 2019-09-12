
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <?php $site = M('site')->where(array('version_id' => 1))->find(); ?>
    <?php
    $p = pg('p') == '' ? 1 : pg('p');
    $classify_id = get_classify_id();
    $content_id = pg('content_id');
    $type_id = get_type_id();
    $search = pg('search');
    $recursive_classify_id = recursive_classify_id($classify_id, 3) == '' ? 3 : recursive_classify_id($classify_id, 3);
    $mobile_url = 'mobile.php?' . $_SERVER["QUERY_STRING"];
    if (file_exists('mobile.php')) {
        ?>

    <?php } ?>
    <title><?php echo $site['title'] ?></title>
    <meta name="keywords" content="<?php echo $site['keywords']; ?>"/>
    <meta name="description" content="<?php echo $site['description']; ?>"/>
<link rel="stylesheet" type="text/css" href="css2/subpage.css">
<script src="js2/jquery.js"></script>
<script src="js2/nav.js"></script>
<style>
.head {
    background: #0075bb
}
.foot {
    background: #1e1f24
}
.nav {
    background: #2b2b2b !important
}
.nav_color {
    background: #2b2b2b
}
</style>
<script src="js2/search.js"></script>
<script src="js2/respond.js"></script>
<script src="js2/sdcms.js"></script>
<script src="js2/jquery.validator.js"></script>
<link rel="stylesheet" type="text/css" href="css2/master.css">
<link rel="stylesheet" type="text/css" href="css2/swiper.css">
<script src="js2/swipe.js"></script>
<script src="js2/lihe.js"></script>
</head>
<body>
