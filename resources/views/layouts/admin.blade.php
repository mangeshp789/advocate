<!Doctype html>
<html>
<header>@include("layouts/parts/admin/header")</header>
<body class="page-loading">
@include("layouts/parts/admin/sidebar")
@include("layouts/parts/admin/topheader")

@yield("content")
@include("layouts/parts/admin/footer")
</body>
</html>