<html>
<head>
    <script>
$('.keep-open').on({
    "shown.bs.dropdown": function() { $(this).attr('closable', false); },
    //"click":             function() { }, // For some reason a click() is sent when Bootstrap tries and fails hide.bs.dropdown
    "hide.bs.dropdown":  function() { return $(this).attr('closable') == 'true'; }
});

$('.keep-open').children().first().on({
  "click": function() {
    $(this).parent().attr('closable', true );
  }
});
</script>

</head>
<body>
<div class="dropdown keep-open">
    <!-- Dropdown Button -->
    <button id="dLabel" role="button" href="#" class="btn btn-primary"
            data-toggle="dropdown" data-target="#" >
        Dropdown <span class="caret"></span>
    </button>

    <!-- Dropdown Menu -->
    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
    </ul>
</div>
</body>
</html>
