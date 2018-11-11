
@extends ('layouts.master')

   @section ('content')

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
    @endsection