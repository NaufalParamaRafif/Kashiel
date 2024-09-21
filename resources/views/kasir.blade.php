<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Navbar Start -->
    <div class="navbar bg-base-100 shadow-md rounded-lg">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">daisyUI</a>
        </div>
        <div class="flex-none gap-2">
            <div class="form-control">
            <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
            </div>
            <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                <img
                    alt="Tailwind CSS Navbar component"
                    src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li>
                <a class="justify-between">
                    Profile
                    <span class="badge">New</span>
                </a>
                </li>
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
            </ul>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Content Item Start -->
    <div class="flex flex-col place-content-around bg-slate-500 w-full sm:flex-row sm:place-content-evenly">
        <!-- Start item -->
        <div class='bg-green-500 m-2 w-1/2 sm:md:grow sm:md:self-center'>
            <div class="item">
                <p>Test</p>
            </div>
        </div>
        <!-- End item -->

        <!-- Start Kwitansi -->
        <div class='bg-green-500 m-2 w-2/5'>
            <div class="item">
                <p>Test</p>
            </div>
        </div>
        <!-- End Kwitansi -->
    </div>
</body>
</html>