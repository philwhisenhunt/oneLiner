
@extends ('layouts.master')

 

   <body class="bg-light">
   
<div class="container">
    <div class="giant-type">
<!-- Moved content outside of this to make it break the halfway point -->


        

        <p>
            <!-- Decrease size for each sentence? -->
                @foreach ($sentences as $sentence)

                    <span>
                    {{ $sentence->sentence }}
                    </span>

                @endforeach
            </p>


    </div>
</div>
</body>