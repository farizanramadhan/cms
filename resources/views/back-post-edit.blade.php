@extends('master-back')

@section('page-title', 'Edit Post')

@section('main-content')
<!-- additional Plugin -->
<!-- summernote WYSIWYG -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="card card-nav-tabs">
      <div class="card-header" data-background-color="green">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
              <span class="nav-tabs-title"><b>EDIT EXISTING POSTS</b></span>
              <ul class="nav nav-tabs" data-tabs="tabs">
                <!-- tabs -->
              </ul>
          </div>
        </div>
      </div>
      <div class="card-content table-responsive">
        <form method="post" action="{{action('PostController@update', $id)}}">
          @csrf
          <input name="_method" type="hidden" value="PATCH">
          <div class="col-lg-12">
            <div class="input-group-lg">
              <input type="text" class="form-control" placeholder="Title" name="title" value="{{$post->title}}"required>
            </div>
            <div class="form-group is-empty is-fileinput">
                <input type="file" id="file" name="thumbnail">
                <div class="input-group">
                  <input type="text" readonly="" class="form-control" placeholder="Post's Thumbnail">
                    <span class="input-group-btn input-group-sm">
                      <button type="button" class="btn btn-fab btn-fab-mini">
                        <i class="material-icons">attach_file</i>
                      </button>
                    </span>
                </div>
            </div>
            <div class="input-group">
              <textarea id="textarea" name="content" class="form-control" rows="8" cols="100" required>{{$post->content}}</textarea>
            </div>
          </div>
          <div>
            <button type="submit" class="btn btn-success pull-right">Update</button>
            <button type="button" class="btn btn-warning pull-right" data-dismiss="modal">Save as Draft</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- summernote start -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#textarea').summernote({
          placeholder: 'Start your story here..',
          height: 200
        });
    });
</script>
@endsection
