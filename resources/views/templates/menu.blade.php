<div style="float: left;">
    <img  @if($student->photo)
          src="{{asset('documents')}}/{{$student->photo}}"
          @endif
          alt="..." class="img-thumbnail mt-4" style="width: 250px; height: 250px">
    <table class="table table-hover mt-4" style="width: 250px;">
        <thead>
        <tr>
            <th scope="col"> @if($student->full_name)
                    {{$student->full_name}}
                @endif
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="{{route('profile')}}" style="text-decoration: none; color:rgb(0,223,195) "> Profile </a></td>
        </tr>
        <tr>
            <td><a href="{{route('choice')}}" style="text-decoration: none; color:rgb(0,223,195) "> My chooses</a></td>
        </tr>

        <tr>
            <td colspan="2"><a href="{{route('status')}}" style="text-decoration: none;color:rgb(0,223,195) "> Status</a></td>
        </tr>
        <tr>
            <td colspan="2"><a href="{{route('messages')}}" style="text-decoration: none; color:rgb(0,223,195) "> Messages</a></td>
        </tr>

        </tbody>
    </table>
</div>
