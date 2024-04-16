<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing</title>
    <link rel="stylesheet" href="maps-master.css">
</head>
<body>
    <header>
        <a href="index.html"><h1>touch the maps in your brain</h1></a>
    </header>
    <div class="wrapper">
    <nav>
        <a href="poetry.html"><h2>the poetry</h2></a>
        <a href="experiment.html"><h2>the experiment</h2></a>
        <a href="exhibition.html"><h2>exhibition</h2></a>
        <a href="maillist.html"><h2>stay updated</h2></a>
        <a href="sources.html"><h2>source list</h2></a>
    </nav>
    </div>
    <main>
        <h1 class="forerow">we will keep you updated. thank you!</h1>
        <div class="forerow">
        family name&colon; <?php print $_POST['family-name']?>
        <br>
        email&colon; <?php print $_POST['email']?>
        <br>
        suggested news&colon; <?php print $_POST['feedback']?>
        <br>
    </main>
    <footer>&copy;Nat Stewart</footer>
</body>
</html>