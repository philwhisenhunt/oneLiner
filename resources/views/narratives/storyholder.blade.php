

<div class="col-md-12 mb-3">

<h3 class="text-center">The Story so Far</h3>
    <p class="storyholder">

    <!-- sort by story with an if else statement here? -->
    @foreach ($sentences as $sentence)

<span>
{{ $sentence->sentence }}
</span>

@endforeach
    </p>
    <div class="large-link btn-lg">
        <a href="/giant">
        <button class="checkout-btn btn btn-primary btn-md" type="link">View Extra Large</button>

        
        </a>
    </div>
</div>
