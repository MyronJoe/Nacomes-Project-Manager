@if(session()->has('message'))

    <div style="background-color: #D4EDDA; padding: 1em; border-radius: 5px; width: 90%; margin: 1em auto 0 auto">
        {{session()->get('message')}}
    </div>

@endif