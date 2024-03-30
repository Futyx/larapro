@extends('layouts.resume')

@section('content')

<section >
    <header>
        <div class='grid grid-cols-3 place-items-center space-x-3'>
            
            <img class=' size-24 rounded-full' src="{{'/storage/' . $user->avatar}}" alt="{{$user->name}}" />
            <div class='grid grid-rows-2 p-10 col-span-2 bg-blue-300'>
                {{$user->name}}
                <h1>role</h1>
             </div>
        </div>
            <div class='bg-green-300 pt-10 mt-12'>
                {{$user->bio}}
            </div>
            
    </header>


</section>

@endsection



<!-- <div class='bg-pink-300'>
    <div>
        <div class='bg-blue-300'>
            <h1>avatar</h1>
       
        </div>
    <div class='bg-green-300'>
        <h1>name</h1>
        
    </div>
</div>
    <div class='bg-purple-300'>
        <h1>links</h1>

     </div>

</div> -->