<form class="form text-start bg-light m-5" method="post" enctype="multipart/form-data">
    <div>
        <p class="text-danger">
            {{ $error }}
        </p>

        <div>
            <div class="form-group m-3 p-2">
                <input class="form-control" type="text" name="title" value="{{ old('title'), $post->title }}" required>
                @error('title')
                <br>
                <p class="text-danger">*{{$message}}</p>
                <br>
                @enderror
            </div>

            <div class="form-group m-3 p-2">
                <input class="form-control" type="text" name="extract" value="{{ old('extract'), $post->extract }}" required>
                @error('extract')
                <br>
                <p class="text-danger">*{{$message}}</p>
                <br>
                @enderror
            </div>

            <div class="form-group m-3 p-2">
                <input class="form-control" type="text" name="content" value="{{ old('content'), $post->content }}" required>
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

                <input type="checkbox" name="expire" value="{{ old('expire') == 'on' ? 'checked' : '' }}">

                @error('expire')
                <br>
                <p class="text-danger">*{{$message}}</p>
                <br>
                @enderror
            </div>

            <div class="form-group m-3 p-2">
                <input type="checkbox" name="comment" value="{{ old('comment') == 'on' ? 'checked' : '' }}">
                @error('comment')
                <br>
                <p class="text-danger">*{{$message}}</p>
                <br>
                @enderror
            </div>


            <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->id}}">

            <button type="submit" class="btn"> Submit </button>
</form>