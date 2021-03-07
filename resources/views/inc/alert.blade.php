@if (Session('message'))
                <div class="alert alert-info fade in">
                    <a href="#" class="close" data-dismiss="alert">×</a>
                    <strong>Success!</strong> {{ Session('message') }}
                </div>
            @endif
@if ($errors->any())
    @foreach ($errors->all() as $item)
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert">×</a>
        <strong>Error!</strong> {{ $item }}
    </div>
    @endforeach
@endif
