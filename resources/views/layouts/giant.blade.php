
@extends ('layouts.master')

   @section ('giant-content')
<!-- Moved content outside of this to make it break the halfway point -->

    @endsection

   <body class="bg-light">

<div class="container">
    <div class="giant-type">
        

        <p>
                @foreach ($sentences as $sentence)

                    <span>
                    {{ $sentence->sentence }}
                    </span>

                @endforeach
            </p>


    </div>
</div>
</body>