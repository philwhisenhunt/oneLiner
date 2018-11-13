<div class="col-md-12 mb-3">

<h2 class="py-5 text-center">The Story so Far</h2>
    <p class="storyholder">
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