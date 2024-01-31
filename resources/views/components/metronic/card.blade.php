@props([
    'titulo' => '',
    'toolbar' => '',
    'footer' => '',
])
<div class="card shadow-sm">
    <div class="card-header">
        {{$titulo}}
        {{$toolbar}}
    </div>
    <div class="card-body">
        {{$slot}}
    </div>
    {{$footer}}
</div>
