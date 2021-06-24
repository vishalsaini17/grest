<div>
    <nav class="policy-nav d-flex align-item-center flex-wrap text-white-50 align-items-baseline" style="gap: 1rem">
            <a href="{{route('privacy.policy')}}" class="btn btn-secondary {{Request::path()=='privacy-policy' ? 'active' : ''}}">Privacy Policies</a>
            <a href="{{route('terms.condition')}}" class="btn btn-secondary {{Request::path()=='terms-condition' ? 'active' : ''}}">Terms & Conditions</a>
            <a href="{{route('refund.policy')}}" class="btn btn-secondary {{Request::path()=='refund-policy' ? 'active' : ''}}">Refund Policies</a>
            <a href="{{route('shipping.policy')}}" class="btn btn-secondary {{Request::path()=='shipping-policy' ? 'active' : ''}}">Shipping Policies</a>
            <a href="{{route('cancellation.policy')}}" class="btn btn-secondary {{Request::path()=='cancellation-policy' ? 'active' : ''}}">Cancellation Policies</a>
            {{-- <a href="#" class="btn btn-secondary {{Request::path()=='home' ? 'active' : ''}}">Private Policies</a> --}}
    </nav>
</div>