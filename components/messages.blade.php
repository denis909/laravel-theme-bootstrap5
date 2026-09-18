@if ($messages = session('status'))
    @foreach((array) $messages as $message)
        <x-admin::alert type="info" message="{{ $message }}" />
    @endforeach
@endif

@if ($messages = Session::get('success'))
    @foreach((array) $messages as $message)
        <x-admin::alert type="success" message="{{ $message }}" />
    @endforeach
@endif

@if ($messages = Session::get('error'))
    @foreach((array) $messages as $message)
        <x-admin::alert type="danger" message="{{ $message }}" />
    @endforeach
@endif