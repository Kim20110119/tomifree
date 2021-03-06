@section('javascript')
<script src="{{url('js','jquery.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{url('js','bootstrap.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{url('js','rydgen-framework.js')}}" type="text/javascript" charset="utf-8"></script>
<script>
var pageUrl = window.location.href;
var pageMetaTitle = document.title;
document.body.innerHTML = document.body.innerHTML.replace(/pageUrlReplace/g, pageUrl);
focus();
document.body.innerHTML = document.body.innerHTML.replace(/pageMetaTitleReplace/g, pageMetaTitle);
focus();
</script>
<!-- Google Analytics -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments);
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-20358469-1', 'auto');
    ga('send', 'pageview');
</script>
@endsection