


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script data-ad-client="ca-pub-9330004548448116" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/responsiveslides.min.js')}}"></script>
<script src="{{asset('js/util.js')}}"></script>
@if(!empty($scripts))
    @foreach ($scripts as $script_name)
        <script src="{{ asset('js/'.$script_name) }}"></script>
    @endforeach
@endif
<!-- //js -->

@yield('content_header')
