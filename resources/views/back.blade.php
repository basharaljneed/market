<form action="{{route('uploadback')}}" method="POST" enctype="multipart/form-data">
    @csrf
<input type="file" name="backphoto">
<input type="name" name="name">
<input type="email" name="email">
<input type="password" name="password">

<button type="submit">save</button>

</form>