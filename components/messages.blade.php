@if ($messages = session('status'))
    {{ session()->forget('status') }}
    @foreach((array) $messages as $message)
        <x-admin::alert type="info" message="{{ $message }}" />
    @endforeach
@endif

@if ($messages = Session::get('success'))
    {{ session()->forget('success') }}
    @foreach((array) $messages as $message)
        <x-admin::alert type="success" message="{{ $message }}" />
    @endforeach
@endif

@if ($messages = Session::get('error'))
    {{ session()->forget('error') }}
    @foreach((array) $messages as $message)
        <x-admin::alert type="danger" message="{{ $message }}" />
    @endforeach
@endif

@if ($messages = Session::get('warning'))
    {{ session()->forget('warning') }}
    @foreach((array) $messages as $message)
        <x-admin::alert type="warning" message="{{ $message }}" />
    @endforeach
@endif

@if ($messages = Session::get('info'))
    {{ session()->forget('info') }}
    @foreach((array) $messages as $message)
        <x-admin::alert type="info" message="{{ $message }}" />
    @endforeach
@endif