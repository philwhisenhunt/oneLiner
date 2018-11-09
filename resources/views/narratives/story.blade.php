<div class="storyholder col-md-12 mb-3">

<h2>The Story so Far</h2>

    @foreach ($sentences as $sentence)

        <span>
        {{ $sentences->sentence }}
        </span>

    @endforeach

</div>