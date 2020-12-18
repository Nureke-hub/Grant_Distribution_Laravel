<nav class="shift">

    <ul>
        <img style = "margin-left:35px; float: left;"src="./img/iitu_logo.png">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="instruction.html">Instruction</a></li>
        <li><a href="{{route('contacts')}}">Contacts</a></li>
        <li><a href="{{route('results')}}">Results</a></li>
        @if(Auth::check())
            <li><a href="{{route('profile')}}">{{Auth::user()->getEmailOrName()}}</a></li>
            <li><a href="{{route('signout')}}">Sign Out</a></li>

        @else
            <li><a href="{{route('signin')}}">Sign In</a></li>
        @endif
    </ul>
</nav>
