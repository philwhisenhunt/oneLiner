<div class="storyholder col-md-12 mb-3">

<h2>The Story so Far</h2>
    <p>
        @foreach ($sentences as $sentence)

            <span>
            {{ $sentence->sentence }}
            </span>

        @endforeach
    </p>
</div>