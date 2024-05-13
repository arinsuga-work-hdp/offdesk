

<form role="form" id="frmData" method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
    @csrf

    <input type="text" name='fullname'>
    <button onclick="event.preventDefault(); document.getElementById('frmData').submit()">save</button>

</form>

