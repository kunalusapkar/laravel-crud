@include('inc.header')
  <div class="container">
    <div class="row">
      <div class = "col-md-6">
                <form method="POST" action="{{ url('/edit',array($articles->id)) }}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Laravel Crud Application</legend>
                    @if(count($errors)>0)
                      @foreach($errors->all() as $error)
                          <div class="alert alert-danger">
                            {{$error}}
                          </div>
                      @endforeach
                    @endif
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?php echo $articles->title ?>" aria-describedby="emailHelp" placeholder="Enter title">
                      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                     <textarea class="form-control" placeholder="description" name="description"  id="" cols="30" rows="10"><?php echo $articles->description ?></textarea>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{('/')}}" class="btn btn-primary">Back</a>
                    </div>
                </fieldset>
          </form>
      </div>
    </div>
  </div>

@include('inc.footer')