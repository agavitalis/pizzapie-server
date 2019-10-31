@if(session('success'))
<div class="col-md-12 alert alert-success alert-dismissable text-center">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    {{ session('success') }}
</div>
@endif

@if(session('warning'))
<div class="col-md-12 alert alert-warning alert-dismissable text-center">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    {{ session('warning') }}
</div>
@endif

@if(session('error'))
<div class="col-md-12 alert alert-danger alert-dismissable text-center">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    {{ session('error') }}
</div>
@endif
