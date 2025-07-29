<div id="loading">
    @include('partials._body_loader')
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    @include('partials._body_header')
    <div class="content-page">
        {{$slot}}
    </div>
    @include('partials._modal')
</div>
<!-- Wrapper End-->
<div class="container-fluid">
    <div class="row">
        @include('partials._body_footer')
    </div>
</div>

@include('partials._scripts')
