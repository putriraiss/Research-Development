<!DOCTYPE html>
<html data-theme="retro">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.0.4/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-6 my-3 w-auto">
        <div class="navbar bg-base-100">
          // search bar
          <div class="form-control">
            <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
          </div>
            <div class="avatar">
                <label tabindex="0" class=" avatar">
                  <div class="w-10 rounded-full">
                    <img alt="logo" src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                  </div>
                </label>
              </div>
    
            <div class="drawer">
                <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                  <!-- Page content here -->
                  <label for="my-drawer" class="btn btn-ghost text-xl">Researh and Development</label>
                </div> 
                <div class="drawer-side">
                  <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                  <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                    <!-- Sidebar content here -->
                    <ul class="menu bg-base-200 w-56 rounded-box">
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg light:text-white hover:bg-gray-100 light:hover:bg-gray-700 group">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#854836" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                               <span class="ms-3">Dashboard</span>
                            </a>
                         </li>
                         <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg light:text-white hover:bg-gray-100 light:hover:bg-gray-700 group">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#854836" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                               <span class="flex-1 ms-3 whitespace-nowrap">Feeds</span>
                               {{-- <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full light:bg-gray-700 light:text-gray-300">Pro</span> --}}
                            </a>
                         </li>
                         <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg light:text-white hover:bg-gray-100 light:hover:bg-gray-700 group">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#854836" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                               <span class="flex-1 ms-3 whitespace-nowrap">Projects</span>
                               {{-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full light:bg-blue-900 light:text-blue-300">3</span> --}}
                            </a>
                         </li>
                         <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg light:text-white hover:bg-gray-100 light:hover:bg-gray-700 group">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#854836" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                               <span class="flex-1 ms-3 whitespace-nowrap">Calendar</span>
                            </a>
                         </li>
                         <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg light:text-white hover:bg-gray-100 light:hover:bg-gray-700 group">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#854836" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg>
                               <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                            </a>
                         </li>
                    
                  </ul>
                </div>
              </div>
              <div class="avatar flex">
                <label tabindex="0" class=" avatar">
                  <div class="w-10 rounded-full">
                    <img alt="avatar" src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                  </div>
                </label>
    
              </div> 
        
    </div>
   
</body>
</html>
