<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Laravel Guide</a>
            <ul class="nav navbar-nav">
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </div>
</nav>
@if ( count ( $errors - > all ()))
< div class = " row " >
< div class = " col - md -12 " >
< div class = " alert alert - danger " >
<ul >
@foreach ( $errors - > all () as $error )
<li >{{ $error }} </ li >
@endforeach
</ ul >
</ div >
</ div >
</ div >
@endif