<html>
<head>
<title>404 Page Not Found</title>
<style type="text/css">
    body {
        background-color:	#FFF;
        margin:				0px;
        font-family:		Lucida Grande, Verdana, Sans-serif;
        font-size:			16px;
        color:				#9B9B9B;
    }
    div#logo {
        margin: 50px auto 0px;
        width: 180px;
    }
    h1 {
        color: #9B9B9B;
        font-size: 38px;
        margin: 25px auto 10px;
        width: 600px;
        text-align: center;
    }
    p {
        text-align: center;
        margin-bottom: 80px
    }
    a#back {
        display:block;
        background-color: #dddddd;
        color: #457039;
        border-radius: 10px;
        margin: 0 auto;
        width: 120px;
        padding: 10px 5px;
        font-size: 16px;
        text-align: center;
    }
    a#back:hover {
        color:#71B75D;
    }
</style>
<script type="text/javascript">
    setTimeout('redirect()', 3000);
    function redirect() {
        location.href = 'http://www.zionusbsm.com/';
    }
</script>
</head>
<body>
    <div id="logo">
        <a href="/" alt="Zionus BSM"><img src="/img/logo.png" alt="Zionus BSM" width="180" height="115"/></a>
    </div>
    <h1><?php echo $heading; ?></h1>
    <?php echo $message; ?>
    <a id="back" href="/" title="back to home">back to home</a>
</body>
</html>
