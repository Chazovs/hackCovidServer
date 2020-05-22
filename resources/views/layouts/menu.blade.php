
<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{{ route('companies.index') }}"><i class="fa fa-edit"></i><span>Companies</span></a>
</li>

<li class="{{ Request::is('branches*') ? 'active' : '' }}">
    <a href="{{ route('branches.index') }}"><i class="fa fa-edit"></i><span>Branches</span></a>
</li>

<li class="{{ Request::is('states*') ? 'active' : '' }}">
    <a href="{{ route('states.index') }}"><i class="fa fa-edit"></i><span>States</span></a>
</li>

<li class="{{ Request::is('regKeys*') ? 'active' : '' }}">
    <a href="{{ route('regKeys.index') }}"><i class="fa fa-edit"></i><span>Reg Keys</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

