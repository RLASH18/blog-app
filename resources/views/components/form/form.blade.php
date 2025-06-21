@props(['method' => 'POST', 'action'])

<form {{ $attributes }} action="{{ $action }}" method="POST" class="max-w-sm mx-auto">
    @csrf

    @if (!in_array(($method), ['POST', 'GET']))
        @method($method)
    @endif

    <div class="m-5">
        {{ $slot }}
    </div>
</form>
