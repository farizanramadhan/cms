@extends('master-back')

@section('page-title', 'Post')

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
                <span class="nav-tabs-title"><b>ALL POSTS</b></span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="active pull-right">
                    <a class="btn" data-toggle="modal" data-target="#exampleModal">
                      <i class="material-icons">add</i>
                      Add New Post
                    <div class="ripple-container"></div></a>
                  </li>
                </ul>
            </div>
        </div>
      </div>
      <div class="card-content table-responsive">
        <div class="row">
          <div class="content">
            <div class="card-content table-responsive table-full-width">
            		<table class="table">
            			<thead class="text-success">
            				<th class="font-weight-bold text-uppercase">Title</th>
            				<th class="font-weight-bold text-uppercase">Content</th>
            				<th class="font-weight-bold text-uppercase">Date</th>
                    <th class="font-weight-bold text-uppercase">Actions</th>
            			</thead>
            			<tbody>
                    @foreach($posts as $post)
                    <tr>
                      <td>{{$post['title']}}</td>
                      <td>{{strip_tags($post['content'])}}</td>
                      <td>{{$post['created_at']}}</td>
                      <td>
                        <a class="btn btn-warning btn-sm" href="{{action('PostController@edit', $post['id'])}}"><i class="material-icons">mode_edit</i></a>
                        <form action="{{action('PostController@destroy', $post['id'])}}" method="post">
                          @csrf
                          <input name="_method" type="hidden" value="DELETE">
                          <button class="btn btn-danger btn-sm" type="submit"><i class="material-icons">delete</i></button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
            			</tbody>
            		</table>
            	</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Post</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="material-icons">clear</i></span>
        </button> -->
      </div>
      <form method="post" action="{{url('posts')}}" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="input-group-lg">
              <input type="text" class="form-control" placeholder="Title" name="title" required>
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
              <textarea id="textarea" name="content" class="form-control" rows="8" cols="80" required></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Save as Draft</button>
        <button type="submit" class="btn btn-success">Publish</button>
      </div>
    </form>
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
