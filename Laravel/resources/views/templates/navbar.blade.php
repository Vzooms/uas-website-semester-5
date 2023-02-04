<div class="bg-warning allCenter gap-5">
    <a class="text-dark {{$page == "Home" ? "fw-bold" : ''}}" href="/home">Home</a>
    <a class="text-dark {{$page == "Cart" ? "fw-bold" : ''}}" href="/cart">Cart</a>
    <a class="text-dark {{$page == "Profile" ? "fw-bold" : ''}}" href="/profile">Profile</a>
    @if(Auth::user()->role->role_name == "Admin")
        {{-- admin only --}}
        <a class="text-dark {{$page == "Account Maintenance" ? "fw-bold" : ''}}" href="/account_maintenance">Account Maintenance</a>
    @endif
</div>
