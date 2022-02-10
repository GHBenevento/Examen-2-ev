<form class="form text-start bg-light m-5" method="post" enctype="multipart/form-data">
    <div>
        <div>

            <div class="form-group m-3 p-2">
                <input class="form-control" type="text" name="title" required>
                @error('title')
                <br>
                <p class="text-danger">*{{$message}}</p>
                <br>
                @enderror
            </div>

            <div class="form-group m-3 p-2">
                <input class="form-control" type="text" name="extract" required>
                @error('extract')
                <br>
                <p class="text-danger">*{{$message}}</p>
                <br>
                @enderror
            </div>

            <div class="form-group m-3 p-2">
                <input class="form-control" type="text" name="content" required>
                @error('content')
                <br>
                <p class="text-danger">*{{$message}}</p>
                <br>
                @enderror
            </div>

            <div class="form-group m-3 p-2">

                <select id="access" name="access">
                    <option value="private">Private</option>
                    <option value="public">Pubic</option>
                </select>

                @error('access')
                <br>
                <p class="text-danger">*{{$message}}</p>
                <br>
                @enderror
            </div>


            <div class="form-group m-3 p-2">

                <input type="checkbox" name="expire">

                @error('expire')
                <br>
                <p class="text-danger">*{{$message}}</p>
                <br>
                @enderror
            </div>

            <div class="form-group m-3 p-2">
                <input type="checkbox" name="comment">
                @error('comment')
                <br>
                <p class="text-danger">*{{$message}}</p>
                <br>
                @enderror
            </div>



            <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->id}}">

            <button type="submit" class="btn"> Submit </button>
</form>