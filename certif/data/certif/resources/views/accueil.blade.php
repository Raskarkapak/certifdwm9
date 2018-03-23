@extends('layouts.base')
@section('main')
 <p>Cette page autorise les codes de triche</p>
 <script>
        if ( window.addEventListener ) {
var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
window.addEventListener("keydown", function(e){
kkeys.push( e.keyCode );
if ( kkeys.toString().indexOf( konami ) >= 0 ) {
alert('Mon ex, le konami code !');
window.location = "https://www.youtube.com/watch?v=_-VH3k7F338";
}
}, true);
}
    </script>
@endsection