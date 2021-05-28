<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>image</title>
</head>
<body>
<img src="image.php">
<input hidden id="count" value="0">
<div class="sum">0</div>
<script type="text/javascript">
    var incr, number = Number.parseInt(document.getElementById('count').value),
        sum = document.querySelector('.sum');
    incr = ++number;
    sum.innerHTML = incr;
    document.getElementById('count').value = incr;
</script>
</body>
</html>