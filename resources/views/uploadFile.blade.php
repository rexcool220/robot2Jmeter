    <form class="form-horizontal" method="post" action="{{ action('UploadController@processFile') }}" accept-charset="UTF-8" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" class="form-control" id="uploadFile" name="uploadFile" placeholder="upload XML" value="">
        <button type="submit" class="btn btn-primary">Summit</button>
    </form>