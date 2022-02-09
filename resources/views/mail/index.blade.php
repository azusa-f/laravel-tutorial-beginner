<form action="{{ url('mail') }}" method='POST'>
    @csrf　
    <div class="form-group">

        <p>名前</p>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        @if ($errors->has('name'))
        <p class="bg-danger">{{ $errors->first('name') }}</p>
        @endif

        <p>メッセージ</p>
        <input type="text" name="message" value="{{ old('message') }}" class="form-control">
        @if ($errors->has('message'))
        <p class="bg-danger">{{ $errors->first('message') }}</p>
        @endif

        <p><input type="submit" value="送信" class="btn"></p>

    </div>
</form>


@if (Session::has('success'))
<div>
    <p class="bg-warning text-center">{{ Session::get('success')}}</p>
</div>
@endif