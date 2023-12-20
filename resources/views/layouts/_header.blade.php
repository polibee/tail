<div class="navbar bg-base-100">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl">Weibo App</a>
    </div>
    <div class="flex-none gap-2">
        <div class="form-control">
            <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
        </div>
        @if (Auth::check())
            <a class="btn btn-ghost" href="{{route('users.index')}}">用户列表</a>

            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="User Avatar" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a class="justify-between">
                            {{ Auth::user()->name }}
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a href="{{ route('users.show', Auth::user()) }}">个人中心</a></li>
                    <li><a href="{{route('users.edit',Auth::user())}}">编辑资料</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        >
                            退出
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>






</div>
