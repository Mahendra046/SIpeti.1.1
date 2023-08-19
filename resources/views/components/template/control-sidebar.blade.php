<aside class="control-sidebar control-sidebar-dark" style="background: rgb(0,0,0,0.5)">
    <!-- Control sidebar content goes here -->
    <div class="p-3" style="
        display:flex;
        flex-wrap:wrap;
        justify-content:space-between;
        gap:1rem;
    ">
        @foreach (auth()->user()->role as $role)
        <x-template.module-box
            url="{{$role->module->url}}"
            color="{{$role->module->color}}"
            title="{{$role->module->title}}"
            subtitle="{{$role->module->subtitle}}" />
        @endforeach
    </div>
</aside>
